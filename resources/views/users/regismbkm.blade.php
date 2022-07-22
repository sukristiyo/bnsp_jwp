@extends ('layouts.app')

@section('content')

<form action="{{ route('save-register') }}" method="post">
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            @if (!auth()->user()->hasRegistered())
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold my-3">Daftar</h4>
                  </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col my-1">
                        <h4>Pendaftaran MBKM</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Nama</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div> 
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="nim" value="{{ auth()->user()->nim }}" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div> 
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Program Studi </label>
                            <select class="form-select my-1" aria-label="Default select example" name="prodi">
                                <option selected>Pilih Program Studi</option>
                                <option value="teknikInformatika">Teknik Informatika</option>
                                <option value="multimediaJaringan">Teknik Multimedia dan Jaringan</option>
                                <option value="geomatika">Teknologi Geomatika</option>
                                <option value="animasi">Animasi</option>
                                <option value="keamananSiber">Rekayasa Keamanan Siber</option>
                                <option value="rekayasaPerangkat">Teknologi Rekayasa Perangkat Lunak</option>
                            </select>    
                        </div>    
                    </div>
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Angkatan</label>
                            <input type="number" class="form-control" id="recipient-name" name="angkatan">  
                        </div>    
                    </div>   
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Program yang diikuti</label>
                            <input type="text" class="form-control" id="recipient-name" name="program">
                        </div>    
                    </div>   
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Jenis MBKM</label>
                            <input type="text" class="form-control" id="recipient-name" name="jenis_mbkm">
                            </select>    
                        </div>    
                    </div>
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Tempat Kegiatan</label>
                            <input type="text" class="form-control" id="recipient-name" name="tempat_kegiatan">
                            </select>    
                        </div>    
                    </div>   
                    <div class="col-12">
                        <label for="formFileMultiple" class="form-label">Bukti Penerimaan Program MBKM</label>
                        <input class="form-control" type="file" id="formFileMultiple" name="bukti_penerimaan" multiple>
                      </div>
                      <div class="col-12 my-1">
                        <div class="form-group">
                            <label for="">Semester Klaim</label>
                            <input type="text" class="form-control" id="recipient-name" name="semester_claim">
                            </select>    
                        </div>    
                    </div>   
                  </div>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row px-5 my-2">
                            <button type="submit" class="btn-orange">Daftar</button>
                        </div>
                    </div>
                </div>
              </div>
              @else
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Anda sudah mendaftar!</h4>
                <p>
                    Terima kasih sudah mendaftar,silahkan tunggu proses verifikasi data anda terlebih dahulu!
                </p>
                {{-- <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
              </div>

            @endif
          
        </div>
    </div>
</div>
</form>

@endsection