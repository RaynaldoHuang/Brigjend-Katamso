{{-- footer --}}
<div class="row custom-footer text-center text4 w-100 pt-5 pe-5 ps-5 pb-3 m-0 mt-5">

    {{-- column1 --}}
    <div class="col-md-3 d-flex justify-content-center align-items-start">
        <img src="{{ asset('image/White Logo.png') }}" alt="" class="img-fluid" style="max-width:200px">
    </div>

    {{-- column2 --}}
    <div class="col-md-2 d-flex justify-content-center align-items-start d-none d-sm-block">
        <nav class="wrapper">
            <ul class=" m-0 text-start">
                <li class="list-group-item border-bottom"><a href="{{route('beranda')}}"
                        class="text-white text-decoration-none">Home</a>
                </li>
                <li class="list-group-item border-bottom"><a href="#" class="text-white text-decoration-none">Unit
                        Sekolah</a></li>
                <li class="list-group-item border-bottom"><a href="#"
                        class="text-white text-decoration-none">Brosur</a>
                </li>
                <li class="list-group-item border-bottom"><a href="{{route('fasilitas')}}"
                        class="text-white text-decoration-none">Fasilitas</a></li>
                <li class="list-group-item border-bottom"><a href=""
                        class="text-white text-decoration-none">Prestasi</a></li>
                <li class="list-group-item border-bottom"><a href=""
                        class="text-white text-decoration-none">Berita</a>
                </li>
                <li class="list-group-item border-bottom"><a href="{{route('kupukupu')}}"
                        class="text-white text-decoration-none">KTC</a>
                </li>
                <li class="list-group-item border-bottom"><a href="#"
                        class="text-white text-decoration-none">Tentang
                        Kami</a></li>
                <li class="list-group-item"><a href="{{route('kontakbk')}}" class="text-white text-decoration-none">Kontak</a>
                </li>
            </ul>
        </nav>
    </div>

    {{-- column3 --}}
    <div class="col-md-3 d-flex justify-content-center align-items-start">
        <nav class="wrapper">
            <ul class=" m-0 text-start">
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Taman Kanak-Kanak (TK)</div>
                    <div class="fw-normal">{{$contacts->telp_tk ? $contacts->telp_tk->description : '-' }}</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Sekolah Dasar (SD)</div>
                    <div class="fw-normal">{{$contacts->telp_sd ? $contacts->telp_sd->description : '-' }}</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Sekolah Menengah Pertama (SMP)</div>
                    <div class="fw-normal">{{$contacts->telp_smp ? $contacts->telp_smp->description : '-' }}</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Sekolah Menengah Atas (SMA)</div>
                    <div class="fw-normal">{{$contacts->telp_sma ? $contacts->telp_sma->description : '-' }}</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Sekolah Menengah Kejuruan (SMK)</div>
                    <div class="fw-normal">{{$contacts->telp_smk ? $contacts->telp_smk->description : '-' }}</div>
                </li>
            </ul>
        </nav>
    </div>

    {{-- column4 --}}
    <div class="col-md-4 d-flex justify-content-center align-items-start">
        <nav class="wrapper">
            <ul class=" m-0 text-start">
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Yayasan Perguruan Nasional Brigjend Katamso</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Telepon :</div>
                    <div class="fw-bold">Perguruan Nasional Brigjend Katamso 1</div>
                    <div class="fw-normal">{{$contacts->telp_bk_1 ? $contacts->telp_bk_1->description : '-' }}</div>
                    <div class="fw-bold">Perguruan Nasional Brigjend Katamso 2</div>
                    <div class="fw-normal">{{$contacts->telp_bk_2 ? $contacts->telp_bk_2->description : '-' }}</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Email :</div>
                    <div class="fw-normal">{{$contacts->email_bk ? $contacts->email_bk->description : '-' }}</div>
                </li>
                <li class="list-group-item text-white mb-3">
                    <div class="fw-bold">Alamat :</div>
                    <div class="fw-bold">Perguruan Nasional Brigjend Katamso 1</div>
                    <div class="fw-normal mb-2">Jl. Sunggal No.370,Medan 20128</div>
                    <div class="fw-bold">Perguruan Nasional Brigjend Katamso 2</div>
                    <div class="fw-normal">Jl. Marelan Raya No.19, Psr. III, Medan 20255</div>
                    <div class="mt-5">
                        <a href="{{ $contacts->instagram ? $contacts->instagram->description : '#' }}"><i class="fa-brands fa-instagram text-white fa-3x me-2"></i></a>
                        <a href="{{ $contacts->facebook ? $contacts->facebook->description : '#' }}"><i class="fa-brands fa-square-facebook text-white fa-3x me-2"></i></a>
                        <a href="{{ $contacts->youtube ? $contacts->youtube->description : '#' }}"><i class="fa-brands fa-youtube text-white fa-3x"></i></a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="text-white pt-3">
        Copyright©2022 Yayasan Perguruan Nasional Brigjend Katamso. All Rights Reserved.
    </div>
</div>
