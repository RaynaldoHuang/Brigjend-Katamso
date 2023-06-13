@extends('Layout.index')

@section('content')
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Berita & Kegiatan
    </div>

    <div class="container">
        <div class="row mt-3">
            @foreach ($berita as $item)
                <div class="col-md-4">
                    <div class="card m-2 text-start">
                        <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title text-default">
                                {{ \Illuminate\Support\Str::limit($item->title, 50, $end = '...') }}
                            </h5>
                            <p class="card-text fs-6">
                                {{ \Illuminate\Support\Str::limit($item->content, 100, $end = '...') }}</p>
                            <a href="{{ route('berita.detail', $item->slug) }}" class="btn button-color text-white fs-6">Selengkapnya..
                                .</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
