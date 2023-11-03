<?php
include("connect.php");
if(isset($_POST["submit"])){
  extract($_POST);

  // confirm password//
  if($pass == $confirmpass){
  // email check k liye
  $query = "select *from registration where email = '$email'";
  $result = $obj->query($query);
  if( $result->num_rows > 0){
    echo "<div class = 'alert alert-danger'>Email has already taken ...</div>";
  }

  else{
    // data insert
    $query = "INSERT INTO registration VALUES ('','$name','$email','$pass','$role')";
    if($obj->query($query) === TRUE){
      echo "<script>alert('You have successfully registered');</script>";
    }
    else{
      echo "<script>alert('Oooops something went wrong');</script>";
    }
  }
  }
 
  else{
    echo "<div class = 'alert alert-danger'>Password and Confirm Password does not match ...</div>";
  }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="icon" href="images/fav.jpg">

        <!-------------------------------------- bootstrap 5 link------------------------------------ -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    @media (min-width: 1025px) {
.h-custom {
height: 140vh !important;
}
}
  </style>
</head>
<body>
    <div class="Container">
    <!-- <section class="h-100 h-custom" style="background-color: #8fc4b7;"> -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="images/pic 5.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5 bg-warning">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

            <form class="px-md-2" method="post">

              <div class="form-outline mb-4">
              <label class="form-label" for="form3Example1q">Name</label>
                <input type="text" id="form3Example1q" class="form-control" name="name" required/>
              </div>

              
              <div class="form-outline mb-4">
              <label class="form-label" for="form3Example1q">Email</label>
                <input type="email" id="form3Example1q" class="form-control" name="email" required />
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form-outline mb-3">
              <label class="form-label" for="form3Example1q">Password</label>
                <input type="password" id="form3Example1q" class="form-control" name="pass" required/>
              </div>

                </div>
                <div class="col-md-6 mb-3 ">
                <div class="form-outline mb-3">
              <label class="form-label" for="form3Example1q">Confirm Password</label>
                <input type="password" id="form3Example1q" class="form-control" name="confirmpass" required />
              </div>

                </div>
                
                <div class="row mb-4">
                  <div class="col-md-6 mb-3">
                <label for="pwd">Choose your role</label>
      <select name="role" id="" class="mt-3">
      <option disabled>Choose your role</option>
        <option value="2">Customer</option>
        <option value="3">Employee</option>
      </select>
              </div>

              </div>
              </div>
              <button type="submit" name="submit" class="btn btn-success btn-lg mb-1">Submit</button>
              <a type="submit" href="login.php" class="btn btn-primary btn-lg mb-1">Sing in</a>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</body>
</html>