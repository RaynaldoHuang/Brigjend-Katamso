@extends('Layout.index')

@section('content')
    <div class="w-100 bg-danger"
        style="height: 20rem; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('{{ asset($banner->image) }}');">

    </div>

    <div class="container mt-5">
        <div class="fs-5 font-cairo">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore recusandae blanditiis pariatur ducimus debitis
            nulla sed rerum, a dignissimos hic animi perferendis sint consequuntur unde quis voluptate veritatis aspernatur
            omnis repellat. Excepturi quis officiis accusantium voluptatibus eum officia ipsam quasi illum. Natus, provident
            totam! Obcaecati eos officiis odio sapiente aliquid.
        </div>

        <div class="font-cairo text-default text-center fw-bold fs-2 my-5">
            Galeri
        </div>

        <div class="row g-2">
            @foreach ($ktc as $item)
                <div class="col-md-3">
                    <img src="{{ asset($item->image) }}" alt="{{ basename(asset($item->image)) }}" class="img-fluid"
                        style="max-height: 17rem">
                </div>
            @endforeach
        </div>
    </div>
@endsection
