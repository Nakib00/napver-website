<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\{teamcategory, team};

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teamCategory = teamcategory::all();
        $team = team::all();
        return view('admin.team.team', ['teamCategory' => $teamCategory, 'team' => $team]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $teamCategory = teamcategory::all();
        return view('admin.team.create', ['teamCategory' => $teamCategory]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size is 2MB
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|exists:teamcategories,id',
            'status' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/uploads/image/team');
            // Get the public path of the stored file
            $imageUrl = asset(str_replace('public', 'storage', $imagePath));
        }

        // Save data to database
        $team = new Team();
        $team->name = $validatedData['name'];
        $team->image = $imageUrl ?? null; // If there's no image uploaded, set to null
        $team->designation = $validatedData['designation'];
        $team->description = $validatedData['description'];
        $team->category_id = $validatedData['category'];
        $team->status = $validatedData['status'];
        $team->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Team added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $teamdata = team::findOrFail($id);
        return view('admin.team.show', ['teamdata' => $teamdata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $teamCategory = teamcategory::all();
        $teamdata = team::findOrFail($id);

        return view('admin.team.edit', ['teamdata' => $teamdata, 'teamCategory' => $teamCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'designation' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|exists:teamcategories,id',
        ]);

        // Find the team by ID
        $team = Team::findOrFail($id);

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/uploads/image/team');
            // Get the public path of the stored file
            $imageUrl = asset(str_replace('public', 'storage', $imagePath));

            // Delete old image if exists
            if ($team->image) {
                Storage::delete(str_replace('storage', 'public', $team->image));
            }

            // Update image URL
            $team->image = $imageUrl;
        }

        // Update other fields
        $team->name = $validatedData['name'];
        $team->designation = $validatedData['designation'];
        $team->description = $validatedData['description'];
        $team->category_id = $validatedData['category'];
        $team->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Team updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $team = team::findOrFail($id);
        $team->delete();

        return redirect()->back()->with('success', 'Delete Team successfully.');
    }

    // Team status change
    public function teamstatus($id, $status)
    {
        $teamstatuse = team::findOrFail($id);
        $teamstatuse->status = $status;
        $teamstatuse->save();

        return redirect()->back()->with('success', 'Team status changed successfully.');
    }

    // create new categories for team
    public function creatteamcategory(Request $request)
    {

        // Validate the incoming request
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new TeamCategory instance
        $teamCategory = new teamCategory();
        $teamCategory->name = $request->input('categoryName');
        $teamCategory->status = ($request->input('status') === 'active') ? true : false;
        $teamCategory->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Category added successfully.');
    }

    // Change category status
    public function changestatus($id, $status)
    {

        $category = teamCategory::findOrFail($id);
        $category->status = $status;
        $category->save();

        return redirect()->back()->with('success', 'Category status changed successfully.');
    }

    //Category delete
    public function category_delete($id)
    {
        $category = teamCategory::findOrFail($id);

        // Check if there are related records in the teams table
        if ($category->teams()->exists()) {
            return redirect()->back()->with('error', 'Cannot delete category. Related teams exist.');
        }

        $category->delete();

        return redirect()->back()->with('success', 'Delete Category successfully.');
    }
}
