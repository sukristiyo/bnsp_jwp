<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mbkm;
use Illuminate\Http\Request;

class RegistermbkmController extends Controller
{
    public function index()
    {
        $mbkm = Mbkm::all();
        return view('admin.registrationList', compact("mbkm"));
    }

    public function show($id)
    {
        $mbkm = Mbkm::with("courses")->where("id", $id)->first();
        return view('admin.registrationDetail', compact("mbkm"));
    }

    public function acceptRegistration($id)
    {
        $mbkm = Mbkm::find($id);
        $mbkm->status = "accepted";
        $mbkm->save();
        return redirect()->route("admin.registration-list")->withSuccess("Pendaftaran berhasil di terima!");
    }

    public function rejectRegistration($id)
    {
        $mbkm = Mbkm::find($id);
        $mbkm->status = "rejected";
        $mbkm->save();
        return redirect()->route("admin.registration-list")->withSuccess("Pendaftaran berhasil di terima!");
    }

    public function registrationFile($id)
    {
        $mbkm = Mbkm::with("registration_file")->where("id", $id)->first();

        return view("admin.registrationFile", compact("mbkm"));
    }
}
