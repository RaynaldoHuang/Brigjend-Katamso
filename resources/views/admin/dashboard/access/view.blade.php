@extends('admin.dashboard.layouts.index')

{{--Admin View--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Admin</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        akun admin pada website.</p>
                </div>

                <div class=" mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ route('admin.access.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Tambah
                        </a>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dibuat Pada</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($users->count() > 0)
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row" class="py-3">{{ $loop->iteration }}</th>
                                    <td class="py-3">{{ $user->name }}</td>
                                    <td class="py-3">{{ $user->email }}</td>
                                    <td class="py-3">{{ $user->created_at }}</td>
                                    <td class="py-3">
                                        @if($user->status == 1)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td class="py-3">
                                        @if($user->is_super == 1)
                                            <span class="badge bg-danger">Super Admin</span>
                                        @else
                                            <span class="badge bg-warning">Admin</span>
                                        @endif
                                    </td>
                                    <td class="py-3">
                                        <a href="{{ route('admin.access.edit', $user->id) }}"
                                           class="btn btn-sm btn-link fs-6 py-0">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center py-3">Tidak ada data</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
