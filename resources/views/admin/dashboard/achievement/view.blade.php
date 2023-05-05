@extends('admin.dashboard.layouts.index')

{{--Achievemnt View--}}
@section('content')
    <div class="row p-3 g-0">
        <div class="col">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Achievement</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        data prestasi pada halaman utama website.</p>
                </div>

                <div class=" mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{route('admin.achievement.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Add Achievement
                        </a>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Year</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($achievement as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset($item->image) }}"
                                         alt="Carousel Image" class="img-fluid" style="max-width: 100px">
                                </td>
                                <td class="fw-semibold">{{ $item->student_name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    @if($item->type ==  'non-akademik')
                                        <span class="badge bg-info">Non Akademik</span>
                                    @elseif($item->type == 'akademik')
                                        <span class="badge bg-info">Akademik</span>
                                    @elseif($item->type == 'snmptn')
                                        <span class="badge bg-info">SNMPTN</span>
                                    @elseif($item->type == 'sbmptn')
                                        <span class="badge bg-info">SBMPTN</span>
                                    @endif
                                </td>
                                <td>{{ $item->year }}</td>
                                <td>
                                    @if($item->is_published == 1)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-danger">Unpublished</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{route('admin.achievement.edit', $item->id)}}"
                                           class="btn
                                        btn-link
                                        me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('admin.achievement.destroy')}}" method="post">
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
                        @if($achievement->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link" href="{{ $achievement->previousPageUrl() }}"
                                   aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif

                        @for($i = 1; $i <= $achievement->lastPage(); $i++)
                            <li class="page-item {{ $achievement->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $achievement->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        @if($achievement->currentPage() < $achievement->lastPage())
                            <li class="page-item">
                                <a class="page-link" href="{{ $achievement->nextPageUrl() }}"
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
