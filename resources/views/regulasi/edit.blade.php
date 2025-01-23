@extends('layouts.admin.app')

@section('title', ' Edit Regulasi')

@section('contents')
	<h1 class="h3 mb-3">Edit Data Regulasi</h1>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
							<form action="{{ route('regulasi.update', $regulasi->id)}}" method="POST" enctype="multipart/form-data">
							@csrf 
							@method('PUT')
							<div class="form-group mb-3">
								<label>Jenis Regulasi</label>
								<div class="form-group">
									<select name="jenis_regulasi" class="form-select mb-3" required>
										<option disabled selected>Pilih Jenis Regulasi</option>
										<option value="Peraturan Presiden" {{ $regulasi->jenis_regulasi == 'Peraturan Presiden' ? 'selected' : '' }}>Peraturan Presiden</option>
										<option value="Peraturan Pemerintah" {{ $regulasi->jenis_regulasi == 'Peraturan Pemerintah' ? 'selected' : '' }}>Peraturan Pemerintah</option>
										<option value="Keputusan Menteri" {{ $regulasi->jenis_regulasi == 'Keputusan Menteri' ? 'selected' : '' }}>Keputusan Menteri</option>
										<option value="Surat Edaran Menteri" {{ $regulasi->jenis_regulasi == 'Surat Edaran Menteri' ? 'selected' : '' }}>Surat Edaran Menteri</option>
										<option value="Peraturan Daerah" {{ $regulasi->jenis_regulasi == 'Peraturan Daerah' ? 'selected' : '' }}>Peraturan Daerah</option>
										<option value="Peraturan Bupati Situbondo" {{ $regulasi->jenis_regulasi == 'Peraturan Bupati Situbondo' ? 'selected' : '' }}>Peraturan Bupati Situbondo</option>
										<option value="Keputusan Bupati Situbondo" {{ $regulasi->jenis_regulasi == 'Keputusan Bupati Situbondo' ? 'selected' : '' }}>Keputusan Bupati Situbondo</option>
									</select>
								</div>
							</div>
							<div class="form-group mb-3">
								<label>Nama Regulasi</label>
								<input type="text" name="nama_regulasi" class="form-control" value="{{ $regulasi->nama_regulasi }}" required>
							</div>
							<div class="form-group mb-3">
								<label>Tahun</label>
								<input type="date" name="tahun" class="form-control" value="{{ $regulasi->tahun }}" required>
							</div>
							<div class="form-group mb-3">
                            	<label>Dokumen</label>
                            		<div class="input-group mb-3">
                                		<input type="file" name="dokumen" class="form-control" id="inputGroupFile02" accept=".pdf">
                           			</div>
									<div>
										<a href="{{ asset('dokumen/' . $regulasi->dokumen) }}" target="_blank">Lihat Dokumen</a>
									</div>
							</div>
							<button type="submit" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="save"></i> Simpan</button> 
							</form> 
						</div>
					</div>
				</div>
				</div>
@endsection