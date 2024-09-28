<?php


$stu_name = $_POST['sname'];

$stu_address = $_POST['saddress'];

 $stu_fadd = $_POST['fadd'];

 $stu_class = $_POST['class'];


 $stu_phone = $_POST['sphone'];

include 'config.php';
   
    $sql="INSERT INTO STUDENT(sname,saddress,fadd,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_fadd}','{$stu_class}','{$stu_phone}')";   
    $result=mysqli_query($conn ,$sql) or die("Query Unsuccessful");


header("Location: http://localhost/jaipur/task/index.php"); 

$mysqli_close($conn);

?>