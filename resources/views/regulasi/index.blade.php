@extends('layouts.admin.app')

@section('title', 'Regulasi')

@section('contents')

@if(session('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <div class="alert-message">{{session('message')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
@endif
        <h1 class="h3 mb-3">Daftar Regulasi</h1>
        <div class="row">
			<div class="col-12">
				<!-- Data Table -->
                <div class="card shadow mb-4">
                    <div class="card-header">
						<a href="{{route ('regulasi.create')}}" class="btn btn-primary "><i class="align-middle" data-feather="plus-square"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive"> 
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Regulasi</th>
                                    <th>Nama Regulasi</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regulasi as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->jenis_regulasi }}</td>
                                        <td>{{ $item->nama_regulasi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->tahun)->format('Y') }}</td>
                                        <td>
                                            <a href="{{route ('regulasi.edit', $item->id)}}" class="btn btn-warning btn-sm"><i class="align-middle" data-feather="edit"></i> Ubah</a>
                                            <a href="{{ asset('dokumen/' . $item->dokumen) }}" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="eye"></i> Lihat</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
