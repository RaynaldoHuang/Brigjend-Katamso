<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Admin | Dashboard</title>
</head>
<body>
<div class="d-grid">
    <div class="row g-0">
        <div class="col-2">
            @include('admin.dashboard.layouts.sidebar')
        </div>

        <div class="col-10 p-0 vh-100">
            <div class="w-100 h-100 overflow-auto" style="background-color: #e9ecef">
                @include('admin.dashboard.layouts.header')

                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@yield('script')
</body>
</html>
