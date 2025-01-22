@extends('layouts.admin.app')

@section('title', ' Add Regulasi')

@section('contents')
	<h1 class="h3 mb-3">Tambah Data Regulasi</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="{{ route('regulasi.create.store') }}" method="POST" enctype="multipart/form-data">
							@csrf 
							<div class="form-group mb-3">
								<label>Jenis Regulasi</label>
								<div class="form-group">
									<select name="jenis_regulasi" class="form-select mb-3">
										<option disabled selected>Pilih Jenis Regulasi</option>
										<option value="Peraturan Presiden">Peraturan Presiden</option>
										<option value="Peraturan Pemerintah">Peraturan Pemerintah</option>
										<option value="Keputusan Menteri">Keputusan Menteri</option>
										<option value="Surat Edaran Menteri">Surat Edaran Menteri </option>
										<option value="Peraturan Daerah">Peraturan Daerah</option>
										<option value="Peraturan Bupati Situbondo">Peraturan Bupati Situbondo</option>
										<option value="Keputusan Bupati Situbondo">Keputusan Bupati Situbondo</option>
									</select>
								</div>
							</div>
							<div class="form-group mb-3">
								<label>Nama Regulasi</label>
								<input type="text" name="nama_regulasi" class="form-control" required>
							</div>
							<div class="form-group mb-3">
								<label>Tahun</label>
								<input type="date" name="tahun" class="form-control" required>
							</div>
							<div class="form-group mb-3">
                            	<label>Dokumen</label>
                            		<div class="input-group mb-3">
                                		<input type="file" name="dokumen" class="form-control"id="inputGroupFile02" required accept=".pdf">
                           			 </div>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection