@extends('Layout.index')

@section('content')
    {{-- title0 --}}
    <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
        Unit {{ strtoupper($brosur[0]->unit->name) }}
    </div>

    {{-- title --}}
    <div class=" text-center mb-4">
        Download File <span class="text-decoration cursor-pointer text-primary" id="download-brosur">Klik
            Disini</span>
    </div>

    {{-- image --}}
    <div class="container mb-4" style="background-color: #eaeaea">
        @foreach ($brosur as $item)
            <div class="text-center pt-3" data-url-download="{{ asset($item->brosur) }}"
                data-basename-download="{{ basename(public_path($item->brosur)) }}">
                <img src="{{ asset($item->brosur) }}" alt="" class="img-fluid">
            </div>
        @endforeach
    </div>
@endsection

@section('custom.js')
    <script>
        const list = $('[data-url-download]')

        $('#download-brosur').on('click', function() {
            list.map((i, item) => {
                var link = document.createElement('a');
                link.href = $(item).data('url-download');
                link.download = $(item).data('basename-download');
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            })
        })
    </script>
@endsection
