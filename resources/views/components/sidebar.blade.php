<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" {{ asset('/mahasiswa') }}">
            <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-3 font-weight-bold">Admin Untam</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('/dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('/mahasiswa') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-hat-3 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ asset('/dosen') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dosen</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('/jurusan') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-paper-diploma text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Jurusan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('/kelas') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('/matakuliah') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mata Kuliah</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ asset('/user') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 sidenav-absolute">
        <a class="btn btn-primary btn-sm mb-0 w-100" href="/" type="button">Home Page</a>
    </div>
</aside>
