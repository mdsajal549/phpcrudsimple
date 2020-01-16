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
    <style> table,tr,td,th{
            border: 1px solid;
        }</style>
</head>
<body>
<center>
    <table>
        <a href="index.php"><h3>student list</h3></a>
        <hr>
        <h2>student information</h2>

        <tr>
            <th>name</th>
             <td><?php echo $row['name'];?></td>
            </tr>
        <tr>
            <th>age</th>
             <td><?php echo $row['age'];?></td>
            </tr>
        <tr>
            <th>address</th>
            <td><?php echo $row['address'];?></td>
            </tr>
        <tr>
            <th>mobile</th>
        <td><?php echo $row['mobile'];?></td>
        </tr>




    </table>
    <center




</body>
</html>
