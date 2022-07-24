@extends ('layouts.app')

@section('content')

<form action="{{ route('user.save-register') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-6">
            @if (!auth()->user()->hasRegistered())
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold my-3">Daftar</h4>
                  </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col mb-3">
                        <h4>Pendaftaran MBKM</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for=""> Nama</label>
                            <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control mb-1 @error('name') is-invalid @enderror" id="recipient-name" >
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>    
                    </div> 
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for="">NIM</label>
                            <input type="text" name="nim" value="{{ auth()->user()->nim }}" class="form-control mb-1 @error('nim') is-invalid @enderror" id="recipient-name" >
                            @error('nim')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>    
                    </div> 
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for=""> Program Studi </label>
                            <select class="form-select mb-1 @error('nim') is-invalid @enderror" aria-label="Default select example" name="prodi">
                                <option value="" selected>Pilih Program Studi</option>
                                <option>Teknik Informatika</option>
                                <option>Teknik Multimedia dan Jaringan</option>
                                <option>Teknologi Geomatika</option>
                                <option>Animasi</option>
                                <option>Rekayasa Keamanan Siber</option>
                                <option>Teknologi Rekayasa Perangkat Lunak</option>
                            </select>   
                            @error('prodi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>    
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for=""> Angkatan</label>
                            <input type="number" class="form-control mb-1 @error('number') is-invalid @enderror" value="{{ old('angkatan') }}" id="recipient-name" name="angkatan">  
                            @error('angkatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>    
                    </div>   
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for=""> Program yang diikuti</label>
                            <input type="text" class="form-control mb-1  @error('program') is-invalid @enderror" value="{{ old('program') }}" id="recipient-name" name="program">
                            @error('program')
                                <div class="text-danger">{{ $message }}</div>
                             @enderror 
                        </div>    
                    </div>   
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for=""> Jenis MBKM</label>
                            <input type="text" class="form-control mb-1 @error('jenis_mbkm') is-invalid @enderror" id="recipient-name" name="jenis_mbkm" value="{{ old('jenis_mbkm') }}">
                            @error('jenis_mbkm')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>    
                    </div>
                    <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for=""> Tempat Kegiatan</label>
                            <input type="text" class="form-control mb-1  @error('tempat_kegiatan') is-invalid @enderror" id="recipient-name" name="tempat_kegiatan" value="{{ old('tempat_kegiatan') }}">
                            @error('tempat_kegiatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror 
                        </div>    
                    </div>   
                    <div class="col-12 mb-3">
                        <label for="formFileMultiple" class="form-label">Bukti Penerimaan Program MBKM</label>
                        <input class="form-control mb-1 @error('bukti_penerimaan') is-invalid @enderror" type="file" id="formFileMultiple" name="bukti_penerimaan" multiple>
                        @error('bukti_penerimaan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror 
                      </div>

                    <div class="col-12 mb-3">
                        <div class="row">
                          <label>Mata kuliah yang di klaim :</label>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <table class="table  table-borderless">
                                    <thead>
                                      <tr>
                                        <td scope="col">No.</td>
                                        <td scope="col">Nama Mata Kuliah</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @for($i = 1; $i < 9; $i++)
                                        <tr>
                                            <td scope="row">{{ $i }}</td>
                                            <td>
                                                <input name="mata_kuliah[{{ $i }}][name]" type="text" class="form-control">
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                      <div class="col-12 mb-3">
                        <div class="form-group">
                            <label for="">Semester Klaim</label>
                            <input type="text" class="form-control mb-1 @error('semester_claim') is-invalid @enderror" id="recipient-name" name="semester_claim" value="{{ old('semester_claim') }}">
                            @error('semester_claim')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror   
                        </div>    
                    </div>   
                  </div>
                </div>
                <div class="card-footer">
                    <div class="container mb-5">
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

@push('style')
    <style>
       .table .form-control{
            background: transparent !important;
            padding-bottom:2px;
            padding-top: 2px;
       }
    </style>
@endpush