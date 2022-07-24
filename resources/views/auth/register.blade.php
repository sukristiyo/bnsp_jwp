@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold my-3">Daftar</h4>
                  </div>
                <div class="card-body">
                        {{-- <div class="row">
                            <div class="col mb-3">
                                <h4>Pilih Peran kamu</h4>
                            </div>
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for=""> Pilih Posisi yang sesuai </label>
                                    <select class="form-select mb-3" aria-label="Default select example">
                                        <option selected>Pilih Program Studi</option>
                                        <option value="mahasiswa">Teknik Informatika</option>
                                        <option value="dosen">Teknik Multimedia dan Jaringan</option>
                                        <option value="kaprodi">Teknologi Geomatika</option>
                                        <option value="ketuaJurusan">Rekayasa Keamanan Siber</option>
                                        <option value="sekretarisJurusan">Teknologi Rekayasa Perangkat Lunak</option>
                                    </select>    
                                </div>    
                            </div> --}}
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for=""> Nama</label>
                                    <input type="text" name="name"  class="form-control" id="recipient-name" >
                                    </select>    
                                </div>    
                            </div>   
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for=""> NIM</label>
                                    <input type="text" name="nim"  class="form-control" id="recipient-name" >
                                    </select>    
                                </div>    
                            </div> 
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for=""> Alamat email</label>
                                    <input type="text" name="email"  class="form-control" id="recipient-name" >
                                    </select>    
                                </div>    
                            </div>  
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for=""> Kata Sandi</label>
                                    <input type="Password" name="password"  class="form-control" id="recipient-name" >
                                    </select>    
                                </div>    
                            </div>   
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <label for="">Konfirmasi Kata Sandi</label>
                                    <input type="Password" name="password_confirm"  class="form-control" id="recipient-name" >
                                    </select>    
                                </div>    
                            </div> 
                        </div>
                </div>
                <div class="card-footer">
                    <div class="container mb-5">
                        <div class="row px-5 my-2">
                            <button type="submit" class="btn-orange">Daftar</button>
                        </div>
                        <div class="row my-2 text-center" >
                            <span> Sudah Punya Akun ? <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="custom-link">Masuk</button></span>
                           
                        </div>
                    </div>
                </div>
              </div>
            </form>

        </div>
    </div>
</div>

@endsection
