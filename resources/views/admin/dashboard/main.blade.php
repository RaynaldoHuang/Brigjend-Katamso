@extends('admin.dashboard.layouts.index')

@section('content')
    <div class="p-3 row">
        <div class="col">
            <div class="bg-white p-3 rounded-2">
                <p class="text-muted fw-semibold m-0">Total Users</p>
                <p class="text-primary fw-semibold fs-3 mb-1">{{ $totalAdmins }}</p>
                <p class="text-muted m-0">Dari akun yang terdaftar</p>
            </div>
        </div>
        <div class="col">
            <div class="bg-white p-3 rounded-2">
                <p class="text-muted fw-semibold m-0">Total Berita</p>
                <p class="text-primary fw-semibold fs-3 mb-1">{{ $totalPosts }}</p>
                <p class="text-muted m-0">Dari postingan yang dibuat</p>
            </div>
        </div>
        <div class="col">
            <div class="bg-white p-3 rounded-2">
                <p class="text-muted fw-semibold m-0">Total Prestasi</p>
                <p class="text-primary fw-semibold fs-3 mb-1">{{ $totalAchievements }}</p>
                <p class="text-muted m-0">Dari akun yang terdaftar</p>
            </div>
        </div>
        <div class="col">
            <div class="bg-white p-3 rounded-2">
                <p class="text-muted fw-semibold m-0">Total Jenjang</p>
                <p class="text-primary fw-semibold fs-3 mb-1">{{ $totalJenjang }}</p>
                <p class="text-muted m-0">Dari akun yang terdaftar</p>
            </div>
        </div>
    </div>

    <div class="row p-3">
        <div class="col">
            <div class="bg-white p-3 rounded-2">
                <p class="text-muted fw-semibold m-0">Welcome to dashboard!</p>
            </div>
        </div>
    </div>
@endsection
