@extends('admin.dashboard.layouts.index')

{{-- Units View --}}
@section('content')
    <div class="row p-3 g-0">
        <div class="col">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Fasilitas</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        data unit pada halaman utama website.</p>
                </div>

                <div class="mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if (session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imageConfig as $item)
                                <tr>
                                    <td class="fw-semibold">{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset($item->image) }}" alt="image" class="img-fluid"
                                            width="100">
                                    </td>
                                    <td class="fw-semibold">
                                        {{ $item->slug }}
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route('admin.config.image.edit', $item->id) }}"
                                                class="btn btn-link me-1">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav aria-label="nav-pagination" class="d-flex justify-content-end">
                    <ul class="pagination">
                        @if ($imageConfig->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $imageConfig->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        @for ($i = 1; $i <= $imageConfig->lastPage(); $i++)
                            <li class="page-item {{ $imageConfig->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $imageConfig->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($imageConfig->currentPage() < $imageConfig->lastPage())
                            <li class="page-item">
                                <a class="page-link" href="{{ $imageConfig->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
