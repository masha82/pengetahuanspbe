<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	{{-- <meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"> --}}

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('assets-admin/img/icons/icon-48x48.png') }}" />

	{{-- <link rel="canonical" href="https://demo-basic.adminkit.io/" /> --}}

	<title>Dashboard Admin Manajemen Pengetahuan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="{{ asset('assets-admin/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('assets-admin/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		@include('layouts.admin.sidebar')
		<div class="main">
		@include('layouts.admin.navbar')
		<main class="content">
				<div class="container-fluid p-0">
			@yield('contents')
				</div>
		</main>
			@include('layouts.admin.footer')
		</div>
	</div>

	<script src="{{ asset('assets-admin/js/app.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link href="{{ asset('sm/summernote-bs5.css')}}" rel="stylesheet">
    <script src="{{ asset('sm/summernote-bs5.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#summernote').summernote({
				tabsize: 2,
				height: 200,
			});
		});
    </script>
</body>
</html>