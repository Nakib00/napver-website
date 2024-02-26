<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    //
    public function Index(){

        return view('website.index');
    }
}
