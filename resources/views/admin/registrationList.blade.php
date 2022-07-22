@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold my-3">List Data Pendaftar</h4>
                  </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <table id="listData" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mbkm as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->prodi }}</td>
                                            <td>
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
                                            </td>
                                            <td>
                                                <a href="{{ route("registration-detail",$item->id) }}" class="btn btn-secondary">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-center">
                                            <td colspan="5">Data kosong!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $('#listData').DataTable();
        });
    </script>
@endpush    