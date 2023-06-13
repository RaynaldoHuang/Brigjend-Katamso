{{--Sidebar--}}
<aside class="bg-dark text-white min-vh-100">
    <div class="px-4 pt-4">
        <div class="row">
            <div class="col">
                <h5 class="text-center">Brigjend Katamso</h5>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col py-3">
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-home me-3"></i>
                        <span class="fw-semibold">Dashboard</span>
                    </div>
                </a>
            </div>
        </div>

        @if(auth()->user()->is_super ?? false)
            <div class="row">
                <div class="col py-3">
                    <a href="{{route('admin.access')}}" class="text-decoration-none text-white">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user me-3"></i>
                            <span class="fw-semibold">Admin</span>
                        </div>
                    </a>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.news')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-newspaper me-3"></i>
                        <span class="fw-semibold">Berita & Kegiatan</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.carousel')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-image me-3"></i>
                        <span class="fw-semibold">Carousel</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.achievement')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-trophy me-3"></i>
                        <span class="fw-semibold">Prestasi</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.units')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-graduation-cap me-3"></i>
                        <span class="fw-semibold">Jenjang</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.brosur')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelopes-bulk me-3"></i>
                        <span class="fw-semibold">Brosur</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.facility')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-bars me-3"></i>
                        <span class="fw-semibold">Fasilitas</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col py-3">
                <a href="{{route('admin.config.image')}}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-images me-3"></i>
                        <span class="fw-semibold">Image Config</span>
                    </div>
                </a>
            </div>
        </div>

        @if(auth()->user()->is_super ?? false)
            <div class="row">
                <div class="col py-3">
                    <a href="{{route('admin.contact')}}" class="text-decoration-none text-white">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone me-3"></i>
                            <span class="fw-semibold">Contact</span>
                        </div>
                    </a>
                </div>
            </div>
        @endif
    </div>
</aside>
