@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
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
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div> 
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div> 
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Program Studi </label>
                            <select class="form-select my-1" aria-label="Default select example">
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
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div>   
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Program yang diikuti</label>
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div>   
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Jenis MBKM</label>
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div>
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Tempat Kegiatan</label>
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div>   
                    <div class="col-12 my-1">
                        <label for="formFileMultiple" class="form-label">Bukti Penerimaan Program MBKM</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                      </div>
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Kata Sandi</label>
                            <input type="Password" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div>   
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for="">Konfirmasi Kata Sandi</label>
                            <input type="Password" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
                    </div> 
                  </div>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row px-5 my-2">
                            <button type="button" class="btn-orange">Daftar</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection