@extends('layouts.admin.app')

@section('title', ' Profil')

@section('contents')
	<h1 class="h3 mb-3">Profile</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="" method="">
							<div class="form-group mb-3">
								<label>Nama</label>
								<input type="text" name="name" class="form-control" required value="">
							</div>
							<div class="form-group mb-3">
								<label>Ubah sandi</label>
								<input type="password" name="sandi" class="form-control" id="exampleInputPassword1" required>
							</div>
							<div class="form-group mb-3">
								<label>Konfirmasi sandi</label>
								<input type="password" name="sandi" class="form-control" id="exampleInputPassword1" required>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection