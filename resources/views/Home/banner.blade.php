<div id="{{ $id_carousel }}" class="carousel {{ $condition_carousel }} {{ $class_carousel }} slide bg-transparent"
    data-bs-ride="false">
    <div class="carousel-inner" role="listbox">
        @php
            $i = 0;
        @endphp
        @foreach ($carouselImages as $item)
            <div class="carousel-item item-{{ $class_carousel }} {{ !$i++ ? 'active' : '' }}">
                <div class="position-relative">
                    <img src="{{ asset($item->image) }}" class="d-block w-100" alt={{ $item->name }}>
                    @if ($item->action && $item->url)
                        <div class="position-absolute mx-auto" style="bottom: 1rem; left: 47%;">
                            <a href="{{ $item->url }}" target="_blank"
                                class="btn button-color text-white shadow shadow-md">
                                {{ $item->action }} </a>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $id_carousel }}"
        data-bs-slide="prev" style="width: 5%">
        <i class="fa-solid fa-circle-chevron-left fa-2x"></i>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#{{ $id_carousel }}"
        data-bs-slide="next" style="width: 5%">
        <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>
