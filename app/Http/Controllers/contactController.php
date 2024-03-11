<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $message = message::all();
        return view('admin.contact.contact', ['message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        // Save data to database
        $message = new message();
        $message->name = $validatedData['name'];
        $message->email = $validatedData['email'];
        $message->phone = $validatedData['phone'];
        $message->message = $validatedData['comment'];
        $message->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $message = message::findOrFail($id);
        return view('admin.contact.show', ['message' => $message]);
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
