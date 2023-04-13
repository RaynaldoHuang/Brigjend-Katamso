@extends('admin.dashboard.layouts.index')

{{--Carousel Edit--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Carousel</h5>
                    <p class="text-muted">Menu ini bertujuan menambahkan data foto carousel pada website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('admin.carousel.update', $carouselImage->id) }}" method="POST"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Masukkan judul carousel" value="{{$carouselImage->name}}">
                        </div>

                        {{--                        <div class="mb-3">--}}
                        {{--                            <img src="{{asset($carouselImage->image)}}" alt="carousel image"--}}
                        {{--                                 class="img-fluid w-75 rounded-3">--}}
                        {{--                        </div>--}}

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image"
                                   value="{{$carouselImage->image}}">
                            <div id="imageHelp" class="form-text">Image must be in .jpg, .jpeg, .png format.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" aria-label="Carousel status" id="status"
                                    name="status">
                                <option value="1"
                                        @if($carouselImage->is_active) selected @endif
                                >
                                    Aktif
                                </option>

                                <option value="0"
                                        @if(!$carouselImage->is_active) selected @endif
                                >
                                    Tidak Aktif
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
    </div>

@endsection
