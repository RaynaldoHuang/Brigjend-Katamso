@extends('Layout.index')

@section('custom.css')
    <style>
        #carouselberita .carousel-inner .carousel-item > div {
            position: relative;
        }

        #carouselberita .card {
            border: 0;
        }

        @media (max-width: 767px) {
            #carouselberita .carousel-inner .carousel-item > div {
                display: none;
            }

            #carouselberita .carousel-inner .carousel-item > div:first-child {
                display: block;
            }
        }

        #carouselberita .carousel-inner .carousel-item.active,
        #carouselberita .carousel-inner .carousel-item-next,
        #carouselberita .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            #carouselberita .carousel-inner .carousel-item-end.active,
            #carouselberita .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            #carouselberita .carousel-inner .carousel-item-start.active,
            #carouselberita .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }

            #carouselKotaMD .carousel-inner .carousel-item-end.active,
            #carouselKotaMD .carousel-inner .carousel-item-next {
                transform: translateX(50%);
            }

            #carouselKotaMD .carousel-inner .carousel-item-start.active,
            #carouselKotaMD .carousel-inner .carousel-item-prev {
                transform: translateX(-50%);
            }
        }

        #carouselberita .carousel-inner .carousel-item-end,
        #carouselberita .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }

        .button-color {
            background-color: #060585
        }

        .button-color:hover {
            background-color: #0000dd
        }
    </style>
@endsection

@section('content')
    {{-- carousel --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            @for($i = 0; $i < count($carouselImages); $i++)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to={{ $i }}
                    class="{{ $i == 0 ? 'active' : '' }}" aria-current="true"
                        aria-label={{ $carouselImages[$i]->name }}></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @foreach ($carouselImages as $item)
                <div class="carousel-item active">
                    <img src="{{ asset($item->image) }}" class="d-block w-100" alt={{ $item->name }}>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev" style="width: 5%">
            <i class="fa-solid fa-circle-chevron-left fa-2x"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next" style="width: 5%">
            <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- welcome-text --}}
    <div class="text1 d-flex justify-content-center align-items-center"
         style="background-color:#060585;height:60px">
        <h4 class="text-white m-0">Selamat Datang di Yayasan Nasional Brigjend Katamso</h4>
    </div>

    {{-- why-text --}}
    <div class="text2 mt-5 mb-4">
        <h1 class="d-flex justify-content-center fs-1 fw-bold font-cairo text-default">Kenapa Brigjend Katamso
            ?</h1>
        <h5 class="d-flex justify-content-center fs-6 fw-normal text-default">Kenapa kamu harus sekolah
            Brigjend Katamso?</h5>
    </div>

    {{-- lable --}}
    <div class="container">
        <div class="row rounded p-4" style="background-color:#060585">

            {{-- column1 --}}
            <div class="col-md-6 col-lg-3 p-3">
                <div class="h-100 border border-white p-3 rounded">
                    <ul class="d-inline-flex m-0 p-0">
                        <li class="list-group-item fs-5">
                            <span class="text-decoration-none fw-bold custom-icon-color">
                                <i class="fa-solid fa-medal pe-2 custom-icon-color"></i>Prestasi</span>
                        </li>
                    </ul>
                    <div class="text-white mt-3">
                        Berhasil mencetak siswa - siswi yang cerdas dan berprestasi di bidang akademik maupun
                        non
                        akademik.
                    </div>
                </div>
            </div>

            {{-- column2 --}}
            <div class="col-md-6 col-lg-3 p-3">
                <div class="h-100 p-3 rounded" style="background-color: #061fa7">
                    <ul class="d-inline-flex m-0 p-0">
                        <li class="list-group-item fs-5">
                            <span class="text-decoration-none fw-bold custom-icon-color">
                                <i class="fa-solid fa-people-group pe-2 custom-icon-color"></i>Pengajar</span>
                        </li>
                    </ul>
                    <div class="text-white mt-3">
                        Dibimbing oleh guru yang berpengalaman dan berprestasi di bidangnya serta dapat
                        memberikan
                        pendidikan yang bermutu.
                    </div>
                </div>
            </div>

            {{-- column3 --}}
            <div class="col-md-6 col-lg-3 p-3">
                <div class="h-100 border border-white p-3 rounded">
                    <ul class="d-inline-flex m-0 p-0">
                        <li class="list-group-item fs-5">
                            <span class="text-decoration-none fw-bold custom-icon-color">
                                <i class="fa-solid fa-lightbulb pe-2 custom-icon-color"></i>Ekstrakurikuler</span>
                        </li>
                    </ul>
                    <div class="text-white mt-3">
                        Banyak ekstrakurikuler yang disediakan untuk melatih minat siswa dalam bidang yang
                        disukainya.
                    </div>
                </div>
            </div>

            {{-- column4 --}}
            <div class="col-md-6 col-lg-3 p-3">
                <div class="h-100 p-3 rounded" style="background-color: #061fa7">
                    <ul class="d-inline-flex m-0 p-0">
                        <li class="list-group-item fs-5">
                            <span class="text-decoration-none fw-bold custom-icon-color">
                                <i class="fa-solid fa-hand-holding-heart pe-2 custom-icon-color"></i>Penerapan
                                PNK</span>
                        </li>
                    </ul>
                    <div class="text-white mt-3">
                        Adanya pembelajaran pendidikan nilai - nilai kemanusiaan (PNK) dalam lingkungan
                        sekitar.
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Moto --}}
    <div class="text3 d-flex justify-content-center align-items-center mt-5">
        <h4 class="text-white">-- The End Of Education Is Character --</h4>
    </div>

    {{-- visi --}}
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="font-cairo text-default fw-bold fs-2">Visi Kami</div>
                <div class="font-cairo text-default fs-6">Visi kami dalam membangun Brigjend Katamso :</div>
                <div class="row mt-3 d-flex justify-content-center align-items-center">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div
                            class="circle border border-info border-2 text-info d-flex justify-content-center align-items-center">
                            <span>
                                <h2>1</h2>
                            </span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="fw-bold text-default">Membangun Karakter Bangsa</div>
                        <div class="fw-medium text-default">Mencerdaskan dan membangun karakter bangsa</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('image/image1.png') }}" alt="" class="img-fluid" style="max-width:500px">
            </div>
        </div>
    </div>

    {{-- misi --}}
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-md-6 order-md-2">
                <div class="font-cairo text-default fw-bold fs-2">Misi Kami</div>
                <div class="font-cairo text-default fs-6">Misi kami dalam membangun Brigjend Katamso :</div>
                <div class="row mt-3 d-flex justify-content-center align-items-center">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div
                            class="circle border border-info border-2 text-info d-flex justify-content-center align-items-center">
                            <span>
                                <h2>1</h2>
                            </span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="fw-bold text-default">Pendidikan Nilai - Nilai Kemanusiaan</div>
                        <div class="fw-medium text-default">
                            Perguruan Nasional Brigjend Katamso menjadi sekolah
                            unggulan / kelas ciri khas pendidikan nilai - nilai kemanusiaan / budi pekerti.
                        </div>
                    </div>
                </div>
                <div class="row mt-3 d-flex justify-content-center align-items-center">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div
                            class="circle border border-info border-2 text-info d-flex justify-content-center align-items-center">
                            <span>
                                <h2>2</h2>
                            </span>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="fw-bold text-default">Menjadi Manusia Yang Unggul</div>
                        <div class="fw-medium text-default">
                            Mendidik dan menghasilkan anak didik yang cakap
                            intelek, stabil emosi, teguh moral, dan peka intuisi spritual sehingga tercapai
                            keunggulan kemanusiaan (Human Exellence).
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center order-md-1">
                <img src="{{ asset('image/image2.png') }}" alt="" class="img-fluid" style="max-width:500px">
            </div>
        </div>
    </div>

    {{-- unit --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Unit sekolah
    </div>
    <div class="container w-100 mt-4 unit-custom mb-4">
        <div class="row text-center d-flex justify-content-evenly">
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/unit tk.png') }}" alt="" class="img-fluid"
                     style="max-height: 300px">
            </div>
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/unit tk.png') }}" alt="" class="img-fluid"
                     style="max-height: 300px">
            </div>
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/unit sd.png') }}" alt="" class="img-fluid"
                     style="max-height: 300px">
            </div>
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/UNIT 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            </div>
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/UNIT 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            </div>
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/UNIT 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            </div>
        </div>
    </div>


    {{-- berita --}}
    <div class="p-4" id="carouselberita" style="background-color: #eaeaea">
        <div class="row m-2">
            <div class="col-6">
                <div class="text-black fw-bold fs-4 font-cairo">
                    Berita & Kegiatan
                </div>
            </div>
            <div class="col-6 text-end">
                <a class="btn" href="#carouselExampleControls" role="button" data-bs-slide="prev"
                   style="background-color: #efa343">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn" href="#carouselExampleControls" role="button" data-bs-slide="next"
                   style="background-color: #efa343">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide carouselberita" data-bs-ride="carousel">
            <div class="carousel-inner" role='listbox'>
                @foreach($newsActivities as $item )
                    <div class="carousel-item carouseljs active">
                        <div class="card m-2 text-start" style="width: 30rem;">
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{$item->title}}">
                            <div class="card-body">
                                <h5 class="card-title text-default">{{$item->title}}</h5>
                                <p class="card-text fs-6">{{$item->content}}</p>
                                <a href="{{$item->slug}}" class="btn button-color text-white fs-6">Selengkapnya..
                                    .</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('custom.js')
    <script>
        var items = document.querySelectorAll('.carouselberita .carouseljs')
        console.log(items)

        items.forEach((el) => {
            var minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                console.log(el)
                next = next.nextElementSibling
            }
        })
    </script>

    <script>
        var items = document.querySelectorAll('.carousel-kota-md .item-carousel-kota-md')

        items.forEach((el) => {
            var minPerSlide = 2
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
@endsection
