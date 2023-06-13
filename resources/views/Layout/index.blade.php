<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>ypnbrigjendkatamso</title>

    <style>
        .custom-topbar {
            background-color: #060585;
            height: auto;
            min-height: 40px;
            padding-left: 10rem
        }

        .text-default {
            color: #060585
        }

        .custom-navbar {
            min-height: 80px;
            padding-left: 0;
            z-index: 2;
        }

        @media (min-width: 992px) {
            .custom-navbar {
                min-height: 80px;
                padding-left: 10rem;
                z-index: 2;
            }
        }

        .height-navbar {}

        .mainlogo {
            z-index: 3;
        }

        .custom-icon-color {
            color: #efa343
        }

        .text3 {
            background-color: #efa343;
            height: 80px;
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url('{{ asset('image/batik2.png') }}');
        }

        .font-cairo {
            font-family: 'Cairo', sans-serif;
        }

        .custom-footer {
            background-color: #060585;
        }

        .circle {
            display: inline-block;
            border-radius: 50%;
            min-width: 3rem;
            min-height: 3rem;
            padding: 2px;
            /* background: red; */
            text-align: center;
            line-height: 1;
            box-sizing: content-box;
            white-space: nowrap;
        }

        .circle:before {
            content: "";
            display: inline-block;
            vertical-align: middle;
            /* padding-top: 100%; */
            height: 0;
        }

        .circle span {
            display: inline-block;
            vertical-align: middle;
        }

        .text4 {
            background-position: top;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url('{{ asset('image/batik2.png') }}');
        }

        .unit-custom img:hover {
            filter: grayscale(50%);
            transition: 0.1s ease-in-out;
        }

        .cursor-pointer {
            cursor: pointer !important;
        }

        .button-color {
            background-color: #060585
        }

        .button-color:hover {
            background-color: #0000dd
        }
    </style>

    @yield ('custom.css')
</head>

<body>
    @include('Layout.topbar')

    @include('Layout.navbar')

    {{-- <div class="container"> --}}
    @yield('content')
    {{-- </div> --}}

    @include('Layout.footer')
    {{-- script --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    @yield('custom.js')
</body>

</html>
