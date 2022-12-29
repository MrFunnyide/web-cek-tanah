<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap");
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
    @include('templates.partials.head')
</head>
<body>
    <div class="container mt-3">
        <h3><a href="{{route('dashboard.index')}}"><i class="bi bi-arrow-left"></i></a></h3>
        <h6>Profile</h6>
        <div class="p-5 text-center bg-image rounded-3 shadow" style="background-image: url('/img/profile-bg.svg'); background-repeat: no-repeat; background-size: cover; height: 350px;">
            <div class="mask">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white mt-5">
                        <img src="/img/profile.svg" class="img-fluid" style="width: 150px">
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-5 w-75 mx-auto shadow">
            <div class="w-75 mx-auto">
                <form action="#" class="mt-3">
                    <div class="mb-4">
                        <input type="name" class="form-control" id="name" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-4">
                        <input type="number" class="form-control" id="no_ho" placeholder="No HP">
                    </div>
                    <div class="mb-4">
                        <input type="alamat" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary mb-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
