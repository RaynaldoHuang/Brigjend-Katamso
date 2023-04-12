@extends('admin.dashboard.layouts.index')

{{--Admin Create--}}
@section('content')
    <div class="row p-3 gy-4">
        <div class="col-6">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Buat Admin</h5>
                    <p class="text-muted">Menu ini bertujuan untuk membuat atau menambahkan
                        akun admin pada website.</p>
                </div>

                <div class="mt-2">
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="cth: name@email.com"/>
                            <div id="emailHelp" class="form-text">Email tidak akan dipublikasikan.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="cth: name123"/>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" placeholder="cth: name123"/>
                            <div id="passwordHelp" class="form-text">Pastikan konfirmasi password sudah sesuai.</div>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" aria-label="Default select example" id="role" name="role">
                                <option value="0">Admin</option>
                                <option value="1">Super Admin</option>
                            </select>
                            <div id="roleHelp" class="form-text">Pastikan role sudah sesuai.</div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary px-5 py-2">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
