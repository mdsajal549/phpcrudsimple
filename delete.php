<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","crud");
$sql="delete from stu_info WHERE id=$id ";
if (mysqli_query($con,$sql)){
    header("location:index.php");
}
else{
    echo "not deleted";
}



?>