@extends('admin.dashboard.layouts.index')

{{-- Fasilitas Edit --}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Fasilitas</h5>
                    <p class="text-muted">Menu ini bertujuan mengubah data prestasi pada halaman
                        website.</p>
                </div>

                <div class="mt-2">
                    @if (session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach (session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.facility.update', $facility->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="eg.Fasilitas 1" value="{{ old('title', $facility->title) }}">
                        </div>

                        <div class="mb-3">
                            <img src="{{ asset($facility->image) }}" alt="Facility image"
                                class="img-fluid w-25 h-25 rounded-3">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <div id="imageHelp" class="form-text">Image must be in .jpg, .jpeg, .png format.
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
