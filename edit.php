
<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","", "crud");
$sql="select*from stu_info where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, tr,td{
            border: 1px solid;
        }
    </style>
</head>
<body>



<center>
    <a href="index.php"><h2>Student List</h2></a>
    <hr>
    <h2>Add new student</h2><table>
        <form action="update.php?id=<?php echo $id;?>" method="post">
            <tr><td>Name</td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
            <tr><td>age</td><td><input type="text" name="age" value="<?php echo $row['age'];?>"></td></tr>
            <tr><td>address</td><td><input type="text" name="address" value="<?php echo $row['address'];?>"></td></tr>
            <tr><td>mobile</td><td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
            <tr><td><input type="submit"></td></tr>



        </form>
    </table>
</center>
</body>
</html>