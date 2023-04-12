@extends('Layout.index')

@section('content')

    {{-- SNMPTN --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        SNMPTN
    </div>
    <div class="container w-100 mt-4 mb-4">
        <div class="row text-center d-flex justify-content-evenly">
            @foreach($snmptn as $prestasiSnmptn)
                <div class="col-md-3 px-auto mb-4">
                    <img src="{{ asset($prestasiSnmptn->image) }}" alt="" class="img-fluid" style="max-height:
                300px">
                    <div class="fw-bold text-default fs-5">
                        {{ $prestasiSnmptn->title}}
                    </div>
                    <div class="fw-medium text-default">
                        {{ $prestasiSnmptn->description}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- SBMPTN --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-3">
        SBMPTN
    </div>
    <div class="container w-100 mt-4 mb-4">
        <div class="row text-center d-flex justify-content-evenly">
            @foreach($sbmptn as $prestasiSbmptn)
                <div class="col-md-3 px-auto mb-4">
                    <img src="{{ asset($prestasiSbmptn->image) }}" alt="" class="img-fluid"
                         style="max-height: 300px">
                    <div class="fw-bold text-default fs-5">
                        {{$prestasiSbmptn->title}}
                    </div>
                    <div class="fw-medium text-default">
                        {{$prestasiSbmptn->description}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
