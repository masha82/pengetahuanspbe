@extends('layouts.admin.app')

@section('title', ' Edit Domain SPBE')

@section('contents')
	<h1 class="h3 mb-3">Edit Data Domain SPBE</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="{{ route('spbe.update', $spbe->id) }}" method="POST">
							@csrf 
							@method('PUT')
							<div class="form-group mb-3">
								<label>Domain SPBE</label>
								<div class="form-group">
									<select name="domain" class="form-select mb-3">
										<option disabled selected>Pilih Domain SPBE</option>
										<option value="Kebijakan Internal" {{ $spbe->domain == 'Kebijakan Internal' ? 'selected' : '' }}>Kebijakan Internal</option>
										<option value="Tata Kelola SPBE" {{ $spbe->domain == 'Tata Kelola SPBE' ? 'selected' : '' }}>Tata Kelola SPBE</option>
										<option value="Manajemen SPBE" {{ $spbe->domain == 'Manajemen SPBE' ? 'selected' : '' }}>Manajemen SPBE</option>
										<option value="Layanan SPBE" {{ $spbe->domain == 'Layanan SPBE' ? 'selected' : '' }}>Layanan SPBE </option>
									</select>
								</div>
							</div>
							<div class="form-group mb-3">
								<label>Aspek</label>
								<div class="form-group">
									<select name="aspek" class="form-select mb-3">
										<option disabled selected>Pilih Aspek</option>
										<option value="Kebijakan Tata Kelola SPBE" {{ $spbe->aspek == 'Kebijakan Tata Kelola SPBE' ? 'selected' : '' }}>Kebijakan Tata Kelola SPBE</option>
										<option value="Kelembagaan/Penyelenggaraan SPBE" {{ $spbe->aspek == 'Kelembagaan/Penyelenggaraan SPBE' ? 'selected' : '' }}>Kelembagaan/Penyelenggaraan SPBE</option>
										<option value="Perencanaan dan Strategi" {{ $spbe->aspek == 'Perancanaan dan Strategi' ? 'selected' : '' }}>Perencanaan dan Strategi</option>
										<option value="TIK" {{ $spbe->aspek == 'TIK' ? 'selected' : '' }}>TIK</option>
										<option value="Penerapan Manajemen" {{ $spbe->aspek == 'Penerapan Manajemen' ? 'selected' : '' }}>Penerapan Manajemen</option>
										<option value="Audit TIK" {{ $spbe->aspek == 'Audit TIK' ? 'selected' : '' }}>Audit TIK</option>
										<option value="Layanan Administrasi Pemerintahan" {{ $spbe->aspek == 'Layanan Administrasi Pemerintah' ? 'selected' : '' }}>Layanan Administrasi Pemerintahan</option>
										<option value="Layanan Publik" {{ $spbe->aspek == 'Layanan Publik' ? 'selected' : '' }}>Layanan Publik</option>
									</select>
								</div>
							</div>
							<div class="form-group mb-3">
								<label>No. Indikator</label>
								<input type="number" name="no_indikator" class="form-control" value="{{ $spbe->no_indikator }}" required>
							</div>
							<div class="form-group mb-3">
								<label>Nama Indikator</label>
								<input type="text" name="nama_indikator" class="form-control" value="{{ $spbe->nama_indikator }}" required>
							</div>
							<div class="form-group mb-3">
								<label>Deskripsi</label>
								<textarea id="summernote" name="deskripsi" class="form-control">{{ $spbe->deskripsi }}</textarea>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection