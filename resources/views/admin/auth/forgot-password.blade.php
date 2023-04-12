@extends('admin.auth.layouts.index')

@section('content')
    <div class="bg-white p-4 shadow rounded-4" style="width: 400px">
        <h4 class="fw-bold mb-2">Lupa password</h4>
        <p class="text-muted">Kami akan mengirim tautan untuk dapat mereset password Anda.

        <div class="mt-4">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required placeholder="cth: name@email.com">
                    <div id="emailHelp" class="form-text">Silahkan check email Anda untuk mereset password. </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mt-3">Kirim</button>
            </form>

            <div class="mt-3">
                Sudah ingat?
                <a href="{{route('admin.login')}}" class="text-decoration-none">Masuk</a>
            </div>
        </div>
    </div>
@endsection
