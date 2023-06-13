    {{-- navbar --}}
    <div class="custom-navbar navbar navbar-expand-xl shadow shadow-sm sticky-top bg-white pt-1">
        <div class="container-fluid">
            <span class="navbar-brand"><img src="{{ asset('image/TITLE LOGO.png') }}" alt=""
                    style=" width: 230px;height: 44px"></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item mb-xl-0 mb-2 me-3"><a href="{{ route('beranda') }}"
                                class="text-default text-decoration-none">Home</a>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3 dropdown">
                            <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Unit Sekolah
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('unittkdanpg') }}">PG dan TK</a></li>
                                <li><a class="dropdown-item" href="{{ route('unitsd') }}">SD</a></li>
                                <li><a class="dropdown-item" href="{{ route('unitsmp') }}">SMP</a></li>
                                <li><a class="dropdown-item" href="{{ route('unitsma') }}">SMA</a></li>
                                <li><a class="dropdown-item" href="{{ route('unitsmk') }}">SMK</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3 dropdown">
                            <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Brosur
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('brosurtkdanpg') }}">PG dan TK</a></li>
                                <li><a class="dropdown-item" href="{{ route('brosursd') }}">SD</a></li>
                                <li><a class="dropdown-item" href="{{ route('brosursmp') }}">SMP</a></li>
                                <li><a class="dropdown-item" href="{{ route('brosursma') }}">SMA</a></li>
                                <li><a class="dropdown-item" href="{{ route('brosursmk') }}">SMK</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3"><a href="{{ route('fasilitas') }}"
                                class="text-default text-decoration-none">Fasilitas</a></li>
                        <li class="nav-item mb-xl-0 mb-2 me-3 dropdown">
                            <a class="text-default text-decoration-none dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Prestasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('lulusannegeri') }}">SNMPTN dan SBMPTN</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('akademik') }}">Akademik dan Non -
                                        Akademik</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3"><a href="{{route('berita')}}"
                                class="text-default text-decoration-none">Berita</a>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3"><a href="{{ route('kupukupu') }}"
                                class="text-default text-decoration-none">KTC</a>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3 dropdown">
                            <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('tentangkami') }}">Sejarah</a></li>
                                <li><a class="dropdown-item" href="{{ route('brigjendkatamso2') }}">Brigjend Katamso
                                        2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mb-xl-0 mb-2 me-3"><a href="{{ route('kontakbk') }}"
                                class="text-default text-decoration-none">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- mainlogo --}}
    <div class="mainlogo position-fixed top-0 start-0 d-none d-lg-block">
        <img src="{{ asset('image/Web logo.png') }}" alt="" style="height: 170px;width: 170px">
    </div>
