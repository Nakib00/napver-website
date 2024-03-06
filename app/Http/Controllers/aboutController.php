<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\about;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $about = about::all();
        return view('admin.about.about', ['about' => $about]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.about.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size is 2MB
            'shortsummary' => 'required|string',
            'description' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/uploads/image/about');
            // Get the public path of the stored file
            $imageUrl = asset(str_replace('public', 'storage', $imagePath));
        }

        // Save data to database
        $about = new about();
        $about->title = $validatedData['title'];
        $about->image = $imageUrl ?? null; // If there's no image uploaded, set to null
        $about->shortDescription = $validatedData['shortsummary'];
        $about->description = $validatedData['description'];
        $about->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'About added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $aboutdata = about::findOrFail($id);
        return view('admin.about.edit', ['aboutdata' => $aboutdata]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'shortsummary' => 'required|string',
            'description' => 'required|string',
        ]);

        // Find the about model by ID
        $about = about::findOrFail($id);

        // Update the model with the validated data
        $about->title = $validatedData['title'];
        $about->shortDescription     = $validatedData['shortsummary'];
        $about->description = $validatedData['description'];

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/uploads/image/about');
            $imageUrl = asset(str_replace('public', 'storage', $imagePath));

            // Delete old image if it exists
            if ($about->image) {
                Storage::delete(str_replace('storage', 'public', $about->image));
            }

            // Update image URL
            $about->image = $imageUrl;
        }

        // Save the updated model
        $about->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
