<?php

$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];

$mobile=$_POST['mobile'];
$con=mysqli_connect("localhost","root","", "crud");
$sql="insert into stu_info VALUES (NULL,'$name','$age','$address','$mobile')";
if (mysqli_query($con,$sql)){
    header("location:index.php");

}
else{
    echo "not inserted";
}

?>