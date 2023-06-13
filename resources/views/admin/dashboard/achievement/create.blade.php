@extends('admin.dashboard.layouts.index')

{{--Achievement Create--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Create Achievement</h5>
                    <p class="text-muted">Menu ini bertujuan menambahkan data prestasi pada halaman
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

                    <form action="{{route('admin.achievement.store')}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"
                                   placeholder="eg.Juara 1 Olimpiade">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}"
                                   placeholder="eg.Juara 1 Olimpiade">
                        </div>

                        <div class="mb-3">
                            <label for="student_name" class="form-label">Nama Murid</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" value="{{old('student_name')}}"
                                   placeholder="eg.Nama murid">
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe</label>
                            <select class="form-select" id="type" name="type" value="{{old('type')}}">
                                <option value="non-akademik">Non Akademik</option>
                                <option value="akademik">Akademik</option>
                                <option value="snmptn">SNMPTN</option>
                                <option value="sbmptn">SBMPTN</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
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
