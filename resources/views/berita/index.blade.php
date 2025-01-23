@extends('layouts.admin.app')

@section('title', 'Berita')

@section('contents')

@if(session('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <div class="alert-message">{{session('message')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
@endif
        <h1 class="h3 mb-3">Daftar Berita</h1>
        <div class="row">
			<div class="col-12">
				<!-- Data Table -->
                <div class="card shadow mb-4">
                    <div class="card-header">
						<a href="{{route ('berita.create')}}" class="btn btn-primary "><i class="align-middle" data-feather="plus-square"></i> Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive"> 
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Author</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($berita as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->tanggal}}</td>
                                        <td>{{ $item->author }}</td>
                                        <td>
                                            <a href="{{route ('berita.edit', $item->id)}}" class="btn btn-warning btn-sm mb-1"><i class="align-middle" data-feather="edit"></i> Ubah</a>
                                            <a href="{{route ('berita.show', $item->id)}}" class="btn btn-primary btn-sm mb-1"><i class="align-middle" data-feather="eye"></i> Detail</a>
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