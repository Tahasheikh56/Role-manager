<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopZenith</title>

    <!-- ------------------------------fav icon -------------------------------->
    <link rel="icon" href="images/pic 2.png">

    <!-------------------------------------- css link -------------------------------------->
    <link rel="stylesheet" href="style.css">

    <!-------------------------------------- bootstrap 5 link------------------------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-------------------------------------- font awesome Link------------------------------------ -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

     <!-- -----------------top-bar here ------------------------->
     <div class="Container-fluid">
        <div class="top-bar p-1  text-white text-center bg-dark">
            <h6 class="h6">Get up to 40% OFF New-Season Styles <span class="span1"> MEN </span> <span class="span2"> WOMEN</span> <span class="span3">*Limited time only. </span></h6>
          </div>

        <!------------------- Navbar here ----------------------------------------->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <a class="navbar-brand fs-4 mt-1 fw-bold ms-5">ShopZenith</a>
    <a class="navbar-brand" ><img src="images/fav.jpg" width="70px"  alt=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-5 fs-5 active" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-5 ms-5 active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Womens</a></li>
            <li><a class="dropdown-item" href="#">Mens</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Kids</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 ms-5" aria-current="page" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex ms-auto" method="post">
        <input class="form-control me-2 bordered" type="search" placeholder="Search" name="name" aria-label="Search">
        <button class="btn btn-success" name="search" type="submit">Search</button>

        <?php
       if(empty($_SESSION["name"])){
        ?>
        <a class="btn btn-info ms-1 text-white" href="login.php" type="submit">Login</a>
        <?php } ?>
  
        <div class="dropdown ms-2">
          <?php
          if(!empty($_SESSION["name"])){
          ?>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </button>
            <?php
          }
            ?>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="#"><?php echo "User : ".$_SESSION["name"]; ?></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Log in as <?php echo $_SESSION["role"]; ?></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger text-decoration-underline" href="logout.php">Logout</a></li>
            </ul>
        </div>
         
        <?php
          if(!empty($_SESSION["name"])){
            if($_SESSION["role"] == "Admin"){
            if($_SESSION["role"] !== "Employee" OR "Customer"){
        ?>
        <a type="submit" href="admin/view_sale.php" class="btn btn-danger ms-1">Sell</a>
        <?php } } } ?>
      </form>
    </div>
  </div>
</nav>

<!-- yaha se table  and carosul wala h -->
<div class="container-fluid mt-5">
    <div class="row">
       <div class="col-md-12 mt-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-touch="false" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="images/pic 1.PNG" class="d-block" width="99%" height="412" alt="...">
              </div>
              <div class="carousel-item"data-bs-interval="3000">
                <img src="images/pic 2.PNG" class="d-block"  width="99%" height="412" alt="...">
              </div>
              <div class="carousel-item"data-bs-interval="3000">
                <img src="images/pic 4.PNG" class="d-block "  width="99%" height="412" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
</div>
<!-- --------------------------banner------- -->
<div class="container mt-5">
    <div class="row">
    <a class="navbar-brand mt-3" ><img src="images/pic 3.PNG" height="80%" width="100%" alt=""></a>
    </div>
</div>
<!-- //////---------------------body here ------------------------------------- -->
<div class="Container-fluid">
  <div class="row">
<?php
  if(isset($_POST["search"])){
    extract($_POST);
    $query = "select *from product where pname LIKE '%$name%'";
    $query = $obj->query($query);
  }
  else{
    $query = $obj->query("select *from product");
  }
    while($row = mysqli_fetch_assoc($query)){
    ?>
    <div class="col-md-3">
    <div class="card shadow border">
  <div class="card-body bg-light">
  <p class="mt-4 mb-4"><img src="<?php echo $row["pimg"];  ?>" width="100%" alt=""></p>
    <h4 class="card-title"><?php echo $row["pname"]; ?></h4>
    <p class="card-link fs-4 fw-bold"><?php echo "PKR ".$row["pprice"]; ?></p>


    <?php 
    if(!empty($_SESSION["name"])){
   if($_SESSION["role"] == "Admin" OR "Employee"){
    if($_SESSION["role"] !== "Customer"){
   ?>
    <a href="admin/update.php?upd=<?php echo $row["pid"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
    <?php 
   } } }
   ?>

   <?php 
    if(!empty($_SESSION["name"])){
   if($_SESSION["role"] == "Admin"){
    if($_SESSION["role"] !== "Employee" OR "Customer"){
   ?>
    <a href="admin/delete.php?dlt=<?php echo $row["pid"]; ?>"><i class="fa-solid fa-trash"></i></a>
    <?php 
   } } }
   ?>

    <a href="admin/product_cart.php?sellid=<?php echo $row["pid"]; ?>" class="btn btn-primary float-end">Buy Now</a>
  </div>
</div>
<br><br><br><br>
    </div>
   <?php } ?>
</div>
</div>
</div>
</div>
</div>

<!---------------------------------------- footer ------------------------------------>
        <div class="container-fluid mt-4 bg-dark">
          <div class="container">
            <div class="row">
            <div class="col-md-3">
                    <h4 class="text-light mt-4">Company</h4>
                    <p class="mt-4 text-light">
                    Shop Zenith is a forward-thinking e-commerce company that specializes in providing high-quality products across a wide range of categories. Our commitment to excellence, customer satisfaction, and innovation sets us apart in the competitive online marketplace.
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <h4 class="text-light mt-4">Quick Links</h4>
                    <ul class="list-unstyled mt-4">
                        <li><a href="#" class="text-light">Home</a></li>
                        <li class="mt-1"><a href="#" class="text-light ">Shop</a></li>
                        <li class="mt-1"><a href="#" class="text-light ">About Us</a></li>
                        <li class="mt-1"><a href="#" class="text-light ">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <h4 class="text-light mt-4">Category</h4>
                    <ul class="list-unstyled mt-4">
                        <li><a href="#" class="text-decoration-none text-light">Women Collection</a></li>
                        <li class="mt-1"><a href="#" class="text-decoration-none text-light ">Men Collection</a></li>
                        <li class="mt-1"><a href="#" class="text-decoration-none text-light ">Kid Collection</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-light mt-4">Connect with Us</h4>
                    <a href="#" class="social-icons"><i class="fa-brands fa-facebook fs-2 mt-4 ms-1 text-primary"></i></a>
                    <a href="#" class="social-icons"><i class="fa-brands fa-instagram fs-2 ms-3 text-danger"></i></a>
                    <a href="#" class="social-icons"><i class="fa-brands fa-twitter fs-2 ms-3 text-info"></i></a>
                    <a href="#" class="social-icons"><i class="fa-brands fa-google-plus fs-2 ms-3 text-white"></i></a>
                </div>
            </div>
            <br><br>
            </div>
    </div>

    <!-- shor footer -->
    <div class="Container-fluid">
    <div class="col-md-12">
           <div class="bg-secondary text-center">
           <small class="text-dark fw-bold"> @ 2023 Freeeze. All Rights Reserved.</small>
           </div>
           </div>
    </div>

     <!-- Add new icon -->
     <?php
    if(!empty($_SESSION["name"])){
     if($_SESSION["role"] == "Admin" OR "Employee"){
    if($_SESSION["role"] !== "Customer"){
   ?>
   <div class="position-fixed bottom-0 end-1 p-4" style="z-index: 1000;">
   <a href="admin/product_form.php" class="btn btn-primary rounded-circle"><i class="fa-solid fa-pen-to-square fs-3"></i></a>
    </div>
    <?php
    }}} ?>

     <!-- whatsapp icon -->
    <div class="position-fixed bottom-0 end-0 p-4" style="z-index: 1000;">
        <a href="https://api.whatsapp.com/send?phone=1234567890" target="_blank" class="btn btn-success rounded-circle"><i class="fa-brands fa-whatsapp fs-2"></i></a>
    </div>
    <!-- Add Bootstrap Icons (for the WhatsApp icon) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
