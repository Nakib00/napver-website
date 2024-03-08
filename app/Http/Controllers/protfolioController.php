<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\pcategory;

class protfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $category = pcategory::all();
        return view('admin.protfolio.protfolio', ['category' => $category]);
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
        //
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
