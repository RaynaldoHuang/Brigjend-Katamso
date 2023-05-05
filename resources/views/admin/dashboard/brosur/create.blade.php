@extends('admin.dashboard.layouts.index')

{{--Carousel Edit--}}
@section('content')
    <div class="row p-3 gy-4 mx-0">
        <div class="col-12">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Edit Brosur Front</h5>
                    <p class="text-muted">Menu ini bertujuan mengubah data brosur pada website.</p>
                </div>

                <div class="mt-2">
                    @if(session('validation'))
                        <div class="alert alert-danger" role="alert">
                            @foreach(session('validation') as $error)
                                <li>{{ $error[0] }}</li>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{route('admin.brosur.store')}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="unit_id" class="form-label">Jenjang</label>
                            <select class="form-select" aria-label="Brosur Jenjang" id="unit_id"
                                    name="unit_id">
                                <option value="1">
                                    TK dan PG
                                </option>

                                <option value="2">
                                    SD
                                </option>

                                <option value="3">
                                    SMP
                                </option>

                                <option value="4">
                                    SMA
                                </option>
                                <option value="5">
                                    SMK
                                </option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="imageFront" class="form-label">Image Depan</label>
                                <input type="file" class="form-control" id="imageFront" name="imageFront">
                                <div id="imageHelp" class="form-text">Image must be in .jpg, .jpeg, .png
                                    format.
                                </div>
                            </div>

                            <div class="mb-3 col-6">
                                <label for="imageBack" class="form-label">Image Belakang</label>
                                <input type="file" class="form-control" id="imageBack" name="imageBack">
                                <div id="imageHelp" class="form-text">Image must be in .jpg, .jpeg, .png
                                    format.
                                </div>
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
