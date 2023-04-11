    {{-- navbar --}}
    <div class="custom-navbar d-flex justify-content-between align-items-center shadow shadow-sm sticky-top bg-white">
        <div class="logo1">
            <img src="{{ asset('image/TITLE LOGO.png') }}" alt="" style=" width: 230px;height: 44px">
        </div>
        <nav class="wrapper">
            <ul class="d-inline-flex m-0">
                <li class="list-group-item me-4"><a href="{{ route('beranda') }}"
                        class="text-default text-decoration-none">Home</a>
                </li>
                <li class="list-group-item me-4">
                    <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Unit Sekolah
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('unittkdanpg') }}">PG dan TK</a></li>
                        <li><a class="dropdown-item" href="">SD</a></li>
                        <li><a class="dropdown-item" href="#">SMP</a></li>
                        <li><a class="dropdown-item" href="#">SMA</a></li>
                        <li><a class="dropdown-item" href="#">SMK</a></li>
                    </ul>
                </li>
                <li class="list-group-item me-4">
                    <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Brosur
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('brosurtkdanpg') }}">PG dan TK</a></li>
                        <li><a class="dropdown-item" href="">SD</a></li>
                        <li><a class="dropdown-item" href="">SMP</a></li>
                        <li><a class="dropdown-item" href="">SMA</a></li>
                        <li><a class="dropdown-item" href="">SMK</a></li>
                    </ul>
                </li>
                <li class="list-group-item me-4"><a href=""
                        class="text-default text-decoration-none">Fasilitas</a></li>
                <li class="list-group-item me-4">
                    <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Prestasi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('lulusannegeri') }}">SNMPTN dan SBMPTN</a></li>
                        <li><a class="dropdown-item" href="{{ route('akademik') }}">Akademik</a></li>
                        <li><a class="dropdown-item" href="{{ route('nonakademik') }}">Non - Akademik</a></li>
                    </ul>
                </li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Berita</a>
                </li>
                <li class="list-group-item me-4"><a href="{{ route('kupukupu') }}" class="text-default text-decoration-none">KTC</a>
                </li>
                <li class="list-group-item me-4">
                    <a class="text-default text-decoration-none dropdown-toggle" href="" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('tentangkami') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('filosofilogo') }}">Logo</a></li>
                        <li><a class="dropdown-item" href="{{ route('brigjendkatamso2') }}">Brigjend Katamso 2</a></li>
                    </ul>
                </li>
                <li class="list-group-item me-4"><a href="{{ route('kontakbk') }}" class="text-default text-decoration-none">Kontak</a>
                </li>
        </nav>
    </div>

    {{-- mainlogo --}}
    <div class="mainlogo position-fixed top-0 start-0">
        <img src="{{ asset('image/Web logo.png') }}" alt="" style="height: 170px;width: 170px">
    </div>
