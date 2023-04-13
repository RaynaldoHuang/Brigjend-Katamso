@extends('admin.dashboard.layouts.index')

@section('script')
    <script>
        //
    </script>
@endsection

{{--Carousel View--}}
@section('content')
<div class="row p-3">
    <div class="col">
        <div class="bg-white p-4 rounded-3">
            <div class=" border-bottom border-dark border-opacity-25">
                <h5>Image Carousel</h5>
                <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                    carousel image pada halaman utama website.</p>
            </div>

            <div class=" mt-2">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" {{ $carouselImages->count() >= 5 ? 'disabled' : '' }}>
                        <i class="fas fa-plus"></i>
                        Add Image
                    </button>
                </div>

                <table class="table mt-2">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($carouselImages as $carousel)
                            <tr>
                                <td>
                                    <img src="{{ asset($carousel->image) }}"
                                         alt="Carousel Image" class="img-fluid" style="max-width: 100px">
                                </td>
                                <td class="fw-semibold">{{ $carousel->name }}</td>
                                <td>{{ $carousel->is_active ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <button class="btn btn-link me-1">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-link text-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
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