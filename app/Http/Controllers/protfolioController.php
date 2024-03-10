<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\{pcategory, protfolio};

class protfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = pcategory::all();
        $protfolio = protfolio::all();
        return view('admin.protfolio.protfolio', ['category' => $category, 'protfolio' => $protfolio]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = pcategory::all();
        return view('admin.protfolio.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'clintname' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size is 2MB
            'category' => 'required|exists:teamcategories,id',
            'description' => 'required|string',
            'status' => 'required',
        ]);

        // Initialize an empty array to store image URLs
        $imageUrls = [];

        // Handle file upload for each image
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('public/uploads/image/protfolio');
                // Get the public path of the stored file
                $imageUrl = asset(str_replace('public', 'storage', $imagePath));
                $imageUrls[] = $imageUrl; // Store image URL in the array
            }
        }

        // Save data to database
        $protfolio = new protfolio();
        $protfolio->title = $validatedData['title'];
        $protfolio->image = json_encode($imageUrls); // Convert array to JSON and store in database
        $protfolio->clientname = $validatedData['clintname'];
        $protfolio->url = $validatedData['url'];
        $protfolio->description = $validatedData['description'];
        $protfolio->category_id = $validatedData['category'];
        $protfolio->status = $validatedData['status'];
        $protfolio->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Protfolio added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $protfoliodata = protfolio::findOrFail($id);
        return view('admin.protfolio.show', ['protfoliodata' => $protfoliodata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = pcategory::all();
        $protfoliodata = protfolio::findOrFail($id);
        return view('admin.protfolio.edit', ['protfoliodata' => $protfoliodata, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'clintname' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size is 2MB
            'category' => 'required|exists:teamcategories,id',
            'description' => 'required|string',
        ]);

        // Find the portfolio item by its ID
        $portfolio = protfolio::findOrFail($id);

        // Initialize an empty array to store image URLs
        $imageUrls = [];

        // Handle file upload for each new image
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('public/uploads/image/protfolio');
                // Get the public path of the stored file
                $imageUrl = asset(str_replace('public', 'storage', $imagePath));
                $imageUrls[] = $imageUrl; // Store image URL in the array
            }
        }

        // If new images are uploaded, update the image field with the new URLs
        if (!empty($imageUrls)) {
            $portfolio->image = json_encode($imageUrls);
        }

        // Update other fields
        $portfolio->title = $validatedData['title'];
        $portfolio->clientname = $validatedData['clintname'];
        $portfolio->url = $validatedData['url'];
        $portfolio->description = $validatedData['description'];
        $portfolio->category_id = $validatedData['category'];

        // Save the updated data
        $portfolio->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $protfolio = protfolio::findOrFail($id);
        $protfolio->delete();

        return redirect()->back()->with('success', 'Delete protfolio successfully.');
    }


    // create new categories for protfolio
    public function creatcategory(Request $request)
    {

        // Validate the incoming request
        $request->validate([
            'categoryName' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        // Create a new TeamCategory instance
        $Category = new pcategory();
        $Category->name = $request->input('categoryName');
        $Category->status = ($request->input('status') === 'active') ? true : false;
        $Category->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Category added successfully.');
    }

    // Change category status
    public function changestatus($id, $status)
    {

        $category = pcategory::findOrFail($id);
        $category->status = $status;
        $category->save();

        return redirect()->back()->with('success', 'Category status changed successfully.');
    }

    //Category delete
    public function category_delete($id)
    {
        $category = pcategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Delete Category successfully.');
    }
}
