@extends('layouts.admin.app')

@section('title', ' Add Berita')

@section('contents')
	<h1 class="h3 mb-3">Tambah Data Berita</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="{{ route('berita.create.store') }}" method="POST" enctype="multipart/form-data">
							@csrf 
							<div class="form-group mb-3">
								<label>Judul</label>
								<input type="text" name="judul" class="form-control" required>
							</div>
							<div class="form-group mb-3">
								<label>Tanggal</label>
								<input type="date" name="tanggal" class="form-control" required>
							</div>
							<div class="form-group mb-3">
								<label>Deskripsi</label>
								<textarea id="summernote" name="deskripsi" class="form-control" required></textarea>
							</div>
							<div class="form-group mb-3">
								<label>Author</label>
								<input type="text" name="author" class="form-control" required>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection