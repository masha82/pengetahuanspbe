@extends('layouts.admin.app')

@section('title', 'Detail Domain SPBE')

@section('contents')
<div class="row">
<div class="col-12">
		<div class="card shadow mb-4">
			<div class="card-header">
                <h5 class="card-title mb-0">{{$spbe->domain}}</h5>
			</div>
            <div class="card-body h-100">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <strong>Aspek: {{$spbe->aspek}}</strong> <br />
                        <hr />
                        <strong>{{$spbe->no_indikator}}.</strong> <strong>{{$spbe->nama_indikator}}</strong> <br /><hr />
                        <div class="text-lg py-1"> 
                            {!!$spbe->deskripsi!!}
						</div>
                    </div>
				</div>
	        </div>
		</div>
    </div>
</div>

@endsection