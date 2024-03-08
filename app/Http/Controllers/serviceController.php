<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\service;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $service = service::all();
        return view('admin.service.service', ['service' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.service.create');
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
            'description' => 'required|string',
            'status' => 'required',

        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/uploads/image/service');
            // Get the public path of the stored file
            $imageUrl = asset(str_replace('public', 'storage', $imagePath));
        }

        // Save data to database
        $service = new service();
        $service->title = $validatedData['title'];
        $service->image = $imageUrl ?? null; // If there's no image uploaded, set to null
        $service->description = $validatedData['description'];
        $service->status = $validatedData['status'];
        $service->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Service added successfully.');
    }

    // service status change
    public function changestatus($id, $status)
    {
        $servicestatuse = service::findOrFail($id);
        $servicestatuse->status = $status;
        $servicestatuse->save();

        return redirect()->back()->with('success', 'Service status changed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $servicedata = service::findOrFail($id);
        return view('admin.service.show', ['servicedata' => $servicedata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $servicedata = service::findOrFail($id);
        return view('admin.service.edit', ['servicedata' => $servicedata]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        // Find the about model by ID
        $service = service::findOrFail($id);

        // Update the model with the validated data
        $service->title = $validatedData['title'];
        $service->description = $validatedData['description'];

        // Handle file upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/uploads/image/seservice');
            $imageUrl = asset(str_replace('public', 'storage', $imagePath));

            // Delete old image if it exists
            if ($service->image) {
                Storage::delete(str_replace('storage', 'public', $service->image));
            }

            // Update image URL
            $service->image = $imageUrl;
        }

        // Save the updated model
        $service->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service = service::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Delete Service successfully.');
    }
}
