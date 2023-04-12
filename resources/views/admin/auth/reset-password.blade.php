@extends('admin.auth.layouts.index')

@section('content')
    <div class="bg-white p-4 shadow rounded-4" style="width: 400px">
        <h4 class="fw-bold mb-2">Reset password</h4>
        <p class="text-muted">Silahkan ketik password baru Anda.

        <div class="mt-4">
            <form>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required placeholder="••••••••">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi</label>
                    <input type="password" class="form-control" id="password_confirmation" required placeholder="••••••••">
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mt-4">Reset password</button>
            </form>
        </div>
    </div>
@endsection
