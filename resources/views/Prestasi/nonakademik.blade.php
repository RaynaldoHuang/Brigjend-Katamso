@extends('Layout.index')

@section('content')
<div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
    Prestasi Non - Akademik
</div>
<div class="container w-100 mt-4 mb-4">
    <div class="row text-center d-flex justify-content-evenly">
        <div class="col-md-3 px-auto mb-4">
            <img src="{{ asset('image/prestasi 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            <div class="fw-bold text-default fs-5">
                Universitas Sumatera Utara
            </div>
            <div class="fw-medium text-default">
                Jurusan Matematika Murni
            </div>
        </div>
        <div class="col-md-3 px-auto mb-4">
            <img src="{{ asset('image/prestasi 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            <div class="fw-bold text-default fs-5">
                Universitas Mulawarman
            </div>
            <div class="fw-medium text-default">
                Jurusan Matematika Murni
            </div>
        </div>
        <div class="col-md-3 px-auto mb-4">
            <img src="{{ asset('image/prestasi 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            <div class="fw-bold text-default fs-5">
                Univ. Islam Negeri Sumatera Utara
            </div>
            <div class="fw-medium text-default">
                Jurusan Matematika Murni
            </div>
        </div>
        <div class="col-md-3 px-auto mb-4">
            <img src="{{ asset('image/prestasi 1.png') }}" alt="" class="img-fluid" style="max-height: 300px">
            <div class="fw-bold text-default fs-4">
                Juara 1
            </div>
            <div class="fw-medium text-default">
                Jurusan Matematika Murni
            </div>
        </div>
    </div>
</div>
@endsection