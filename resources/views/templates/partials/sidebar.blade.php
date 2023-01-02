<!DOCTYPE html>
<html lang="en">
<head>
    @include('templates.partials.head')
    <link rel="stylesheet" href="/style/styles.css">
</head>

<body>
    <div>
        <div class="sidebar py-4 text-white" id="sidebar">
            <div class="text-center">
                <img src="/img/profile.svg" style="width: 120px">
                <p class="cap mt-2"><a class="text-white fs-6" href="{{route('profile')}}">Aji Bayu Permadi</a></p>
                <p class="cap fs-6 mb-4">Staff</p>
            </div>
            <div class="d-flex flex-column" >
                <li class="nav-item">
                    <a class="text-white" href="{{ route('dashboard.index') }}">
                        <i class="bi bi-house mr-2 pe-1"></i>
                        DASHBOARD
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white" href="{{ route('dataTanah.pemilik') }}">
                        <i class="bi bi-clipboard-data pe-1"></i>
                        DATA TANAH
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white" href="{{ route('dashboardSurat') }}">
                        <i class="bi bi-envelope pe-1"></i>
                        SURAT
                    </a>
                </li>
                <li class="nav-item">
                    <a class="text-white" href="{{ route('arsip.index') }}">
                        <i class="bi bi-archive pe-1"></i>
                        ARSIP
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="text-white" href="{{ route('dataAkun.index') }}">
                        <i class="bi bi-person-badge pe-1"></i>
                        AKUN
                    </a>
                </li> --}}
                <li class="nav-item logout">
                    <button class="btn btn-primary-outline p-0 text-white fw-bold" data-bs-toggle="modal"
                    data-bs-target="#ModalDelete">
                    <i class="bi bi-box-arrow-left pe-1"></i>
                    LOG OUT
                </button>
            </li>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body text-center">
            Apakah kamu yakin ingin keluar ?
        </div>
        <form action="{{ route('logout') }}" method="get">
            @csrf
            <div class="modal-footer d-flex justify-content-center">
                <input type="submit" value="Iya" class="btn btn-danger me-5">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
</div>
<div class="d-flex p-3 border-bottom border-info" id="main-content">
    <div>
        <button class="btn" id="button-toggle" style="background: #1a87cf;">
            <i class="bi bi-list text-white"></i>
        </button>
    </div>
    <div class="ps-3 pt-2 w-100">
        <h5 class="fw-bold"><a href="{{ $link ?? '#' }}">{{ $title ?? 'App-Page' }}</a></h5>
    </div>
    <div>
        <img src="/img/logo/Logo.svg" style="width: 50px">
    </div>
</div>
<div id="content">
    @yield('content')
</div>
<script>
    // event will be executed when the toggle-button is clicked
    document.getElementById("button-toggle").addEventListener("click", () => {

        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");

        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document.getElementById("main-content").classList.toggle("active-main-content");

        document.getElementById("content").classList.toggle("active-content");

    });
</script>
</body>

</html>
