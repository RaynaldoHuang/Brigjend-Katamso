@extends('Layout.index')

@section('content')

    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        SNMPTN & SBMPTN
    </div>
    <div class="container w-100 mt-4 mb-4">
        <div class="row text-center d-flex justify-content-evenly">
            @foreach($data as $item)
                <div class="col-md-3 px-auto mb-4">
                    <img src="{{ asset($item->image) }}" alt="" class="img-fluid" style="max-height:
                300px">
                <div class="fw-bold text-default fs-5">
                    {{ $item->student_name}}
                </div>
                    <div class="fw-bold text-default fs-5">
                        {{ $item->title}}
                    </div>
                    <div class="fw-medium text-default">
                        {{ $item->description}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
