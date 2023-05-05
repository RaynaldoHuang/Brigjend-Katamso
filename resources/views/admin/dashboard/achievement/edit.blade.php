@extends('admin.dashboard.layouts.index')

{{--Achievement Edit--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Achievement</h5>
                    <p class="text-muted">Menu ini bertujuan mengubah data prestasi pada halaman
                        website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{route('admin.achievement.update', $achievement->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="eg.Juara 1 Olimpiade" value="{{$achievement->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="description" name="description"
                                   placeholder="eg.Juara 1 Olimpiade" value="{{$achievement->description}}">
                        </div>

                        <div class="mb-3">
                            <label for="student_name" class="form-label">Nama murid</label>
                            <input type="text" class="form-control" id="student_name" name="student_name"
                                   placeholder="eg.Nama murid" value="{{$achievement->student_name}}">
                        </div>

                        <div class="mb-3">
                            <label for="year" class="form-label">Tahun ajaran</label>
                            <input type="text" class="form-control" id="year" name="year"
                                   placeholder="eg.2023" value="{{$achievement->year}}">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe</label>
                            <select class="form-select" id="type" name="type">
                                <option value="non-akademik"
                                        @if($achievement->type == 'non-akademik') selected @endif
                                >
                                    Non Akademik
                                </option>
                                <option value="akademik"
                                        @if($achievement->type == 'akademik') selected @endif
                                >
                                    Akademik
                                </option>
                                <option value="snmptn"
                                        @if($achievement->type == 'snmptn') selected @endif
                                >
                                    SNMPTN
                                </option>
                                <option value="sbmptn"
                                        @if($achievement->type == 'sbmptn') selected @endif
                                >
                                    SBMPTN
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <img src="{{asset($achievement->image)}}" alt="Achievement image"
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
