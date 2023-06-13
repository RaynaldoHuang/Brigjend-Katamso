@extends('Layout.index')

@section('content')
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Fasilitas
    </div>

    <div class="container w-100 mt-4 mb-5">
        <div class="row d-flex justify-content-center align-items-center gy-5 gx-3">
            @foreach ($fasilitas as $item)
                <div class="col-md-3 d-flex justify-content-center align-items-center flex-column">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->alt }}" class="img-fluid" style="max-height: 17rem">
                    <div class="font-cairo text-default fw-bold fs-5 text-center mt-1">
                        {{ $item->title }}
                    </div>
                </div>
            @endforeach
        </div>

        <nav aria-label="nav-pagination" class="d-flex justify-content-end">
            <ul class="pagination">
                @if($fasilitas->currentPage() > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $fasilitas->previousPageUrl() }}"
                           aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif

                @for($i = 1; $i <= $fasilitas->lastPage(); $i++)
                    <li class="page-item {{ $fasilitas->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $fasilitas->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if($fasilitas->currentPage() < $fasilitas->lastPage())
                    <li class="page-item">
                        <a class="page-link" href="{{ $fasilitas->nextPageUrl() }}"
                           aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endsection
