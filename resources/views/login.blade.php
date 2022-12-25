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

      .inputLogin:hover {
        border: #FFFFFF
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
      }
   </style>
    @include('templates.partials.head')
</head>
<body id="loginPage" style="background: #F5F5F5">
   <div class="container d-flex justify-content-center formLogin" style="padding-top: 100px;">
      <img src="img/loginLogo.svg" alt="login" class="w-50 logoLogin">
      <div class="border border-light rounded-5 text-center pt-4 formLogin shadow" style="background: #FFFFFF">
         <h3 class="fw-bold mt-5">Selamat Datang</h3>
         <p class="fw-light mb-4" style="font-size: 12px">di aplikasi pelayanan KASIPEM</p>
         <img src="img/logo/Logo.svg" alt="logo"style="width: 35%">
         <form action="" method="post"  class="my-5" >
            <div class="mb-3">
               <input type="text" placeholder="Username" required style="width: 60%" class="ps-3 py-2 rounded-4 border border-light inputLogin">
            </div>
            <div class="mb-3">
               <input type="password" placeholder="Password" required style="width: 60%" class="ps-3 py-2 rounded-4 border border-light inputLogin">
            </div>
            <div class="mt-4 mb-5">
               <button style="background: linear-gradient(180deg, #53CDE2 0%, #005792 100%);" type="submit" class="border border-white rounded-4 btn px-5 py-2 text-white fw-bold ">Login</button>
            </div>
         </form>
      </div>
   </div>
</body>
</html>
