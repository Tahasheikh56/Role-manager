<?php
include("connect.php");
if(isset($_POST["login"])){
  extract($_POST);
  $obj->login($email,$pass);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-------------------------------------- bootstrap 5 link------------------------------------ -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    @media (min-width: 1025px) {
        .gradient-custom {
height: 140vh !important;
}
}
  </style>
</head>
<body>
    <div class="Container-fluid">
    <!-- <section class="vh-100 gradient-custom"  style="background-color: #8fc4b7;"> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
                <form action="" method="post">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-dark-50 mb-5">Please enter your Email and password!</p>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" required/>
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="pass" required />
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-dark-50" href="#!">Forgot password?</a></p>

              <!-- <a type="submit" name="login" class="btn btn-outline-dark btn-lg px-5" >Login</a> -->
              <button type="submit" name="login" class="btn btn-outline-dark btn-lg px-5">Login</button>

            </div>
            </form>
            <div>
              <p class="mb-2">Don't have an account? <a href="reg.php" class="text-dark-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</body>
</html>