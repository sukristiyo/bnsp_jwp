<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function viewPdf(Request $request)
    {
        $url = Storage::url($request->url);
        return view("viewPdf", compact("url"));
    }
}
