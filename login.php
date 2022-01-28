<?php
    require 'loginauth/create-user.php';
    require 'loginauth/controllers/AuthController.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login </title>
    <link rel="icon" type="image/png" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/logcss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="bg-img" alt="">
    </div>

<!-- Menu-->
      <nav id="menu" class="col-md-10 col-sm-10">
         <ul class="hidden-xs">
         </li>
            <li><a href="index-1.html">Ballina</a></li>
            <li><a href="galeria.html">Info</a></li>
            <li><a href="foto.html">Foto e vitit</a></li>
            <li><a class="menu-active" href="index.html">Kyquni</a>


         </ul>
         <div class="mobile-menu col-xs-2 pull-right visible-xs">
            <i class="fa fa-bars fa-2x"></i>
         </div>
      </nav>
      <div class="wrapper">
        <div class="title-text">
           <div class="title login">
              Login
           </div>
           <div class="title signup">
              Signup
           </div>
        </div>
        <div class="form-container">
           <div class="slide-controls">
              <input type="radio" name="slide" id="login" checked>
              <input type="radio" name="slide" id="signup">
              <label for="login" class="slide login">Login</label>
              <label for="signup" class="slide signup">Signup</label>
              <div class="slider-tab"></div>
           </div>
           <div class="form-inner">
              <form action="loginauth/login.php" class="login" method="POST">
                 <div class="field">
                    <input type="text" placeholder="username" name="username" required>
                 </div>
                 <div class="field">
                    <input type="password" placeholder="Password" name="password" required>
                 </div>
                 <div class="pass-link">
                    <a href="#">Forgot password?</a>
                 </div>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit" value="Login">
                 </div>
                 <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                 </div>
              </form>
              <form action="loginauth/create-user.php" class="signup" method="POST">
                 <div class="field">
                    <input type="text" placeholder="username" name="username" required>
                 </div>
                 <div class="field">
                    <input type="password" placeholder="Password" name="password" required>
                 </div>
                 <div class="field">
                   <input class="checkbox" type="checkbox" name="is_admin" value="">
                   <div class="checkbox-text">
                          is_admin
                   </div>
                 </div>
                 </fieldset>
                 <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="submit" value="Signup">
                 </div>
              </form>
           </div>
        </div>
     </div>
     <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
          signupBtn.click();
          return false;
        });
     </script>
  </body>
</html>
