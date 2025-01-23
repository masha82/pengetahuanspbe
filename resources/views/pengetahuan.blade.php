@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
@endpush
@section('title')
    <title>Regulasi SPBE</title>
@endsection

@section('content')
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pengetahuan</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="heading-block mx-auto" style="max-width: 800px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">Pengetahuan tentang Pemerintah Kabupaten Situbondo</h2><br><br>
                </div>
                <div>
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengetahuan</th>
                            <th>Status</th>
                            {{-- <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                            <span class="badge rounded-pill bg-success">Success</span>
                            <span class="badge rounded-pill bg-danger">Danger</span> --}}
                        </tr>
                        <tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
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
                ajax: "{{ route('knowledge.index') }}",
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