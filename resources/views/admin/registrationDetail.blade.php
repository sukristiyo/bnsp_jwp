@extends ('layouts.app')

@section('content')

<form action="{{ route('save-register') }}" method="post">
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="fw-bold my-3">Detail Data</h4>
                    <div class="btn-group align-self-center">
                        <form action="
                        ">
                            <button class="btn btn-success">
                                Terima
                            </button>
                            <button class="btn btn-danger">
                                Tolak
                            </button>
                        </form>
                    </div>
                  </div>
                <div class="card-body px-5">
                  <div class="row">
                    <div class="col my-1">
                        <h4>Data Pendaftaran MBKM</h4>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Nama</label>
                            <h4 class="text-success">{{ $mbkm->name }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">NIM</label>
                            <h4 class="text-success">{{ $mbkm->nim }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Jurusan</label>
                            <h4 class="text-success">{{ $mbkm->prodi }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Angkatan</label>
                            <h4 class="text-success">{{ $mbkm->angkatan }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Program yang di pilih</label>
                            <h4 class="text-success">{{ $mbkm->program }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Jenis MBKM</label>
                            <h4 class="text-success">{{ $mbkm->jenis_mbkm }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Tempat Kegiatan</label>
                            <h4 class="text-success">{{ $mbkm->tempat_kegiatan }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group d-flex flex-column">
                            <label class="fw-bold">Bukti Penerimaan</label>
                            <button class="btn btn-primary align-self-start btn-sm">
                                Lihat Berkas
                            </button>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Semester Claim</label>
                            <h4 class="text-success">{{ $mbkm->semester_claim }}</h4>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
</form>

@endsection