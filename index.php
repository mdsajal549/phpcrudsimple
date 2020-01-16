<?php

 $con=mysqli_connect("localhost","root","", "crud");
 $sql="select*from stu_info";
 $result=mysqli_query($con,$sql);

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
        <center><table>
            <a href="insert.php"><h3>Add new Student</h3></a>
                <hr>
                <h3>student List</h3>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>address</th>
                <th>mobile</th>
                <th>actions</th>
            </tr>
            <?php while ($row=mysqli_fetch_assoc($result)){

            ?>
             <tr>
                 <td><?php echo $row['id'];?></td>
                 <td><?php echo $row['name'];?></td>
                 <td><?php echo $row['age'];?></td>
                 <td><?php echo $row['address'];?></td>
                 <td><?php echo $row['mobile']?></td>
                 <td>
                     <a href="view.php?id=<?php echo $row['id'];?>">view</a>
                     <a href="edit.php?id=<?php echo $row['id'];?>">edit</a>
                     <a onclick="return confirm('Are you sure want to delete?')" href="delete.php?id=<?php echo $row['id'];?>">delete</a>
                 </td>
             </tr>
            <?php }?>

        </table>
            <center




</body>
</html>
