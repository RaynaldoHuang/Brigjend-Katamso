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
                    @if(session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.access.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="John Doe">
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
                            <label for="password_confirmation" class="form-label">Konfirmasi
                                Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" placeholder="cth: name123"/>
                            <div id="passwordHelp" class="form-text">Pastikan konfirmasi password sudah
                                sesuai.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="is_super" class="form-label">Role</label>
                            <select class="form-select" aria-label="Default select example" id="is_super"
                                    name="is_super">
                                <option value="0">Admin</option>
                                <option value="1">Super Admin</option>
                            </select>
                            <div id="roleHelp" class="form-text">Pastikan role sudah sesuai.</div>

                            @error('validation.is_super')
                            <div class="text-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end mt-4 align-items-center">
                            @if(session('error'))
                                <div class="text-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <button type="submit" class="btn btn-primary px-5 py-2
                            ms-2">
                                Buat
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
