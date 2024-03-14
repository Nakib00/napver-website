<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{about, setting, service, protfolio,teamcategory,team};

class appController extends Controller
{
    //
    public function Index()
    {
        $about = About::select('title', 'shortDescription', 'image')->get();
        $address = Setting::select('address', 'phone', 'email', 'hero_title', 'hero_subtitle')->get();
        $service = service::select('title', 'description', 'image', 'status')->get();

        return view('website.index', compact('about', 'address', 'service'));
    }


    public function teams()
    {
        $teamcategory = teamcategory::all();
        $teams = team::all();
        $address = Setting::select('address', 'phone', 'email')->get();
        return view('website.team', compact('address','teamcategory','teams'));
    }

    public function protfolio()
    {
        $protfolio = protfolio::all();
        $address = Setting::select('address', 'phone', 'email')->get();
        return view('website.protfolio', compact('address', 'protfolio'));
    }

    public function protshow(string $id)
    {

        $protfolio = protfolio::findOrFail($id);
        $address = Setting::select('address', 'phone', 'email')->get();

        return view('website.portfolio-details', compact('address','protfolio'));
    }
}
