@extends('admin.auth.layouts.index')

@section('content')
    <div class="bg-white p-4 shadow rounded-4" style="width: 400px">
        <h4 class="fw-bold mb-2">Masuk</h4>
        <p class="text-muted">Masuk ke akun Anda untuk melanjutkan</p>

        <div class="mt-4">
            @if(session('validation'))
                <div class="alert alert-danger" role="alert">
                    @foreach(session('validation') as $error)
                        <li>{{ $error[0] }}</li>
                    @endforeach
                </div>
            @endif

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach

            <form action="{{route('admin.login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required
                           placeholder="cth: name@email.com" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required
                           placeholder="••••••••" name="password">
                </div>

                <div class="mt-3 text-end">
                    <a href="{{route('admin.forgot-password.view')}}" class="text-decoration-none">Lupa
                        password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mt-4">Masuk</button>
            </form>
        </div>
    </div>
@endsection
