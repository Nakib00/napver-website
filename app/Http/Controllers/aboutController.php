<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.about.about');
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
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'shortDescription' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension(); // Get the file extension
            $filename = time() . '_' . uniqid() . '.' . $extension; // Generate a unique filename
            $path = 'uploads/image/about'; // Define the target directory
            $image->move($path, $filename); // Move the uploaded file to the target directory
            $imagePath = $path . '/' . $filename; // Set the logo path
        }

        // Create a new instance of the about model
        $about = new About();
        $about->title = $validatedData['title'];
        $about->shortDescription = $validatedData['shortDescription'];
        $about->description = $validatedData['description'];
        $about->image = $imagePath ?? null;


        // Save the about instance
        if ($about->save()) {
            return redirect()->back()->with('success', 'About information has been saved successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to save about information.');
        }
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
