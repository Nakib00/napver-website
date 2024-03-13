<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{about, setting, service, protfolio};

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
        $address = Setting::select('address', 'phone', 'email', 'hero_title', 'hero_subtitle')->get();
        return view('website.team', compact('address'));
    }

    public function protfolio()
    {
        $protfolio = protfolio::select('title', 'description', 'image', 'clientname', 'url', 'category_id', 'status', 'id','	created_at')->get();
        $address = Setting::select('address', 'phone', 'email', 'hero_title', 'hero_subtitle')->get();
        return view('website.protfolio', compact('address', 'protfolio'));
    }

    public function protshow(string $id)
    {

        $protfolio = protfolio::findOrFail($id);
        $address = Setting::select('address', 'phone', 'email', 'hero_title', 'hero_subtitle')->get();

        return view('website.portfolio-details', compact('address','protfolio'));
    }
}
