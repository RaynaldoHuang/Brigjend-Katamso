@extends('Layout.index')

@section('content')

    {{-- title0 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Unit PG dan TK
    </div>

    {{-- title --}}
    <div class=" text-center mb-4">
        Download File <a href="" class="text-decoration-none">Klik Disini</a>
    </div>

    {{-- image --}}
    <div class="container mb-4" style="background-color: #eaeaea">
        @foreach($brosur as $item)
            <div class="text-center pt-3">
                <img src="{{ asset($item->brosur) }}" alt="" class="img-fluid">
            </div>
        @endforeach
    </div>
@endsection
