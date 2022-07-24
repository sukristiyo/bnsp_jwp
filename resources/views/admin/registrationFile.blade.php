@extends ('layouts.app')

@section('content')

@if (!is_null($mbkm->registration_file))
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <a href="{{ route("admin.registration-detail",$mbkm->id) }}" class="btn btn-success">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="fw-bold my-3">Berkas Pelaksanaan MBKM</h4>
                </div>
                <div class="card-body px-5">
                  <div class="row mb-4">
                    <div class="col">
                        <div class="form-group d-flex flex-column">
                            <label class="fw-bold">Sertifikat Kegiatan</label>
                            <a href="{{ asset(Storage::url($mbkm->registration_file->sertifikat_kegiatan)) }}" class="btn btn-primary align-self-start btn-sm">
                                <i class="bi bi-download"></i> Download
                            </a>                        
                        </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col">
                        <div class="form-group d-flex flex-column">
                            <label class="fw-bold">Laporan Kegiatan</label>
                            <a href="{{ asset(Storage::url($mbkm->registration_file->laporan_kegiatan)) }}" class="btn btn-primary align-self-start btn-sm">
                                <i class="bi bi-download"></i> Download
                            </a>                        
                        </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col">
                        <div class="form-group d-flex flex-column">
                            <label class="fw-bold">Luaran Kegiatan</label>
                            <a href="{{ asset(Storage::url($mbkm->registration_file->luaran_kegiatan)) }}" class="btn btn-primary align-self-start btn-sm">
                                <i class="bi bi-download"></i> Download
                            </a>                        
                        </div>
                    </div>
                  </div>  
                  <div class="row mb-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Tanggal Mulai</label>
                            <h4 class="text-success">{{ date("d/m/Y",strtotime($mbkm->registration_file->tanggal_mulai_kegiatan)) }}</h4>
                        </div>
                    </div>
                  </div>    
                  <div class="row mb-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Tanggal Selesai</label>
                            <h4 class="text-success">{{ date("d/m/Y",strtotime($mbkm->registration_file->tanggal_selesai_kegiatan)) }}</h4>
                        </div>
                    </div>
                  </div>  
                   <div class="row mb-4">
                    <div class="col">
                        <div class="form-group d-flex flex-column">
                            <label class="fw-bold">Dokumentasi</label>
                            <a href="{{ asset(Storage::url($mbkm->registration_file->dokumentasi)) }}" class="btn btn-primary align-self-start btn-sm">
                                <i class="bi bi-download"></i> Download
                            </a>                        
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

@else
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <a href="{{ route("admin.registration-detail",$mbkm->id) }}" class="btn btn-success">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
         <div class="col-6">
             <div class="alert alert-info" role="alert">
                 <h4 class="alert-heading">Data kosong!</h4>
                 <p>Berkas pelaksanaan belum di kumpulkan!.</p>
               </div>
         </div>
    </div>
 </div>
@endif



@endsection

