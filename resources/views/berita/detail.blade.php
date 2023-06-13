@extends('Layout.index')

@section('content')
    <div class="w-100 bg-danger"
        style="height: 20rem; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset($berita->image) }}');">

    </div>

    <div class="container">
        <div class="font-cairo text-default fw-bold fs-1 my-5">
            {{ $berita->title }}
        </div>
        <div class="fs-5 font-cairo">
            {!! $berita->content !!}
        </div>
    </div>
@endsection
