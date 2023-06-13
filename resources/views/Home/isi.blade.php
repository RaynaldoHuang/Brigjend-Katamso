@extends('Layout.index')

@section('custom.css')
    <style>
        /* start css carousel berita */
        @media (max-width: 767px) {
            #berita .carousel-inner .carousel-item>div {
                display: none;
            }

            #berita .carousel-inner .carousel-item>div:first-child {
                display: block;
            }

            #beritaCarouselSM .carousel-inner .carousel-item-end.active,
            #beritaCarouselSM .carousel-inner .carousel-item-next {
                transform: translateX(100%);
            }

            #beritaCarouselSM .carousel-inner .carousel-item-start.active,
            #beritaCarouselSM .carousel-inner .carousel-item-prev {
                transform: translateX(-100%);
            }
        }

        #berita .carousel-inner .carousel-item.active,
        #berita .carousel-inner .carousel-item-next,
        #berita .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* medium and up screens */
        @media (min-width: 768px) {

            #beritaCarouselLG .carousel-inner .carousel-item-end.active,
            #beritaCarouselLG .carousel-inner .carousel-item-next {
                transform: translateX(25%);
            }

            #beritaCarouselLG .carousel-inner .carousel-item-start.active,
            #beritaCarouselLG .carousel-inner .carousel-item-prev {
                transform: translateX(-25%);
            }

            #beritaCarouselMD .carousel-inner .carousel-item-end.active,
            #beritaCarouselMD .carousel-inner .carousel-item-next {
                transform: translateX(50%);
            }

            #beritaCarouselMD .carousel-inner .carousel-item-start.active,
            #beritaCarouselMD .carousel-inner .carousel-item-prev {
                transform: translateX(-50%);
            }
        }

        #berita .carousel-inner .carousel-item.active,
        #berita .carousel-inner .carousel-item-next,
        #berita .carousel-inner .carousel-item-prev {
            display: flex;
        }

        #berita .carousel-inner .carousel-item-end,
        #berita .carousel-inner .carousel-item-start {
            transform: translateX(0);
        }

        /* end css carousel berita */
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
            @for ($i = 0; $i < count($carouselImages); $i++)
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
    <div class="text1 text-center" style="background-color:#060585;height:60px">
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
                <img src="{{ asset('image/image1.png') }}" alt="" class="img-fluid d-none d-xl-block"
                    style="max-width:35rem">
                <img src="{{ asset('image/image1.png') }}" alt="" class="img-fluid d-none d-lg-block d-xl-none"
                    style="max-width:30rem">
                <img src="{{ asset('image/image1.png') }}" alt="" class="img-fluid d-none d-md-block d-lg-none"
                    style="max-width:23rem">
                <img src="{{ asset('image/image1.png') }}" alt="" class="img-fluid d-md-none"
                    style="max-height:20rem">
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
                <img src="{{ asset('image/image2.png') }}" alt="" class="img-fluid d-none d-xl-block"
                    style="max-width:35rem">
                <img src="{{ asset('image/image2.png') }}" alt="" class="img-fluid d-none d-lg-block d-xl-none"
                    style="max-width:30rem">
                <img src="{{ asset('image/image2.png') }}" alt="" class="img-fluid d-none d-md-block d-lg-none"
                    style="max-width:23rem">
                <img src="{{ asset('image/image2.png') }}" alt="" class="img-fluid d-md-none"
                    style="max-height:20rem">
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
                <a href="{{ route('unittkdanpg') }}">
                    <img src="{{ asset('image/unit tk.png') }}" alt="" class="img-fluid"
                        style="max-height: 300px">
                </a>
            </div>
            <div class="col-md-2 px-auto mb-4">
                <a href="{{ route('unittkdanpg') }}">
                    <img src="{{ asset('image/unit tk.png') }}" alt="" class="img-fluid"
                        style="max-height: 300px">
                </a>
            </div>
            <div class="col-md-2 px-auto mb-4">
                <img src="{{ asset('image/unit sd.png') }}" alt="" class="img-fluid" style="max-height: 300px">
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
                <div class="d-none d-lg-block">
                    <a class="btn" href="#beritaCarouselLG" role="button" data-bs-slide="prev"
                        style="background-color: #efa343">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn" href="#beritaCarouselLG" role="button" data-bs-slide="next"
                        style="background-color: #efa343">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="d-none d-md-block d-lg-none">
                    <a class="btn" href="#beritaCarouselMD" role="button" data-bs-slide="prev"
                        style="background-color: #efa343">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn" href="#beritaCarouselMD" role="button" data-bs-slide="next"
                        style="background-color: #efa343">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="d-block d-md-none">
                    <a class="btn" href="#beritaCarouselSM" role="button" data-bs-slide="prev"
                        style="background-color: #efa343">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn" href="#beritaCarouselSM" role="button" data-bs-slide="next"
                        style="background-color: #efa343">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div id="berita">
            <div class="col-12">
                @include('Home/berita', [
                    'id_carousel' => 'beritaCarouselLG',
                    'condition_carousel' => 'd-none d-lg-block',
                    'class_carousel' => 'carousel-berita',
                ])
                @include('Home/berita', [
                    'id_carousel' => 'beritaCarouselMD',
                    'condition_carousel' => 'd-none d-md-block d-lg-none',
                    'class_carousel' => 'carousel-berita-md',
                ])
                @include('Home/berita', [
                    'id_carousel' => 'beritaCarouselSM',
                    'condition_carousel' => 'd-block d-md-none',
                    'class_carousel' => 'carousel-berita-sm',
                ])
            </div>
        </div>
    </div>
@endsection

@section('custom.js')
    <script>
        var setSliderCarousel = (carousel, selector, perSlide) => {
            const elements = document.querySelectorAll(selector)
            elements.forEach((el) => {
                var minPerSlide = perSlide
                let next = el.nextElementSibling
                for (var i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = elements[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
        }

        setSliderCarousel('beritaCarouselLG', '.carousel-berita .item-carousel-berita', 4);
        setSliderCarousel('beritaCarouselMD', '.carousel-berita-md .item-carousel-berita-md', 2);
        setSliderCarousel('beritaCarouselSM', '.carousel-berita-sm .item-carousel-berita-sm', 1);
    </script>
@endsection
