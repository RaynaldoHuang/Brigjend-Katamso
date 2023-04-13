@extends('admin.dashboard.layouts.index')

@section('script')
    <script>
        //
    </script>
@endsection

{{--Carousel View--}}
@section('content')
    <div class="row p-3 g-0">
        <div class="col">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Brosur</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        brosur pendidikan pada halaman utama website.</p>
                </div>

                <div class=" mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Add Brosur
                        </a>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brosur</th>
                            <th scope="col">Jenjang</th>
                            <th scope="col">Status</th>
                            <th scope="col">Year</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brosurs as $brosur)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset($brosur[0]->brosur) }}"
                                         alt="Brosur Image" class="img-fluid" style="max-width: 100px">
                                </td>
                                <td class="fw-semibold">
                                    @if($brosur[0]->unit->name == 'tk-dan-pg')
                                        TK & PG
                                    @elseif($brosur[0]->unit->name == 'sd')
                                        SD
                                    @elseif($brosur[0]->unit->name == 'smp')
                                        SMP
                                    @elseif($brosur[0]->unit->name == 'sma')
                                        SMA
                                    @else
                                        SMK
                                    @endif
                                </td>
                                <td>
                                    @if($brosur[0]->is_active == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $brosur[0]->year }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="#" class="btn
                                        btn-link me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('admin.brosur.destroy') }}"
                                              method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $brosur[0]->id }}">
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
