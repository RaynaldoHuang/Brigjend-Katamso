{{-- topbar --}}
<div class="custom-topbar d-flex justify-content-between align-items-center">
    <ul class="d-inline-flex m-0 p-0">
        @foreach($contacts as $contact)
            @if($contact->name === 'Brigjend Katamso 1')
                <li class="list-group-item">
                    <a class="text-white text-decoration-none"><i class="fas fa-phone me-1">
                        </i>{{ $contact->name }} ({{$contact->phone}})</a>
                </li>
            @endif

            @if($contact->name === 'Brigjend Katamso 2')
                <li class="list-group-item ms-3">
                    <a class="text-white text-decoration-none"><i class="fas fa-phone me-1">
                        </i>{{ $contact->name }} ({{$contact->phone}})</a>
                </li>
            @endif

            @if($contact->name === 'Brigjend Katamso 1')
                <li class="list-group-item ms-3 order-3">
                    <a href="mailto:{{$contact->email}}" class="text-white text-decoration-none">
                        <i class="fas fa-envelope me-1"></i>{{$contact->email}}</a>
                </li>
            @endif
        @endforeach
    </ul>
    <ul class="d-inline-flex m-0 me-4">
        <li class="list-group-item">
            <a href="" class="text-white text-decoration-none"><i class="fab fa-instagram fa-lg me-1"></i></a>
        </li>
        <li class="list-group-item ms-2">
            <a href="" class="text-white text-decoration-none"><i class="fab fa-facebook-f me-1"></i></a>
        </li>
        <li class="list-group-item ms-2">
            <a href="" class="text-white text-decoration-none"><i class="fa-brands fa-youtube fa-lg"></i></a>
        </li>
    </ul>
</div>
