<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mbkm;
use App\Models\Registration;
use App\Models\RegistrationFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistermbkmController extends Controller
{

    public function index()
    {
        $mbkm = Mbkm::all();
        $showSubmitFileInfo = false;
        if (Mbkm::where("status", "accepted")->has("registration_file", "=", 0)->get()->count() > 0) {
            $showSubmitFileInfo = true;
        }

        return view('users.index', compact('mbkm', 'showSubmitFileInfo'));
    }

    public function register()
    {
        return view('users.regismbkm');
    }

    public function submitFile($id)
    {
        $isSubmited = false;
        if (RegistrationFile::where("mbkm_id", $id)->get()->count() > 0) {
            $isSubmited = true;
        }
        return view('users.submitFile', compact("id", "isSubmited"));
    }

    public function saveSubmitFile(Request $request, $id)
    {
        $rules = [
            "sertifikat_kegiatan" => "required",
            "laporan_kegiatan" => "required",
            "luaran_kegiatan" => "required",
            "tanggal_mulai_kegiatan" => "required",
            "tanggal_selesai_kegiatan" => "required",
            "dokumentasi" => "required",
        ];

        $messages = [
            'sertifikat_kegiatan.required' => "silahkan isi sertifikat kegiatan terlebih dahulu",
            'laporan_kegiatan.required' => "silahkan isi laporan kegiatan terlebih dahulu",
            'luaran_kegiatan.required' => "silahkan isi luaran kegiatan terlebih dahulu",
            'tanggal_mulai_kegiatan.required' => "silahkan isi tanggal mulai kegiatan terlebih dahulu",
            'tanggal_selesai_kegiatan.required' => "silahkan isi tanggal selesai kegiatan terlebih dahulu",
            'dokumentasi.required' => "silahkan isi dokumentasi terlebih dahulu",
        ];

        $validation = Validator::make($request->all(), $rules, $messages);

        if (!$validation->fails()) {
            $sertifikatKegiatan = $request->file("sertifikat_kegiatan")->store("registration_file", "public");
            $laporanKegiatan = $request->file("laporan_kegiatan")->store("registration_file", "public");
            $luaranKegiatan = $request->file("luaran_kegiatan")->store("registration_file", "public");
            $dokumentasi = $request->file("dokumentasi")->store("registration_file", "public");

            $registrationFiles = new RegistrationFile;
            $registrationFiles->mbkm_id =  $id;
            $registrationFiles->sertifikat_kegiatan =  $sertifikatKegiatan;
            $registrationFiles->laporan_kegiatan =   $laporanKegiatan;
            $registrationFiles->luaran_kegiatan =   $luaranKegiatan;
            $registrationFiles->tanggal_mulai_kegiatan = $request->tanggal_mulai_kegiatan;
            $registrationFiles->tanggal_selesai_kegiatan = $request->tanggal_selesai_kegiatan;
            $registrationFiles->dokumentasi =   $dokumentasi;
            $registrationFiles->save();

            return redirect()
                ->back()
                ->withToastSuccess("Berhasil mendaftar mbkm");
        } else {
            return redirect()
                ->back()
                ->withErrors($validation)
                ->withInput()
                ->withToastError("Pengumpulan gagal");
        }
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            "name" => "required",
            "nim" => "required",
            "prodi" => "required",
            "angkatan" => "required",
            "program" => "required",
            "jenis_mbkm" => "required",
            "tempat_kegiatan" => "required",
            "semester_claim" => "required",
        ];

        $messages = [
            'name.required' => "silahkan isi nama terlebih dahulu",
            'nim.required' => "silahkan isi nim terlebih dahulu",
            'prodi.required' => "silahkan isi program studi terlebih dahulu",
            'angkatan.required' => "silahkan isi angkatan terlebih dahulu",
            'program.required' => "silahkan isi program terlebih dahulu",
            'jenis_mbkm.required' => "silahkan isi jenis mbkm terlebih dahulu",
            'bukti_penerimaan.required' => "silahkan isi bukti penerimaan terlebih dahulu",
            'tempat_kegiatan.required' => "silahkan isi tempat kegiatan terlebih dahulu",
            'semester_claim.required' => "silahkan isi semester claim terlebih dahulu",
        ];

        $validation = Validator::make($request->all(), $rules, $messages);

        if (!$validation->fails()) {
            $path = $request->file("bukti_penerimaan")->store("bukti_penerimaan", "public");
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
            $mbkm->bukti_penerimaan = $path;
            $mbkm->semester_claim = $request->semester_claim;
            $mbkm->save();

            foreach ($request->mata_kuliah as $item) {
                $mataKuliah = new Course;
                $mataKuliah->mbkm_id = $mbkm->id;
                $mataKuliah->name = $item["name"];
                $mataKuliah->save();
            }

            return redirect()->route("home")->withSuccess('Pendaftaran berhasil!');
        } else {
            return redirect()
                ->back()
                ->withErrors($validation)
                ->withInput()
                ->withToastError("Pendaftaran Gagal");
        }
    }
}
