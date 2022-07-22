<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mbkm;
use Illuminate\Http\Request;

class RegistermbkmController extends Controller
{
    public function index(){
        $mbkm = Mbkm::all();
        return view('admin.registrationList',compact("mbkm"));
    }

    public function show($id){
        $mbkm = Mbkm::find($id);
        return view('admin.registrationDetail',compact("mbkm"));
        
    }
}
