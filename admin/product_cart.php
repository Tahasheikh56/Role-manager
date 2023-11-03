<?php
include("../connect.php");
if(isset($_POST["sale"])){
extract($_POST);
date_default_timezone_set("Asia/Karachi");
$date=date("Y-m-d h:i:sa");
$query = "INSERT INTO sales VALUE ('','$pid','$uid','$date')";
if($obj->query($query)===TRUE){
    ?>
    <script type="text/javascript">
    alert("Are You Ready To Buy");
    alert("Congrats You Buy This Product")
</script>
<?php
}
else{
echo "<script>alert('Ooooooops something went wrong');</script>";
}
}
?>

<?php
if(isset($_SESSION["name"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="../images/fav.jpg">
</head>
<body>
<?php
$sellid = $_REQUEST["sellid"];
$query = $obj->query("select *from product where pid = '$sellid'");
$row = mysqli_fetch_assoc($query);
?>
<div class="container-fluid">
    <div class="row">

     <!------------------- Navbar here ----------------------------------------->
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">

    <a class="navbar-brand fs-4 mt-1 fw-bold ms-5">ShopZenith</a>
    <a class="navbar-brand" ><img src="../images/fav.jpg" width="70px"  alt=""></a>

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
      <form class="d-flex ms-auto">
        <input class="form-control me-2 bordered" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        <!-- <a href="" class="btn btn-danger ms-2 dropdown-toggle">Profile</a> -->
        <div class="dropdown ms-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="#"><?php echo "User : ".$_SESSION["name"]; ?></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Log in as <?php echo $_SESSION["role"]; ?></a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger text-decoration-underline" href="../logout.php">Logout</a></li>
            </ul>
        </div>
      </form>
    </div>
  </div>
</nav>

<!-- end here -->
          <div class="col-md-1"></div>
        <div class="col-md-4">
         <p class="mt-4  mb-4"><img src="<?php echo "../".$row["pimg"];  ?>" width="100%" alt=""></p>
        </div>

        <div class="col-md-6">
         <h4 class="mt-4">Product Title</h4>
         <h4 class="mt-3"><?php echo $row["pname"]."</br>";  ?></h4>
         <hr>
         <h4 class="mt-5">Description</h4>
         <p class="fs-5"><?php echo $row["pdesc"]."</br>";  ?></p>
         <hr>
         <h4 class="mt-5"><?php echo "PKR ".$row["pprice"];  ?></h4>
         <hr>
        <form action="" method="post" class="d-flex">
         <input type="hidden" name="pid" value="<?php echo $row["pid"];  ?>">
         <input type="hidden" name="uid" value="<?php echo $_SESSION["id"];  ?>">
         <button type="submit" name="sale" class="btn btn-success mt-5 p-2">Buy Now</button>
         <a type="submit" href="../index.php" class="btn btn-primary mt-5 p-2 ms-3">Back To Home</a>
        </div>
        </form> 

    </div>
</div>

</body>
</html>
<?php
}
else{
    header("Location:../login.php");
}
?>