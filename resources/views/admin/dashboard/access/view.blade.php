@extends('admin.dashboard.layouts.index')

{{--Admin View--}}
@section('content')
    <div class="row p-3 gy-4">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Admin Access</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        akun admin pada website.</p>
                </div>

                <div class=" mt-2">
                    <div class="d-flex justify-content-end">
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
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John Doe</td>
                                <td>jhondoe@gmail.com</td>
                                <td>2021-08-01 12:00:00</td>
                                <td>Active</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <button class="btn btn-link me-1">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
