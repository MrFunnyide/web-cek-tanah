<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0 ">
                <li class="nav-item pe-3">
                    <a href="/" class="text-white nav-link active"> <i class="ms-3 bi bi-house-door-fill"></i> </a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link active" aria-current="page" href="#pelayanan">Pelayanan</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link active" aria-current="page" href="#information">Information</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link active" aria-current="page" href="#tracking">Tracking Surat</a>
                </li>
            </ul>
            <div class="d-flex">
                <a style="font-size: 14px;" href="{{ route('login') }}" class="mx-3 btn btn-outline-light" role="button">Login For Admin</a>
            </div>
        </div>
    </div>
</nav>
