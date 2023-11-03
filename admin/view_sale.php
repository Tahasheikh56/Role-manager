<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 class="text-center mt-1 ">SALES TABLE</h1>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6"> 
                 <form action="" method="post">
<div class="input-group">
   <span class="fs-5">Start</span><input type="date" class="form-control ms-1" name="start" >
   <span class="fs-5 ms-1">End</span><input type="date" class="form-control ms-2" name="end" >
    <button type="submit" name="date" class="input-group-text btn btn-primary">Search</button>
  </div>
</form>
</div>
            <div class="col-md-3">
                <a type="submit" href="../index.php" class="btn btn-primary">Back To Home</a>
            </div>
</div>
    </div>
<br><br>
    <table class="table table-dark table-hover table-bordered text-center">
        <thead>
            <th>Order Id</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Order Date</th>
        </thead>
        <tbody class="table-light">
                <?php 
                include("../connect.php");
                if(isset($_POST["date"])){
                    extract($_POST);
               $query = "select sales.sid,registration.name,product.pname,product.pprice,sales.date 
               FROM sales INNER JOIN registration ON sales.user_id = registration.id INNER JOIN product ON sales.pid = product.pid
               where date between '$start' AND '$end'";
               $query = $obj->query($query);
                }
                else{
                    $query = "select sales.sid,registration.name,product.pname,product.pprice,sales.date 
                    FROM sales INNER JOIN registration ON sales.user_id = registration.id INNER JOIN product ON sales.pid = product.pid";
                    $query = $obj->query($query);
                }
                while($row = mysqli_fetch_assoc($query)){
                ?>
                 <tr>
                <td><?php echo $row["sid"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["pname"]; ?></td>
                <td><?php echo $row["pprice"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
            </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>