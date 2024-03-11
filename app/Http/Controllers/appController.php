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

    public function teams()
    {
        return view('website.team');
    }

    public function protfolio(){
        return view('website.protfolio');
    }
}
