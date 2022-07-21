@extends('layouts.app')

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
                        <h4>Pilih Peran kamu</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Pilih Posisi yang sesuai </label>
                            <select class="form-select my-1" aria-label="Default select example">
                                <option selected>Pilih Posisi</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="dosen">Dosen</option>
                                <option value="kaprodi">Kaprodi</option>
                                <option value="ketuaJurusan">Ketua Jurusan</option>
                                <option value="sekretarisJurusan">Sekretaris Jurusan</option>
                            </select>    
                        </div>    
                    </div>
                    <div class="col-12 my-1">
                        <div class="form-group">
                            <label for=""> Alamat email</label>
                            <input type="text" class="form-control" id="recipient-name" >
                            </select>    
                        </div>    
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
                        <div class="row my-2 text-center" >
                            <span> Sudah Punya Akun ? <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="custom-link">Masuk</button></span>
                           
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
