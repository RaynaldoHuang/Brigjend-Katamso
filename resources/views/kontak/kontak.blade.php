@extends('Layout.index')

@section('content')
    <div class="container w-100 mt-4 mb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="font-cairo text-default fw-bold fs-4 mt-1 mb-3">
                    Lokasi Kami
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0533116645456!2d98.61014241454345!3d3.5752177973982633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f06c437529d%3A0xde384c34c2f2301d!2sYayasan%20Perguruan%20Nasional%20Brigjend%20Katamso!5e0!3m2!1sid!2sid!4v1672227296148!5m2!1sid!2sid"
                    width="540" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="fw-semibold mt-2">
                    Yayasan Perguruan Nasional Brigjend Katamso 1
                </div>
                <div class="row">
                    @if ($contacts->telp_bk_1)
                        <div class="col-md-6">
                            <div class="font-cairo text-default fw-bold fs-4 mt-3">
                                Telepon
                            </div>
                            <div class="fw-medium mt-1">
                                {{ $contacts->telp_bk_1->description }}
                            </div>
                        </div>
                    @endif

                    @if ($contacts->email_bk)
                        <div class="col-md-6">
                            <div class="font-cairo text-default fw-bold fs-4 mt-3">
                                E-mail
                            </div>
                            <div class="fw-medium mt-1">
                                <span class="text-primary">{{ $contacts->email_bk->description }}</span class="text-primary">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="font-cairo text-default fw-bold fs-4 mt-1 mb-3">
                    Lokasi Kami
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.4996538751116!2d98.65466421454379!3d3.70052559730756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312d54d11d4193%3A0x6020e8e2073c671d!2sYayasan%20Perguruan%20Brigjend%20Katamso%20II!5e0!3m2!1sid!2sid!4v1672227354823!5m2!1sid!2sid"
                    width="540" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="fw-semibold mt-2">
                    Yayasan Perguruan Nasional Brigjend Katamso 2
                </div>
                <div class="row">
                    @if ($contacts->telp_bk_1)
                        <div class="col-md-6">
                            <div class="font-cairo text-default fw-bold fs-4 mt-3">
                                Telepon
                            </div>
                            <div class="fw-medium mt-1">
                                {{ $contacts->telp_bk_1->description }}
                            </div>
                        </div>
                    @endif

                    @if ($contacts->email_bk)
                        <div class="col-md-6">
                            <div class="font-cairo text-default fw-bold fs-4 mt-3">
                                E-mail
                            </div>
                            <div class="fw-medium mt-1">
                                <span class="text-primary">{{ $contacts->email_bk->description }}</span class="text-primary">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="font-cairo text-default fw-bold fs-2 text-center mt-5">
                Sosial Media
            </div>
            <div class="row mt-4 m-0">
                <div class="col-md-4 text-center">
                    <a href="{{ $contacts->instagram ? $contacts->instagram->description : '#' }}"><img src="{{ asset('image/instagram.png') }}" alt="..."
                            style="max-width: 80px"></a>
                    <div class="font-cairo text-default fw-bold fs-3">
                        katamso.sch.id
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <a href="{{ $contacts->youtube ? $contacts->youtube->description : '#' }}"><img src="{{ asset('image/youtube.png') }}" alt="..."
                            style="max-width: 80px"></a>
                    <div class="font-cairo text-default fw-bold fs-3">
                        Sekolah Brigjend Katamso
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <a href="{{ $contacts->facebook ? $contacts->facebook->description : '#' }}"><img src="{{ asset('image/facebook.png') }}" alt="..."
                            style="max-width: 80px"></a>
                    <div class="font-cairo text-default fw-bold fs-3">
                        brigjendkatamso.sch
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
