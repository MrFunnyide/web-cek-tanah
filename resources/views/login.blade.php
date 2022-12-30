<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap");
        * {
            font-family: "Poppins", sans-serif;
        }
        ::placeholder {
            font-size: 12px;
        }

        input {
            box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.25), inset 0px -2px 5px rgba(0, 0, 0, 0.25);
        }
        @media (min-width: 320px) and (max-width: 480px) {
            .container {
                align-items: center;
                flex-direction: column;
            }
            .logoLogin {
                margin-top: 0px;
                margin-bottom: 30px;
            }
            .formLogin {
                margin-bottom: 50px;
            }
            .container {
                padding-top: 5px !important;
            }
        }
    </style>
    @include('templates.partials.head')
</head>
<body id="loginPage" style="background: #F5F5F5">
    <div class="container d-flex justify-content-center formLogin w-100" style="padding-top: 100px;">
        <img src="img/loginLogo.svg" alt="login" class="w-50 logoLogin">
        <div class="border border-light rounded-5 text-center pt-4 formLogin shadow" style="background: #FFFFFF">
            <h3 class="fw-bold mt-5">Selamat Datang</h3>
            <p class="fw-light mb-4" style="font-size: 12px">di aplikasi pelayanan KASIPEM</p>
            <img src="img/logo/Logo.svg" alt="logo" style="width: 25%">
            <form action="" method="post"  class="my-5" >
                <div class="mb-3">
                    <input type="text" placeholder="Username" class="form-control w-75 mx-auto mx-sm-auto" name="username" id="username" required >
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" class="form-control w-75 mx-auto mx-sm-auto" name="password" id="password" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn text-white fw-bold border-white w-50" value="Login" style="background: linear-gradient(180deg, #53CDE2 0%, #005792 100%);">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
