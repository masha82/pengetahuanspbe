@extends('layouts.admin.app')

@section('title', ' Profil')

@section('contents')
@if(session('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <div class="alert-message">{{session('message')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
@endif
	<h1 class="h3 mb-3">Profile</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="" method="POST" >
							@csrf
							@method('PUT') 
							<div class="form-group mb-3">
								<label>Nama</label>
								<input type="text" name="name" class="form-control" required value="{{ auth()->user()->name}}">
							</div>
							<div class="form-group mb-3">
								<label>Ubah sandi</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1">
							</div>
							<div class="form-group mb-3">
								<label>Konfirmasi sandi</label>
								<input type="password" nname="password_confirmation" class="form-control" id="exampleInputPassword1">
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection