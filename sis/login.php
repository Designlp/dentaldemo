<?php 
require_once("include/initialize.php");

if(isset($_SESSION['ADMIN_USERID'])){
  redirect(web_root."index.php");
}
 
 ?> 

 <style type="text/css">
        body{
        background: #3c8dbc;
          background: -webkit-linear-gradient(left, #75e3f0, #3c8dbc);
          background: -o-linear-gradient(left, #75e3f0, #3c8dbc);
          background: -moz-linear-gradient(left, #75e3f0, #3c8dbc);
          background: linear-gradient(left, #75e3f0, #3c8dbc);

          color: #fff;
    }

    /* config.css */

:root {
  --baseColor: #606468;
}

/* helpers/align.css */

.align {
  display: grid;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  justify-items: center;
  place-items: center;
}

.grid {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  max-width: 20rem;
}

/* helpers/hidden.css */

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* helpers/icon.css */

:root {
  --iconFill: var(--baseColor);
}

.icons {
  display: none;
}

.icon {
  height: 1em;
  display: inline-block;
  fill: #606468;
  fill: var(--iconFill);
  width: 1em;
  vertical-align: middle;
}

/* layout/base.css */

:root {
  --htmlFontSize: 100%;

  --bodyBackgroundColor: #2c3338;
  --bodyColor: var(--baseColor);
  --bodyFontFamily: "Open Sans";
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

* {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-size: 100%;
  font-size: var(--htmlFontSize);
}

body {
  background-color: #2c3338;
  background-color: var(--bodyBackgroundColor);
  color: #606468;
  color: var(--bodyColor);
  font-family: "Open Sans", sans-serif;
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: 0.875rem;
  font-size: var(--bodyFontSize);
  font-weight: 400;
  font-weight: var(--bodyFontWeight);
  line-height: 1.5;
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-height: 100vh;
}

/* modules/anchor.css */

:root {
  --anchorColor: #eee;
}

a {
  color: #eee;
  color: var(--anchorColor);
  outline: 0;
  text-decoration: none;
}

a:focus,
a:hover {
  text-decoration: underline;
}

/* modules/form.css */

:root {
  --formGap: 0.875rem;
}

input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-transition: background-color 0.3s;
  -o-transition: background-color 0.3s;
  transition: background-color 0.3s;
}

input[type="submit"] {
  cursor: pointer;
}

.form {
  display: grid;
  grid-gap: 0.875rem;
  gap: 0.875rem;
  grid-gap: var(--formGap);
  gap: var(--formGap);
}

.form input[type="password"],
.form input[type="text"],
.form input[type="submit"] {
  width: 100%;
}

.form__field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.form__input {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

/* modules/login.css */

:root {
  --loginBorderRadus: 0.25rem;
  --loginColor: #eee;

  --loginInputBackgroundColor: #3b4148;
  --loginInputHoverBackgroundColor: #434a52;

  --loginLabelBackgroundColor: #363b41;

  --loginSubmitBackgroundColor: #ea4c88;
  --loginSubmitColor: #eee;
  --loginSubmitHoverBackgroundColor: #d44179;
}

.login {
  color: #eee;
  color: var(--loginColor);
}

.login label,
.login input[type="text"],
.login input[type="password"],
.login input[type="submit"] {
  border-radius: 0.25rem;
  border-radius: var(--loginBorderRadus);
  padding: 1rem;
}

.login label {
  background-color: #363b41;
  background-color: var(--loginLabelBackgroundColor);
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.login input[type="password"],
.login input[type="text"] {
  background-color: #3b4148;
  background-color: var(--loginInputBackgroundColor);
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.login input[type="password"]:focus,
.login input[type="password"]:hover,
.login input[type="text"]:focus,
.login input[type="text"]:hover {
  background-color: #434a52;
  background-color: var(--loginInputHoverBackgroundColor);
}

.login input[type="submit"] {
  background-color: #ea4c88;
  background-color: var(--loginSubmitBackgroundColor);
  color: #eee;
  color: var(--loginSubmitColor);
  font-weight: 700;
  text-transform: uppercase;
}

.login input[type="submit"]:focus,
.login input[type="submit"]:hover {
  background-color: #d44179;
  background-color: var(--loginSubmitHoverBackgroundColor);
}

/* modules/text.css */

p {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.text--center {
  text-align: center;
}

 </style>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dental Clinic</title>

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style type="text/css">
  .d-none img{
    width: 100%;
    padding:10px;
  }
</style>

<body class="">

  <div class="container">


    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">

            <div class="row">
              <div class="col-lg-6 d-none d-lg-block login-image-stretch">
                <img src="dist/img/logoo.png">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                    <div style="font-size: 12px"> <?php check_message();?></div> 
                  </div>
                  <form class="user" method="POST" action="process.php">
                    <div class="form-group">
                      <input type="input" class="form-control form-control-user" id="user_email"  name="user_email" aria-describedby="emailHelp" placeholder="Enter Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="user_pass" name="user_pass"  placeholder="Password">
                    </div> 
                    <button type="submit" name="btnLogin" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                     
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



 

</body>


<body class="align">

  <div class="grid">
  <div style="font-size: 12px"> <?php check_message();?></div> 
    <form method="POST" class="form login" action="process.php">

      <div class="form__field">
        <label for="login__username"><svg class="icon">
            <use xlink:href="#icon-user"></use>
          </svg><span class="hidden">Username</span></label>
        <input autocomplete="username" id="user_email" type="text" name="user_email" aria-describedby="emailHelp" class="form__input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon">
            <use xlink:href="#icon-lock"></use>
          </svg><span class="hidden">Password</span></label>
        <input id="user_pass" name="user_pass" type="password" class="form__input" placeholder="Password" required>
      </div>

      <div class="form__field">
        <input type="submit" name="btnLogin" value="Sign In">
      </div>

    </form>

    <p class="text--center">Not a member? <a href="#">Sign up now</a> <svg class="icon">
        <use xlink:href="#icon-arrow-right"></use>
      </svg></p>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
    </symbol>
    <symbol id="icon-lock" viewBox="0 0 1792 1792">
      <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1792 1792">
      <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
    </symbol>
  </svg>

</body>

</html>
