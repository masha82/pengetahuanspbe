<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand">
          <span class="align-justiy">Dashboard Manajemen Pengetahuan</span>
        </a>
			<ul class="sidebar-nav">
				<li class="sidebar-header">
					Menu
				</li>
				<li class="sidebar-item {{ Route::is('dashboard') ? 'active' : '' }}">
					<a class="sidebar-link" href="{{ route('dashboard') }}">
                	<i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span></a>
				</li>

				<li class="sidebar-item {{ Route::is('spbe*') ? 'active' : '' }}">
					<a class="sidebar-link" href="{{ route('spbe') }}">
					<i class="align-middle" data-feather="archive"></i> <span class="align-middle">Domain SPBE</span></a>
				</li>

				<li class="sidebar-item {{ Route::is('regulasi*') ? 'active' : '' }}">
					<a class="sidebar-link" href="{{ route('regulasi') }}">
					<i class="align-middle" data-feather="folder"></i> <span class="align-middle">Regulasi</span></a>
				</li>

				<li class="sidebar-item {{ Route::is('berita*') ? 'active' : '' }}">
					<a class="sidebar-link" href="{{ route('berita') }}">
					<i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Berita</span></a>
				</li>


				<li class="sidebar-item">
					<a class="sidebar-link" href="">
              		<i class="align-middle" data-feather="globe"></i> <span class="align-middle">Pengetahuan Pemkab</span></a>
				</li>
			</ul>
		</div>
		</nav>
