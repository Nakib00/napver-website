<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class settingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Setting = Setting::all();
        return view('admin.setting.setting', ['setting' => $Setting]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the incoming request data
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|string',
            'hero_title' => 'required|string',
            'hero_subtitle' => 'required|string'
        ]);

        // Save data to database
        $setting = new setting();
        $setting->address = $validatedData['address'];
        $setting->phone = $validatedData['phone'];
        $setting->email = $validatedData['email'];
        $setting->hero_title = $validatedData['hero_title'];
        $setting->hero_subtitle = $validatedData['hero_subtitle'];
        $setting->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Adress added successfully.');
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
        $settingdata = setting::findOrFail($id);
        return view('admin.setting.edit', ['settingdata' => $settingdata]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Validate the incoming request data
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|string',
            'hero_title' => 'required|string',
            'hero_subtitle' => 'required|string'
        ]);

        $settingdata = setting::findOrFail($id);

        $settingdata->address = $validatedData['address'];
        $settingdata->phone = $validatedData['phone'];
        $settingdata->email = $validatedData['email'];
        $settingdata->hero_title = $validatedData['hero_title'];
        $settingdata->hero_subtitle = $validatedData['hero_subtitle'];
        $settingdata->save();

        // Redirect back with a success message or any other response
        return redirect()->back()->with('success', 'Adress update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
