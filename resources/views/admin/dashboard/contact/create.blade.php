@extends('admin.dashboard.layouts.index')

{{-- Contact Create --}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Create Contact</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan
                        contact pada halaman utama website.</p>
                </div>

                <div class="mt-2">
                    @if (session('validationUpdate'))
                        <div class="alert alert-danger" role="alert">
                            @foreach (session('validationUpdate') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="description" name="description"
                                placeholder="cth:061 - 123 123 atau email@mail.com" value="{{ old('description') }}">
                            <div id="contactEmailHelper" class="form-text">Masukkan nomor atau email dengan
                                benar.
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
