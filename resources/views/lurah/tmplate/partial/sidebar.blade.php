<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/styles.css">
    @include('templates.partials.head')
</head>

<body>
    <div>
        <div class="sidebar p-4 text-center text-white" id="sidebar">
            <img src="img/profile.svg" style="width: 120px">
            <p class="cap">Aji Bayu Permadi</p>
            <p class="cap mb-5">Staff</p>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-house mr-2 pe-1"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="text-white" href="{{ route('dataTanah.pemilik') }}">
                    <i class="bi bi-clipboard-data pe-1"></i>
                    Data Tanah
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-envelope pe-1"></i>
                    Surat
                </a>
            </li>
            <li>
                <a class="text-white" href="#">
                    <i class="bi bi-archive pe-1"></i>
                    Arsip
                </a>
            </li>
            <li>
                <a class="text-white" href="{{ route('dataAkun.index') }}">
                    <i class="bi bi-person-badge pe-1"></i>
                    Akun
                </a>
            </li>
            <li class="logout">
                <a class="text-white" href="#">
                    <i class="bi bi-box-arrow-left pe-1"></i>
                    Log Out
                </a>
            </li>
        </div>
    </div>
    <div class="d-flex p-3 border-bottom border-info" id="main-content">
        <div>
            <button class="btn" id="button-toggle" style="background: #1a87cf;">
                <i class="bi bi-list text-white"></i>
            </button>
        </div>
        <div class="ps-3 pt-2 w-100">
            <h5 class="fw-bold">{{ $title ?? 'App-Page' }}</h5>
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
