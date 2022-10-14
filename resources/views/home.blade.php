<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>ypnbrigjendkatamso</title>

    <style>
        .custom-topbar {
            background-color: #060585;
            height: 40px;
            padding-left: 10rem
        }

        .text-default {
            color: #060585
        }

        .custom-navbar {
            height: 80px;
            padding-left: 10rem;
            z-index: 2;
        }

        .mainlogo {
            z-index: 3;
        }

        .custom-icon-color {
            color: #efa343
        }

        .text3 {
            background-color: #efa343;
            height: 80px;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url('{{ asset('image/batik2.png') }}');
        }

        .font-cairo {
            font-family: 'Cairo', sans-serif;
        }

        .custom-footer {
            background-color: grey;
            height: 250px;
        }
    </style>
</head>

<body>

    {{-- topbar --}}
    <div class="custom-topbar d-flex justify-content-between align-items-center">
        <ul class="d-inline-flex m-0 p-0">
            <li class="list-group-item">
                <a href="" class="text-white text-decoration-none"><i class="fas fa-phone me-1">
                    </i>Brigjend Katamso 1 (061 - 845 1582)</a>
            </li>
            <li class="list-group-item ms-3">
                <a href="" class="text-white text-decoration-none"><i class="fas fa-phone me-1">
                    </i>Brigjend Katamso 1 (061 - 845 1582)</a>
            </li>
            <li class="list-group-item ms-3">
                <a href="" class="text-white text-decoration-none"><i class="fas fa-envelope me-1">
                    </i>contact@ypnbrigjendkatamso.sch.id</a>
            </li>
        </ul>
        <ul class="d-inline-flex m-0 me-4">
            <li class="list-group-item">
                <a href="" class="text-white text-decoration-none"><i
                        class="fab fa-instagram fa-lg me-1"></i></a>
            </li>
            <li class="list-group-item ms-2">
                <a href="" class="text-white text-decoration-none"><i class="fab fa-facebook-f me-1"></i></a>
            </li>
        </ul>
    </div>

    {{-- navbar --}}
    <div class="custom-navbar d-flex justify-content-between align-items-center shadow shadow-sm sticky-top bg-white">
        <div class="logo1">
            <img src="{{ asset('image/TITLE LOGO.png') }}" alt="" style=" width: 230px;height: 44px">
        </div>
        <nav class="wrapper">
            <ul class="d-inline-flex m-0">
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Home</a>
                </li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Unit
                        Sekolah</a></li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Brosur</a>
                </li>
                <li class="list-group-item me-4"><a href=""
                        class="text-default text-decoration-none">Fasilitas</a></li>
                <li class="list-group-item me-4"><a href=""
                        class="text-default text-decoration-none">Prestasi</a></li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Berita</a>
                </li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">KTC</a>
                </li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Tentang
                        Kami</a></li>
                <li class="list-group-item me-4"><a href="" class="text-default text-decoration-none">Kontak</a>
                </li>
            </ul>
        </nav>
    </div>

    {{-- mainlogo --}}
    <div class="mainlogo position-fixed top-0 start-0">
        <img src="{{ asset('image/Web logo.png') }}" alt="" style="height: 170px;width: 170px">
    </div>

    {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/Artboard 1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/Artboard 2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/Artboard 3.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev" style="width: 5%">
            <i class="fa-solid fa-circle-chevron-left fa-2x"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next" style="width: 5%"">
            <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- welcome-text --}}
    <div class="text1 d-flex justify-content-center align-items-center" style="background-color:#060585;height:60px">
        <h4 class="text-white m-0">Selamat Datang di Yayasan Nasional Brigjend Katamso</h4>
    </div>

    {{-- why-text --}}
    <div class="text2 mt-5 mb-4">
        <h1 class="d-flex justify-content-center fs-1 fw-bold font-cairo text-default">Kenapa Brigjend Katamso ?</h1>
        <h5 class="d-flex justify-content-center fs-6 fw-normal text-default">Kenapa kamu harus sekolah
            Brigjend Katamso?</h5>
    </div>

    {{-- lable --}}
    <div class="container">
        <div class="row rounded p-4 " style="background-color:#060585">

            {{-- column1 --}}
            <div class="col border border-white p-3 m-2 rounded">
                <ul class="d-inline-flex m-0 p-0">
                    <li class="list-group-item fs-5">
                        <span class="text-decoration-none fw-bold custom-icon-color">
                            <i class="fa-solid fa-medal pe-2 custom-icon-color"></i>Prestasi</span>
                    </li>
                </ul>
                <div class="text-white mt-3">
                    Berhasil mencetak siswa - siswi yang cerdas dan berprestasi di bidang akademik maupun non akademik.
                </div>
            </div>

            {{-- column2 --}}
            <div class="col p-3 m-2 rounded" style="background-color: #061fa7">
                <ul class="d-inline-flex m-0 p-0">
                    <li class="list-group-item fs-5">
                        <span class="text-decoration-none fw-bold custom-icon-color">
                            <i class="fa-solid fa-people-group pe-2 custom-icon-color"></i>Pengajar</span>
                    </li>
                </ul>
                <div class="text-white mt-3">
                    Dibimbing oleh guru yang berpengalaman dan berprestasi di bidangnya serta dapat memberikan
                    pendidikan yang bermutu.
                </div>
            </div>

            {{-- column3 --}}
            <div class="col border border-white p-3 m-2 rounded">
                <ul class="d-inline-flex m-0 p-0">
                    <li class="list-group-item fs-5">
                        <span class="text-decoration-none fw-bold custom-icon-color">
                            <i class="fa-solid fa-lightbulb pe-2 custom-icon-color"></i>Ekstrakurikuler</span>
                    </li>
                </ul>
                <div class="text-white mt-3">
                    Banyak ekstrakurikuler yang disediakan untuk melatih minat siswa dalam bidang yang disukainya.
                </div>
            </div>

            {{-- column4 --}}
            <div class="col p-3 m-2 rounded" style="background-color: #061fa7">
                <ul class="d-inline-flex m-0 p-0">
                    <li class="list-group-item fs-5">
                        <span class="text-decoration-none fw-bold custom-icon-color">
                            <i class="fa-solid fa-hand-holding-heart pe-2 custom-icon-color"></i>Penerapan PNK</span>
                    </li>
                </ul>
                <div class="text-white mt-3">
                    Adanya pembelajaran pendidikan nilai - nilai kemanusiaan (PNK) dalam lingkungan sekitar.
                </div>
            </div>
        </div>
    </div>

    {{-- Moto --}}
    <div class="text3 d-flex justify-content-center align-items-center mt-5">
        <h4 class="text-white">-- The End Of Education Is Character --</h4>
    </div>

    {{-- visi --}}
    <div class="container mt-5">
        <div class="row row-cols-2 d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="font-cairo text-default fw-bold fs-2">Visi Kami</div>
                <div class="font-cairo text-default fs-6">Visi kami dalam membangun Brigjend Katamso :</div>
                <div class="container">
                    <div class="row pt-4">
                        <div class="d-flex col-4 justify-content-center align-items-center">
                            <img src="{{ asset('image/1 icon.png') }}" alt="" style="width:100px">
                        </div>
                        <div class="col-8 mt-3">
                            <div class="fw-bold text-default">Membangun Karakter Bangsa</div>
                            <div class="fw-medium text-default">Mencerdaskan dan membangun karakter bangsa</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container ms-5">
                                <div class="col-10 ms-5">
                                    <div class="col-6 mt-5">
                                        <img src="{{ asset('image/img2.png') }}" alt="" style="width:150px">
                                    </div>
                                    <div class="col-6 mt-2">
                                        <img src="{{ asset('image/img2.png') }}" alt="" style="width:150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('image/img1.png') }}" alt="" style="width:250px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- misi --}}
    <div class="container mt-5">
        <div class="row row-cols-2 d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('image/img1.png') }}" alt="" style="width:250px">
                        </div>
                        <div class="col-md-6">
                            <div class="container me-5">
                                <div class="col-10">
                                    <div class="col-6 mt-5">
                                        <img src="{{ asset('image/img2.png') }}" alt="" style="width:150px">
                                    </div>
                                    <div class="col-6 mt-2">
                                        <img src="{{ asset('image/img2.png') }}" alt="" style="width:150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="font-cairo text-default fw-bold fs-2">Misi Kami</div>
                <div class="font-cairo text-default fs-6">Misi kami dalam membangun Brigjend Katamso :</div>
                <div class="container">
                    <div class="row pt-4">
                        <div class="d-flex col-4 justify-content-center align-items-center">
                            <img src="{{ asset('image/1 icon.png') }}" alt="" style="width:100px">
                        </div>
                        <div class="col-8 mt-3">
                            <div class="fw-bold text-default">Pendidikan Nilai - Nilai Kemanusiaan</div>
                            <div class="fw-medium text-default">Perguruan Nasional Brigjend Katamso menjadi sekolah
                                unggulan / kelas ciri khas pendididikan nilai - nilai kemanusiaan / budi pekerti.
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="d-flex col-4 justify-content-center align-items-center">
                            <img src="{{ asset('image/2 icon.png') }}" alt="" style="width:100px">
                        </div>
                        <div class="col-8 mt-3">
                            <div class="fw-bold text-default">Menjadi Manusia Yang Unggul</div>
                            <div class="fw-medium text-default">Mendidik dan menghasilkan anak didik yang cakap
                                intelek, stabil emosi, teguh moral, dan peka intuisi spritual sehingga tercapai
                                keunggulan kemanusiaan (Human Exellence).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div>
            <div class="row row-cols-4 custom-footer text-center">
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('image/footerlogo.png') }}" alt="" style="width:350px">
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <nav class="wrapper">
                        <ul class=" m-0 text-start">
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">Home</a>
                            </li>
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">Unit
                                    Sekolah</a></li>
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">Brosur</a>
                            </li>
                            <li class="list-group-item me-4"><a href=""
                                    class="text-white text-decoration-none">Fasilitas</a></li>
                            <li class="list-group-item me-4"><a href=""
                                    class="text-white text-decoration-none">Prestasi</a></li>
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">Berita</a>
                            </li>
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">KTC</a>
                            </li>
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">Tentang
                                    Kami</a></li>
                            <li class="list-group-item me-4"><a href="" class="text-white text-decoration-none">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">Column</div>
                <div class="col-md-3">Column</div>
            </div>
        </div>
    </div>

    {{-- script --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
