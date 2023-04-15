@extends('admin.dashboard.layouts.index')

{{--News View--}}
@section('content')
    <div class="row p-3 g-0">
        <div class="col">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>News & Activities</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        berita dan kegiatan yang ada di website.</p>
                </div>

                <div class=" mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{route('admin.news.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Add News
                        </a>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">CreatedAt</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset($item->image) }}"
                                         alt="Carousel Image" class="img-fluid" style="max-width: 100px">
                                </td>
                                <td class="fw-semibold">{{ \Illuminate\Support\Str::limit($item->title, 50)
                                 }}</td>
                                <td>
                                    @if($item->status == 1)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-danger">Unpublished</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{route('admin.news.edit', $item->id)}}"
                                           class="btn
                                        btn-link
                                        me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.news.destroy')}}"
                                              method="post">
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

                <nav aria-label="nav-pagination" class="d-flex justify-content-end">
                    <ul class="pagination">
                        @if($news->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $news->previousPageUrl() }}"
                                   aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        @for($i = 1; $i <= $news->lastPage(); $i++)
                            <li class="page-item {{ $news->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if($news->currentPage() < $news->lastPage())
                            <li class="page-item">
                                <a class="page-link" href="{{ $news->nextPageUrl() }}"
                                   aria-label="Next">
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
