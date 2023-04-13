@extends('admin.dashboard.layouts.index')

{{--Admin Edit--}}
@section('content')
    <div class="row p-3 gy-4">
        <div class="col-6">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Admin</h5>
                    <p class="text-muted">Menu ini bertujuan untuk mengedit atau merubah
                        data akun admin pada website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validationUpdate'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validationUpdate') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.access.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John
                             Doe" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="cth: name@email.com" value="{{ $user->email }}">
                            <div id="emailHelp" class="form-text">Email tidak akan dipublikasikan.</div>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Admin status" id="status"
                                    name="status">
                                <option value="0"
                                        @if(!$user->status)
                                            selected
                                    @endif
                                >
                                    Tidak Aktif
                                </option>
                                <option value="1"
                                        @if($user->status)
                                            selected
                                    @endif
                                >
                                    Aktif
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="is_super" class="form-label">Role</label>
                            <select class="form-select" aria-label="Admin roles" id="is_super"
                                    name="is_super">
                                <option value="0"
                                        @if(!$user->is_super)
                                            selected
                                    @endif
                                >
                                    Admin
                                </option>
                                <option value="1"
                                        @if($user->is_super)
                                            selected
                                    @endif
                                >
                                    Super Admin
                                </option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Ganti password</h5>
                    <p class="text-muted">Menu ini bertujuan untuk mengganti password
                        akun admin pada website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validationPassword'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validationPassword') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.access.change-password') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="cth: name123" value=""/>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   name="password_confirmation" placeholder="cth: name123" value=""/>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">Ganti password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
