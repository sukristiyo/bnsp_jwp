@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold my-3">Pengumpulan Berkas</h4>
                  </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col my-1">
                        <h4>Berkas pelaksanaan kegiatan MBKM</h4>
                    </div>
                  </div> 
                    <div class="col-12 mb-3">
                        <label  class="form-label">Sertifikat kegiatan</label>
                        <input class="form-control" type="file" multiple>
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Laporan kegiatan</label>
                        <input class="form-control" type="file" multiple>
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Luaran kegiatan</label>
                        <input class="form-control" type="file" multiple>
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Tanggal Mulai</label>
                        <input class="form-control" type="date" multiple>
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Tanggal Selesai</label>
                        <input class="form-control" type="date" multiple>
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Dokumentasi</label>
                        <input class="form-control" type="file" multiple>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row px-5 my-2">
                            <button type="button" class="btn-orange">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection