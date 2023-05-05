@extends('admin.dashboard.layouts.index')

{{--Achievement Create--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit News & Activities</h5>
                    <p class="text-muted">Menu ini bertujuan mengedit atau merubah berita dan kegiatan
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

                    <form action="{{route('admin.news.update', $news->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="eg.Pengumuman Seleksi Online Tahun 2023"
                                   value="{{$news->title}}">
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content"
                                      rows="5">{{$news->content}}</textarea>
                        </div>

                        <div class="mb-4">
                            <img src="{{asset($news->image)}}" alt="news image"
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
