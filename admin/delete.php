<?php
include("../connect.php");

$reqid = $_REQUEST["dlt"];
$query = "delete from product where pid='$reqid'";
if($obj->query($query) === true){
    ?>
    <script type="text/javascript">
        alert("Are You Sure To Delete");
        window.open("../index.php","_self");
    </script>
<?php
}
else{
    ?>
    <script>alert("deleted successfully")</script>
    <?php
}

?> 