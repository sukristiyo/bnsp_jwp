@extends ('layouts.app')

@section('content')

<div class="container mb-5">
    <div class="row justify-content-center mb-2">
        <div class="col-6">
        <h4 class="fw-bold">Program yang anda ikuti</h4>
        </div>
    </div>  
    
    @if ($showSubmitFileInfo)
    <div class="row justify-content-center mb-2">
        <div class="col-6">
            <div class="alert alert-info" role="alert">
                Pendaftaran anda sudah di setujui silahkan melakukan pengumpulan berkas !
              </div>
        </div>
    </div>
    @endif


    <div class="row justify-content-center">
        <div class="col-6">
            @forelse ($mbkm as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            {{ $item->program ." - ". $item->jenis_mbkm }}
                        </div>
                        <div class="col-3">
                            @switch($item->status)
                                @case("accepted")
                                    <span class="badge bg-success">Disetujui</span>
                                    @break
                                @case("pending")
                                    <span class="badge bg-secondary">Pending</span>

                                    @break
                                @case("rejected")
                                    <span class="badge bg-danger">Ditolak</span>
                                @break
                                @default
                            @endswitch
                        </div>
                        <div class="col-3">
                            @if ($item->status == "accepted")
                                @if (is_null($item->registration_file))
                                    <a href="{{ route("user.submit-file",$item->id) }}" class="btn btn-primary btn-sm">
                                        Kumpulkan <i class="bi bi-file-text"></i> 
                                    </a>
                                @else
                                    <h2 class="text-success"><i class="bi bi-file-earmark-check"></i></h3>
                                @endif
                               
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Anda belum mendaftar!</h4>
                <p>Anda belum mendaftar program apapun!.</p>
                
              </div>
            @endforelse    
        </div>
    </div>
</div>

@endsection