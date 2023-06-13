@extends('Layout.index')

@section('content')
    {{-- gambar1 --}}
    <div class="text-center mt-4 img-fluid">
        <img src="{{ asset($unit->image) }}" alt="{{ $unit->name }}" class="container">
    </div>

    {{-- title2 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        {{ strtoupper($unit->name) }} Brigjend Katamso
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center fs-5">
                <p>{{ $unitDetail->description }}</p>
            </div>
            <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
                <img src="{{ asset($unitDetail->image) }}" alt="{{ $unitDetail->alt }}" class="img-fluid"
                    style="max-width:500px">
            </div>
        </div>
    </div>

    {{-- title3 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Program {{ strtoupper($unit->name) }}
    </div>
    <div class="container mt-4">
        <div class="row">
            @foreach ($unitProgram as $item)
                <div class="col-md-6 mt-3 d-flex justify-content-center align-items-center">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}" class="img-fluid"
                        style="max-width:500px">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center fs-5">
                    <p>{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

    @if (count($unitExtra))
        {{-- title4 --}}
        <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
            Ekstrakurikuler
        </div>

        {{-- gambar2 --}}
        <div class="container w-100 mt-4 mb-5">
            <div class="row d-flex justify-content-center align-items-center gap-5">
                @foreach ($unitExtra as $item)
                    <div class="col-md-4 d-flex justify-content-center align-items-center flex-column">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}" style="max-width: 400px">
                        <div class="font-cairo text-default fw-bold fs-3 text-center mt-1">
                            {{ $item->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
