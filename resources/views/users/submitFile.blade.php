@extends ('layouts.app')

@section('content')

<form action="{{ route("user.save-submit-file",$id) }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="container mb-5">
    @if (!$isSubmited)
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
                        <input class="form-control mb-1 @error('sertifikat_kegiatan') is-invalid @enderror" type="file" name="sertifikat_kegiatan" multiple>
                        @error('sertifikat_kegiatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Laporan kegiatan</label>
                        <input class="form-control mb-1 @error('laporan_kegiatan') is-invalid @enderror" type="file" name="laporan_kegiatan" multiple>
                        @error('laporan_kegiatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Luaran kegiatan</label>
                        <input class="form-control mb-1 @error('luaran_kegiatan') is-invalid @enderror" type="file" name="luaran_kegiatan" multiple>
                        @error('luaran_kegiatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Tanggal Mulai</label>
                        <input class="form-control mb-1 @error('tanggal_mulai_kegiatan') is-invalid @enderror" type="date" name="tanggal_mulai_kegiatan" multiple>
                        @error('tanggal_mulai_kegiatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Tanggal Selesai</label>
                        <input class="form-control mb-1 @error('tanggal_selesai_kegiatan') is-invalid @enderror" type="date" name="tanggal_selesai_kegiatan" multiple>
                        @error('tanggal_selesai_kegiatan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label  class="form-label">Dokumentasi</label>
                        <input class="form-control mb-1 @error('dokumentasi') is-invalid @enderror" type="file" name="dokumentasi" multiple>
                        @error('dokumentasi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                    <div class="container mb-5">
                        <div class="row px-5 my-2">
                            <button type="submit" class="btn-orange">Submit</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    @else
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Data sudah di submit</h4>
                    <p>Berkas mbkm anda sudah di kumpulkan!</p>
                    {{-- <hr> --}}
                    {{-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
                  </div>
            </div>
        </div>
    @endif
  
</div>
</form>
@endsection