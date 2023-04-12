@extends('Layout.index')

@section('content')
    {{-- gambar1 --}}
    <div class="text-center mt-4 img-fluid">
        @foreach($imageMains as $imageMain)
            <img src="{{ asset($imageMain->image) }}" alt="{{$imageMain->alt}}" class="container">
        @endforeach
    </div>

    {{-- title2 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        PG dan TK Brigjend Katamso
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center fs-5">
                <p>Mendidik anak dengan kasih sayang kepada peserta didik agar mereka memiliki kepercayaan
                    diri, dengan
                    dasar disiplin serta prilaku yang baik, hormat kepada orang tua dan guru serta bertaqwa
                    kepada Tuhan
                    Y.M.E. Membantu anak agar dapat mandiri dan bersosialisasi dengan baik. Memberikan
                    pengetahuan dasar
                    tentang membaca, menulis, berhitung, menggambar, bernyanyi dan belajar sambil bermain.
                </p>
            </div>
            <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
                @foreach($imageTk as $item)
                    <img src="{{ asset($item->image) }}" alt="{{$item->alt}}" class="img-fluid"
                         style="max-width:500px">
                @endforeach
            </div>
        </div>
    </div>
    {{-- title3 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Program PG dan TK
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
                @foreach($imagePg as $item)
                    <img src="{{ asset($item->image) }}" alt="{{$item->alt}}" class="img-fluid"
                         style="max-width:500px">
                @endforeach
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center fs-5">
                <p>Prinsip belajar dalam TK adalah "Bermain sambil Belajar dan Belajar sambil Bermain", maka
                    potensi peserta
                    didik dapat di kembangkan sebelum memasuki masa Sekolah Dasar. Melalui pendekatan bermain,
                    anak-anak
                    dikenalkan dengan berbagai pengetahuan seperti : Bahasa Inggris, Bahasa Mandarin, Seni
                    Musik dan juga
                    pengetahuan dasar. Selain itu anak-anak dapat mengembangkan aspek psikis, fisik, nilai
                    kehidupan,
                    sosial, emosional, kognetif, bahasa, kemandirian, seni dan budaya.
                </p>
            </div>
        </div>
    </div>
    {{-- title4 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Ekstrakurikuler
    </div>

    {{-- gambar2 --}}
    <div class="container w-100 mt-4 mb-5">
        <div class="row d-flex justify-content-center align-items-center gy-5">
            @foreach($extrakulikuler as $item)
                <div class="col-md-4 d-flex justify-content-center align-items-center flex-column">
                    <img src="{{ asset($item->image) }}" alt="{{$item->alt}}"
                         style="max-width: 400px">
                    <div class="font-cairo text-default fw-bold fs-3 text-center mt-1">
                        {{ $item->name }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
