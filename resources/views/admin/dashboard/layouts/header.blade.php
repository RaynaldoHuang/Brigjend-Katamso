{{--Header--}}
<nav class="navbar navbar-light bg-white p-3 d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-2">
        <button class="d-flex justify-content-center align-items-center p-2 rounded d-md-none">
            <i class="fas fa-bars"></i>
        </button>

        <h6 class="m-0">{{auth()->user()->name ?? ''}}</h6>
    </div>

    <div class="ms-md-auto">
        <form action="{{route('admin.logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">
                Logout
            </button>
        </form>
    </div>
</nav>
