<?php
$id=$_GET['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$con=mysqli_connect("localhost","root","","crud");
$sql="update stu_info set name='$name',age='$age',address='$address',mobile='$mobile'WHERE id=$id";
if (mysqli_query($con,$sql)){
    header("location:view.php?id=".$id);

}
else{
    echo "not updated";
}


?>