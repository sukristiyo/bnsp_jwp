@extends('layouts.app')

@section('content')
<div class="image d-flex justify-content-center align-items-center">
    <div class="container mb-5">
        <div class="row align-content-center justift">
            <div class="col">
                <h4 class="title">Ambil Kendali Masa Depanmu</h4>
                <h4 class="sub-title mb-3">
                    Kampus Merdeka adalah cara terbaik berkuliah. Dapatkan kemerdekaan untuk membentuk masa depan yang sesuai dengan aspirasi kariermu.
                </h4>
                @guest
                <a href="{{ route("register") }}" class="btn-orange">
                    Daftar
                </a>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <style>
        .image{
            background: url('{{ asset("image/wisuda.png") }}');
            height : 100vh;
            width : 100%; 
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: -100px;
        }

        .title{
            font-size: 3rem;
            color: #fff;
            font-weight: 600;
        }

        .sub-title{
            color: #fff;
        }

        a.btn-orange{
            text-decoration: none;
            padding : 6px 15px;
            color: #fff;
        }

    </style>
@endpush
