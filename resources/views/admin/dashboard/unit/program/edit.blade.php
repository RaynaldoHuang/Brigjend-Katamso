@extends('admin.dashboard.layouts.index')

{{--News Create--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Unit Program</h5>
                    <p class="text-muted">Menu ini bertujuan merubah atau mengedit unit program
                        pada halaman website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{route('admin.units.program.update', $program->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="eg.Program Belajar" value="{{ $program->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"
                                      rows="8">{{ $program->description}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="is_published" class="form-label">Status</label>
                            <select class="form-select" aria-label="Program status" id="is_published"
                                    name="is_published">
                                <option value="1"
                                        @if($program->is_published) selected @endif
                                >
                                    Published
                                </option>

                                <option value="0"
                                        @if(!$program->is_published) selected @endif
                                >
                                    Unpublished
                                </option>
                            </select>
                        </div>

                        <div class="mb-3 mt-4">
                            <img src="{{asset($program->image)}}" alt="Program image"
                                 class="img-fluid w-50 rounded-3">
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
