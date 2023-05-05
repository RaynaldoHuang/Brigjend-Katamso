@extends('admin.auth.layouts.index')

@section('content')
    <div class="bg-white p-4 shadow rounded-4" style="width: 400px">
        <h4 class="fw-bold mb-2">Reset password</h4>
        <p class="text-muted">Silahkan ketik password baru Anda.

        <div class="mt-4">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif

            <form action="{{route('password.update')}}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{$token}}">
                <input type="hidden" name="email" value="{{ request()->email }}">
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required
                           placeholder="••••••••" name="password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi</label>
                    <input type="password" class="form-control" id="password_confirmation" required
                           placeholder="••••••••" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mt-4">Reset password</button>
            </form>
        </div>
    </div>
@endsection
