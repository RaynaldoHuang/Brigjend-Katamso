@extends('admin.dashboard.layouts.index')

{{-- Extrakulikuler Edit --}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Unit Extrakulikuler</h5>
                    <p class="text-muted">Menu ini bertujuan merubah atau mengedit unit extrakulikuler
                        pada halaman website.</p>
                </div>

                <div class="mt-2">
                    @if (session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach (session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.units.extra.update', $extras->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="eg.Bola Basket" value="{{ old('name', $extras->name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="is_active" class="form-label">Status</label>
                            <select class="form-select" aria-label="Program status" id="is_active" name="is_active">
                                <option value="1" @if ($extras->is_active) selected @endif>
                                    Published
                                </option>

                                <option value="0" @if (!$extras->is_active) selected @endif>
                                    Unpublished
                                </option>
                            </select>
                        </div>

                        <div class="mb-3 mt-4">
                            <img src="{{ asset($extras->image) }}" alt="Program image" class="img-fluid w-50 rounded-3">
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
