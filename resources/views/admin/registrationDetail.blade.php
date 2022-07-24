@extends ('layouts.app')

@section('content')

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <a href="{{ route("admin.registration-list") }}" class="btn btn-success">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="fw-bold my-3">Data Pendaftaran MBKM</h4>
                    <div class="btn-group align-self-center">
                        @if ($mbkm->status == "pending")
                            <form method="POST" action="{{ route("admin.accept-registration",$mbkm->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    Terima
                                </button>
                            </form>
                            <form  method="POST" action="{{ route("admin.reject-registration",$mbkm->id) }}">
                                @csrf
                                <button class="btn btn-danger">
                                    Tolak
                                </button>
                            </form>
                        @endif
                        @if ($mbkm->status == "accepted")
                            <a href="{{ route("admin.registration-file",$mbkm->id) }}" class="btn btn-primary">
                                <i class="bi bi-file-earmark-text"></i> Berkas Pelaksanaan
                            </a>
                        @endif
                    </div>
                  </div>
                <div class="card-body px-5">
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Nama</label>
                            <h4 class="text-success">{{ $mbkm->name }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">NIM</label>
                            <h4 class="text-success">{{ $mbkm->nim }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Jurusan</label>
                            <h4 class="text-success">{{ $mbkm->prodi }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Angkatan</label>
                            <h4 class="text-success">{{ $mbkm->angkatan }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Program yang di pilih</label>
                            <h4 class="text-success">{{ $mbkm->program }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Jenis MBKM</label>
                            <h4 class="text-success">{{ $mbkm->jenis_mbkm }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group">
                            <label class="fw-bold">Tempat Kegiatan</label>
                            <h4 class="text-success">{{ $mbkm->tempat_kegiatan }}</h4>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="form-group d-flex flex-column">
                            <label class="fw-bold">Bukti Penerimaan</label>
                            <a href="{{ asset(Storage::url($mbkm->bukti_penerimaan)) }}" class="btn btn-primary align-self-start btn-sm">
                                <i class="bi bi-download"></i> Download
                            </a>                        
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                        <div class="row">
                          <label class="fw-bold">Mata kuliah yang di klaim :</label>
                        </div>
                        <div class="row mt-2">
                            <ul class="list-group">
                                @foreach ($mbkm->courses as $item)
                                    <li class="list-group-item">{{ $item->name }}</li>
                                @endforeach
                              </ul>
                        </div>
                    </div>
                  </div>
                  <div class="row mt-4">
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
@endsection

{{-- @push('script')
    <script>
        $(function(){
            let buttonAccept = $("button[name='buttonAccept']");
            let buttonAccept = $("button[name='buttonAccept']");

            
        });
    </script>
@endpush --}}