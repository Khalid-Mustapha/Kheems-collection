<!DOCTYPE html>
<html lang="en">

<head>
    <title>KHEEM'S.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
 body {
  font: 100% / 1.414 "Open sans", "Trebuchet MS", arial, sans-serif;
  color: #6b8d9f;
  background: #f1f1f1;
}

a,
input[type="submit"],
.form__link {
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

hidden {
  display: none;
}

small {
  display: block;
  margin-top: 1rem;
  font-size: 0.8125rem;
  text-align: center;
}

/**
 * Animation keyframes
 */
@-webkit-keyframes gradient {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

/**
 * Layout
 */
.wrapper {
  position: relative;
  margin: 3rem auto;
  width: 20rem;
  background: #fff;
  box-shadow: 3px 3px 32px rgba(0, 0, 0, 0.25);
  -webkit-perspective: 1000;
  perspective: 1000;
}

.flipper__checkbox:checked + .form__container {
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
}

.form__container {
  position: relative;
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transition: -webkit-transform 0.25s ease;
  transition: transform 0.25s ease;
}

.form__container--inner {
  padding: 2rem;
}

.form__login,
.form__signup {
  position: absolute;
  top: 0;
  left: 0;
  margin: 0;
  width: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  background: #fff;
  box-shadow: 3px 3px 32px rgba(0, 0, 0, 0.25);
}

.form__login:after,
.form__signup:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 6px;
  background: -webkit-linear-gradient(180deg, #b429bd, #9acffa);
  background: linear-gradient(270deg, #b429bd, #9acffa);
  background-size: 400% 400%;
  -webkit-animation: gradient 2s ease infinite;
  animation: gradient 2s ease infinite;
}

.form__login {
  z-index: 2;
  padding: 2rem;
  /* for firefox 31 */
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
}

.form__signup {
  padding: 2rem;
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
}

/**
 * Form default styling
 */
.form__header {
  margin-bottom: 2rem;
  font-size: 1.618rem;
  font-weight: 700;
  text-align: center;
}

.form__group:nth-of-type(n + 2) {
  margin-top: 1.5rem;
}

.label__icon {
  padding: 0.97rem 0;
  float: left;
  width: 3rem;
  font-size: 1.25rem;
  text-align: center;
  color: rgba(107, 141, 159, 0.25);
  border-top: 1px solid #e1e1e1;
  border-bottom: 1px solid #e1e1e1;
  border-left: 1px solid #e1e1e1;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}

.form__element {
  padding-top: 1.11rem;
  padding-right: 1rem;
  padding-bottom: 1.11rem;
  width: 15.875rem;
  border-top: 1px solid #e1e1e1;
  border-right: 1px solid #e1e1e1;
  border-bottom: 1px solid #e1e1e1;
  border-left: 0;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}

.form__element:focus {
  outline: 0;
}

[type="checkbox"] {
  position: relative;
  margin-right: 0.5rem;
}

[type="checkbox"]:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border: 1px solid #e1e1e1;
  width: 16px;
  height: 16px;
  background: #fff;
  border-radius: 2px;
  cursor: pointer;
}

label[for="checkbox"] {
  position: relative;
  font-size: 0.9rem;
  font-weight: 700;
}

.checkbox--forget:checked + .icon--checkbox {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.icon--checkbox {
  position: absolute;
  top: 4px;
  left: 6px;
  opacity: 0;
  cursor: pointer;
  -webkit-transition: all 0.35s cubic-bezier(0.91, 0.8, 0.84, 2.81);
  transition: all 0.35s cubic-bezier(0.91, 0.8, 0.84, 2.81);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
}

.form__link {
  font-size: 0.8rem;
  font-weight: bold;
  text-decoration: underline;
  color: rgba(107, 141, 159, 0.75);
  cursor: pointer;
}

.form__link:focus,
.form__link:hover {
  color: rgba(107, 141, 159, 0.95);
}

.link--right {
  float: right;
}

.form__button {
  padding-top: 1rem;
  padding-bottom: 1rem;
  display: inline-block;
  width: 100%;
  font-size: 1rem;
  font-weight: 700;
  text-align: center;
  color: #fff;
  background-color: #b429bd;
  border: 0;
  border-radius: 2px;
  cursor: pointer;
}

.form__button:focus,
.form__button:hover {
  background-color: #b429bd;
}

    </style>
</head>

<body>
<div class="modal fade" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="searchModalLabel">Product Search</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Your search input fields and "Search" button go here -->
              <input type="text" id="searchInput" placeholder="Enter a keyword">
              <label for="minPrice">Min Price:</label>
              <input type="number" id="minPrice" >
              <label for="maxPrice">Max Price:</label>
              <input type="number" id="maxPrice">
              <label for="genderSelect">Gender:</label>
              <select id="genderSelect">
                <option value="">Any</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unisex">Unisex</option>
              </select>
              <h2>Search Results</h2>
              <ul id="resultsList"></ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="searchProducts()">Search</button>
            </div>
          </div>
        </div>
      </div>
   <!-- Start Top Nav -->
   <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

      <!-- Header -->
      <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                <h1 class="h1 text-success"><b>Kheem's</b> Collection</h1>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="templatemo_main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <a  href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            </a>
                            <div class="input-group-text">
                                <a  href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                                 <i class="fa fa-fw fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Registration Form -->
   <div class="wrapper">
  <input type="checkbox" name="flipper__checkbox" id="flipper__checkbox" class="flipper__checkbox" hidden />

  <div class="form__container">
    <!-- Front side -->
    <div class="form__login">
      <h1 class="form__header">Login</h1>

      <form action="login.php" method="post" class="form" >
        <fieldset class="form__group">
          <input id="mail" name="email" class="form__element" type="email" placeholder="Email" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['email']);} ?>" required />
                  <p>
                     <?php 
                         if(isset($errors['email']))
                         {
                            echo ($errors['email']) ; 
                         } 
                     ?>
                 </p>
        </fieldset>

        <fieldset class="form__group">
          <input id="password" name="password" class="form__element" type="password" placeholder="Password" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['password']);} ?>" required />
          <p>
                     <?php 
                         if(isset($errors['password']))
                         {
                            echo ($errors['password']) ; 
                         } 
                     ?>
                 </p>
        </fieldset>

        <fieldset class="form__group">
          <label for="checkbox"><input id="checkbox" name="checkbox" class="checkbox--forget" type="checkbox" /><span class="icon--checkbox fa fa-check"></span> Remember me</label>

          <a class="form__link link--right" href="passwordretrieve.php
          ">Forgot your password?</a>
        </fieldset>

        <fieldset class="form__group">
          <input class="form__button" type="submit" value="Login" />
        </fieldset>

        <small>Not a member yet? <label for="flipper__checkbox" class="form__link">Create your account</label>.</small>
      </form>
    </div>
    <!-- .end Front side -->

    <!-- Back side -->
    <div class="form__signup">
      <h1 class="form__header">Sign Up</h1>

      <form action="signup.php" method="post" class="form">
        <fieldset class="form__group">
          <input id="signUpName" name="name" class="form__element" type="text" placeholder="Full Name" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['name']);} ?>"  required />
        </fieldset>

        <fieldset class="form__group">
          <input id="signUpMail" name="email" class="form__element" type="email" placeholder="Email" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['email']);} ?>" required />
          <p>
                     <?php 
                         if(isset($errors['email']))
                         {
                            echo ($errors['email']) ; 
                         } 
                     ?>
                 </p>
        </fieldset>
        
        <fieldset class="form__group">
          <input id="signUpMail" name="phone" class="form__element"  type="tel" placeholder="Phone number" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['phone']);} ?>" required />
          <p>
                     <?php 
                         if(isset($errors['phone']))
                         {
                            echo ($errors['phone']) ; 
                         } 
                     ?>
                 </p>
        </fieldset>
        <form method="post" action="process_form.php">
        
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" class="form__element"><br>
      <div class="form__element">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" >
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
      </div>
        <fieldset class="form__group">
          <input id="signUpPassword" name="password" class="form__element" type="password" placeholder="Password" value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['password']);} ?>" required />
          <p>
                     <?php 
                         if(isset($errors['password']))
                         {
                            echo ($errors['password']) ; 
                         } 
                     ?>
                 </p>
        </fieldset>

        <fieldset class="form__group">
          <input id="signUpPasswordRepeat" name="password2" class="form__element" type="password" placeholder="Repeat Password"  value= "<?php if(isset($errors)) {echo htmlspecialchars($_POST['password2']);} ?>" required />
        </fieldset>

        <fieldset class="form__group">
          <input class="form__button" type="submit" value="Sign up" />
        </fieldset>

        <small>Are you a member? <label for="flipper__checkbox" class="form__link">Click here to login</label>.</small>
      </form>
    </div>
    <!-- .end Back side -->
  </div>
</div>  

</body>

<!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</html>