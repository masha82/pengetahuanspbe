@extends('layouts.admin.app')

@section('title', 'Berita')

@section('contents')
<div class="row">
<div class="col-12">
		<div class="card shadow mb-4">
			<div class="card-header">
                <h5 class="card-title mb-0">Detail</h5>
			</div>
            <div class="card-body h-100">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <strong>{{$berita->judul}}</strong> <br />
                        <strong class="text-muted">author: {{$berita->author}}</strong>
                        <small class="float-end text-navy py">{{$berita->tanggal}}</small><br /> <hr />
                        <div class="text-lg py-1"> 
                            {!!$berita->deskripsi!!}
						</div>
                    </div>
				</div>
	        </div>
		</div>
    </div>
</div>

@endsection