<div id="{{ $id_carousel }}" class="carousel {{ $condition_carousel }} {{ $class_carousel }} slide bg-transparent"
    data-bs-ride="false">
    <div class="carousel-inner" role="listbox">
        @php
            $i = 0;
        @endphp
        @foreach ($newsActivities as $item)
            <div class="carousel-item item-{{ $class_carousel }} {{ !$i++ ? 'active' : '' }}">
                <div class="card m-2 text-start d-none d-md-block" style="width: 30rem;">
                    <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-default">
                            {{ \Illuminate\Support\Str::limit($item->title, 50, $end = '...') }}
                        </h5>
                        <p class="card-text fs-6">
                            {{ \Illuminate\Support\Str::limit($item->content, 100, $end = '...') }}</p>
                        <a href="{{ $item->slug }}" class="btn button-color text-white fs-6">Selengkapnya..
                            .</a>
                    </div>
                </div>
                <div class="card m-2 text-start d-block d-md-none">
                    <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-default">
                            {{ \Illuminate\Support\Str::limit($item->title, 50, $end = '...') }}
                        </h5>
                        <p class="card-text fs-6">
                            {{ \Illuminate\Support\Str::limit($item->content, 100, $end = '...') }}</p>
                        <a href="{{ $item->slug }}" class="btn button-color text-white fs-6">Selengkapnya..
                            .</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <button class="carousel-control-prev d-flex align-items-center justify-content-start ms-n7" type="button"
        data-bs-target="#{{ $id_carousel }}" data-bs-slide="prev">
        <span
            class="rounded-circle border border-1 d-flex justify-content-center align-items-center min-w-25px min-h-25px bg-primary">
            <i class="fas fa-chevron-left fs-4 text-white"></i>
            <span class="visually-hidden">Previous</span>
        </span>
    </button>
    <button class="carousel-control-next d-flex align-items-center justify-content-end me-n7" type="button"
        data-bs-target="#{{ $id_carousel }}" data-bs-slide="next">
        <span
            class="rounded-circle border border-1 d-flex justify-content-center align-items-center min-w-25px min-h-25px bg-primary">
            <i class="fas fa-chevron-right fs-4 text-white"></i>
            <span class="visually-hidden">Next</span>
        </span>
    </button> --}}
</div>
