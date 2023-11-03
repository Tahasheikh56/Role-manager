<?php
session_start();
class connect{
public $connect;

public function __construct(){
    $this->connect = mysqli_connect("localhost","root","","secproject");
    if($this->connect->connect_error){
        die("connection error".$this->connect->connect_error);
    }
}

public function query($query){
    return  $this->connect->query($query);
  }

  public function login($email,$password){
    $query = "select *from registration where email = '$email' AND password = '$password'";
    $query2 = $this->connect->query($query);
    if($query2->num_rows>0){
      $row = mysqli_fetch_assoc($query2);
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["pass"] = $row["password"];
        $_SESSION["role"] = $row["role"];
        header("Location:index.php");
    }
  }
}
$obj = new connect();
?>