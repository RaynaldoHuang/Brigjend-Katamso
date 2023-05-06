@extends('admin.dashboard.layouts.index')

{{--Achievement Create--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-6">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Units</h5>
                    <p class="text-muted">Menu ini bertujuan mengedit atau merubah unit
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

                    <form action="{{route('admin.units.update', $unit->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 mt-3">
                            <img src="{{asset($unit->image)}}" alt="unit image"
                                 class="img-fluid w-100 rounded-3">
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

        <div class="col-6">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Programs</h5>
                    <p class="text-muted">Menu ini bertujuan mengedit atau merubah unit program
                        pada halaman website.</p>
                </div>

                <div class="mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form action="{{route('admin.units.program.create')}}" method="POST">
                            @csrf
                            <input type="hidden" name="unitId" value="{{$unit->id}}">
                            <button type="submit" class="btn btn-primary">Tambah Program</button>
                        </form>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($unit->program as $item)
                            <tr>
                                <td class="fw-semibold">{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td class="fw-semibold">
                                    @if($item->is_published)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-danger">Unpublished</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('admin.units.program.edit', $item->id)}}"
                                           class="btn btn-link">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.units.program.destroy')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-link text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Detail</h5>
                    <p class="text-muted">Menu ini bertujuan mengedit atau merubah unit
                        detail pada halaman website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{route('admin.units.detail.update', $unit->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 mt-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Keterangan" value="{{$unit->detail->title}}">
                        </div>

                        <div class="mb-4">
                            <label for="detail" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="detail" name="description" rows="8"
                                      placeholder="Keterangan">{{$unit->detail->description}}</textarea>
                        </div>

                        <div class="mb-4">
                            <img src="{{asset($unit->detail->image)}}" alt="unit image"
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

        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Extrakulikuler</h5>
                    <p class="text-muted">Menu ini bertujuan mengedit atau merubah unit extrakulikuler
                        pada halaman website.</p>
                </div>

                <div class="mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif


                        <form action="{{route('admin.units.extra.create')}}" method="POST">
                            @csrf
                            <input type="hidden" name="unitId" value="{{$unit->id}}">
                            <button type="submit" class="btn btn-primary">Tambah Extrakulikuler</button>
                        </form>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($unit->extra as $item)
                            <tr>
                                <td class="fw-semibold">{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}"
                                         alt="Extrakulikuler Image" class="img-fluid" style="max-width:
                                         100px">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td class="fw-semibold">
                                    @if($item->is_active)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-danger">Unpublished</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('admin.units.extra.edit', $item->id)}}"
                                           class="btn btn-link">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.units.extra.destroy')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-link text-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
