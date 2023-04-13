@extends('admin.dashboard.layouts.index')

{{--Contact View--}}
@section('content')
    <div class="row p-3 g-0">
        <div class="col">
            <div class="bg-white p-4 rounded-3">
                <div class=" border-bottom border-dark border-opacity-25">
                    <h5>Contact</h5>
                    <p class="text-muted">Menu ini bertujuan untuk menambahkan, mengedit, atau menghapus
                        contact pada halaman utama website.</p>
                </div>

                <div class=" mt-2">
                    <div class="d-flex justify-content-end gap-2 align-items-center">
                        @if(session('success'))
                            <div class="text-success fw-semibold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{route('admin.contact.create')}}" class="btn btn-primary {{
                        $contacts->count() >= 4 ?
                        'disabled' : '' }}">
                            <i class="fas fa-plus"></i>
                            Add Contact
                        </a>
                    </div>

                    <table class="table mt-2">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Value</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <th scope="row" class="py-3">{{ $loop->iteration }}</th>
                                <td class="fw-semibold">{{ $contact->name }}</td>
                                <td>{{ $contact->value }}</td>
                                <td>
                                    @if($contact->type == 'phone')
                                        <span class="badge bg-success">Phone</span>
                                    @else
                                        <span class="badge bg-success">Email</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{route('admin.contact.edit', $contact->id)}}" class="btn
                                        btn-link me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('admin.contact.destroy') }}"
                                              method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $contact->id }}">
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
