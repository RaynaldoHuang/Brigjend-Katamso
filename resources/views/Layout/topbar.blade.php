{{-- topbar --}}
<div class="custom-topbar d-xl-flex justify-content-between align-items-center d-none">
    <ul class="d-inline-flex m-0 p-0">
        @if ($contacts->telp_bk_1)
            <li class="list-group-item">
                <a class="text-white text-decoration-none"><i class="fas fa-phone me-1">
                    </i>Brigjend Katamso 1 ({{ $contacts->telp_bk_1->description }})</a>
            </li>
        @endif

        @if ($contacts->telp_bk_2)
            <li class="list-group-item ms-3">
                <a class="text-white text-decoration-none"><i class="fas fa-phone me-1">
                    </i>Brigjend Katamso 2 ({{ $contacts->telp_bk_2->description }})</a>
            </li>
        @endif


        @if ($contacts->email_bk)
            <li class="list-group-item ms-3 order-3">
                <a href="mailto:{{ $contacts->email_bk->description }}" class="text-white text-decoration-none">
                    <i class="fas fa-envelope me-1"></i>{{ $contacts->email_bk->description }}</a>
            </li>
        @endif
    </ul>
    <ul class="d-inline-flex m-0 me-4">
        <li class="list-group-item">
            <a href="{{ $contacts->instagram ? $contacts->instagram->description : '#' }}"
                class="text-white text-decoration-none"><i class="fab fa-instagram fa-lg me-1"></i></a>
        </li>
        <li class="list-group-item ms-2">
            <a href="{{ $contacts->facebook ? $contacts->facebook->description : '#' }}"
                class="text-white text-decoration-none"><i class="fab fa-facebook-f me-1"></i></a>
        </li>
        <li class="list-group-item ms-2">
            <a href="{{ $contacts->youtube ? $contacts->youtube->description : '#' }}"
                class="text-white text-decoration-none"><i class="fa-brands fa-youtube fa-lg"></i></a>
        </li>
    </ul>
</div>
