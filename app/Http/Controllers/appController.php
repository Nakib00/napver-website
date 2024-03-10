<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\message;

class appController extends Controller
{
    //
    public function Index()
    {

        return view('website.index');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save data to the database
        $message = new message();
        $message->name = $validatedData['name'];
        $message->email = $validatedData['email'];
        $message->phone = $validatedData['phone'];
        $message->message = $validatedData['message'];
        $message->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
    }
}
