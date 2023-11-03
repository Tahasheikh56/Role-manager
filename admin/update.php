<?php
include("../connect.php");
if(isset($_POST["update"])){
     $updid = $_REQUEST["upd"];
    extract($_POST);

$query = "update product set pname = '$pname',pprice = '$pprice',pdesc='$pdes' where pid = '$updid'";

    if($obj->query($query) === true){
  echo "<div class = 'alert alert-success'>successfully updated</div>";
}
else{
  echo "<div class = 'alert alert-alert'>update unsuccessfull</div>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
$updid = $_REQUEST["upd"];
$query = "select *from product where pid = '$updid'";
$q = $obj->query($query);
while($row = mysqli_fetch_assoc($q)){
?>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form  method="POST" action="">
    <div class="mb-3">
      <label for="pwd">Product Name:</label>
      <input type="text" value="<?php echo $row["pname"]; ?>" class="form-control" id="pname" placeholder="Enter Product Name" required name="pname">
    </div>
    <div class="mb-3">
      <label for="pwd">Product Price:</label>
      <input type="text" value="<?php echo $row["pprice"]; ?>" class="form-control" id="pprice" placeholder="Enter Product Price" required name="pprice">
    </div>
    <div class="mb-3">
      <label for="pwd">Product Description:</label>
      <input type="text" value="<?php echo $row["pdesc"]; ?>" class="form-control" id="pdes" placeholder="Enter Product Description" required name="pdes">
    </div>
   
    
    <button type="submit" name="update" class="btn btn-success">update</button>
    <a type="submit" href="../index.php" class="btn btn-primary">Back To Home</a>
    
  </form>
</div>

<?php
}
?>
</body>
</html>
