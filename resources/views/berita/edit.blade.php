@extends('layouts.admin.app')

@section('title', ' Edit Berita')

@section('contents')
	<h1 class="h3 mb-3">Edit Data Berita</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
							@csrf 
							@method('PUT')
							<div class="form-group mb-3">
								<label>Judul</label>
								<input type="text" name="judul" class="form-control" required value="{{$berita->judul}}">
							</div>
							<div class="form-group mb-3">
								<label>Tanggal</label>
								<input type="date" name="tanggal" class="form-control" required value="{{$berita->tanggal}}">
							</div>
							<div class="form-group mb-3">
								<label>Deskripsi</label>
								<textarea id="summernote" name="deskripsi" class="form-control" required>{{$berita->deskripsi}}</textarea>
							</div>
							<div class="form-group mb-3">
								<label>Author</label>
								<input type="text" name="author" class="form-control" value="{{$berita->author}}" required>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection