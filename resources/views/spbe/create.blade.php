@extends('layouts.admin.app')

@section('title', ' Add Domain SPBE')

@section('contents')
	<h1 class="h3 mb-3">Tambah Data Domain SPBE</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="{{ route('spbe.create.store') }}" method="POST">
							@csrf 
							<div class="form-group mb-3">
								<label>Domain SPBE</label>
								<div class="form-group">
									<select name="domain" class="form-select mb-3">
										<option disabled selected>Pilih Domain SPBE</option>
										<option value="Kebijakan Internal">Kebijakan Internal</option>
										<option value="Tata Kelola SPBE">Tata Kelola SPBE</option>
										<option value="Manajemen SPBE">Manajemen SPBE</option>
										<option value="Layanan SPBE">Layanan SPBE </option>
									</select>
								</div>
							</div>
							<div class="form-group mb-3">
								<label>Aspek</label>
								<div class="form-group">
									<select name="aspek" class="form-select mb-3">
										<option disabled selected>Pilih Aspek</option>
										<option value="Kebijakan Tata Kelola SPBE">Kebijakan Tata Kelola SPBE</option>
										<option value="Kelembagaan/Penyelenggaraan SPBE">Kelembagaan/Penyelenggaraan SPBE</option>
										<option value="Perencanaan dan Strategi">Perencanaan dan Strategi</option>
										<option value="TIK">TIK</option>
										<option value="Penerapan Manajemen">Penerapan Manajemen</option>
										<option value="Audit TIK">Audit TIK</option>
										<option value="Layanan Administrasi Pemerintahan">Layanan Administrasi Pemerintahan</option>
										<option value="Layanan Publik">Layanan Publik</option>
									</select>
								</div>
							</div>
							<div class="form-group mb-3">
								<label>No. Indikator</label>
								<input type="number" name="no_indikator" class="form-control" required>
							</div>
							<div class="form-group mb-3">
								<label>Nama Indikator</label>
								<input type="text" name="nama_indikator" class="form-control" required>
							</div>
							<div class="form-group mb-3">
								<label>Deskripsi</label>
								<textarea id="summernote" name="deskripsi" class="form-control" required></textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection