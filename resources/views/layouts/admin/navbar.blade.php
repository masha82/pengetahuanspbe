<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="user"></i> 
                    <span class="align-middle">  {{ auth()->user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="align-middle me-1" data-feather="user"></i> Ubah Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="GET">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-center"><i
                            class="align-middle me-1" data-feather="log-out"></i> Logout</button>
                    </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
