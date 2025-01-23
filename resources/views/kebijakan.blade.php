@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
@endpush
@section('title')
    <title>Kebijakan SPBE</title>
@endsection

@section('content')
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kebijakan SPBE</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="heading-block mx-auto" style="max-width: 400px">
                    <h2 class="mb-5 center ls0 gradient-text gradient-horizon">Domain Kebijakan SPBE</h2><br><br>
                </div>
                <div class="row">
                    {{--        foraech--}}
                            <div class="col-md-4">
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h6 class="card-title">Ini header grid</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>ini adalah isinya</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-success float-right"><i class="fas fa-arrow-right"></i>Lihat</button>
                                    </div>
                                </div>
                            </div>
                    {{--        endforeach--}}
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="card-title">Ini header grid</h6>
                            </div>
                            <div class="card-body">
                                <p>ini adalah isinya</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success float-right"><i class="fas fa-arrow-right"></i>Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="card-title">Ini header grid</h6>
                            </div>
                            <div class="card-body">
                                <p>ini adalah isinya</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success float-right"><i class="fas fa-arrow-right"></i>Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="card-title">Ini header grid</h6>
                            </div>
                            <div class="card-body">
                                <p>ini adalah isinya</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success float-right"><i class="fas fa-arrow-right"></i>Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="card-title">Ini header grid</h6>
                            </div>
                            <div class="card-body">
                                <p>ini adalah isinya</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success float-right"><i class="fas fa-arrow-right"></i>Lihat</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h6 class="card-title">Ini header grid</h6>
                            </div>
                            <div class="card-body">
                                <p>ini adalah isinya</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success float-right"><i class="fas fa-arrow-right"></i>Lihat</button>
                            </div>
                        </div>
                    </div>

                        </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('policy.index') }}",
                columns: [{
                    data: 'nomor',
                    name: 'nomor'
                },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush