<?php

namespace App\Http\Controllers;

use App\Models\Mbkm;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistermbkmController extends Controller
{
    
    public function index(){
        return view('users.regismbkm');
    }

    public function submitFile(){
        return view('users.submitFile');
    }

    public function store(Request $request){

        $mbkm = new Mbkm;
        $mbkm->user_id = auth()->user()->id;
        $mbkm->name = $request->name;
        $mbkm->nim = $request->nim;
        $mbkm->prodi = $request->prodi;
        $mbkm->angkatan = $request->angkatan;
        $mbkm->program = $request->program;
        $mbkm->jenis_mbkm = $request->jenis_mbkm;
        $mbkm->tempat_kegiatan = $request->tempat_kegiatan;
        $mbkm->status = "pending";
        $mbkm->bukti_penerimaan = $request->bukti_penerimaan ?? "";
        $mbkm->semester_claim = $request->semester_claim;
        $mbkm->save();
        
        return redirect()->route("home")->withSuccess('Pendaftaran berhasil!');
    }
}
