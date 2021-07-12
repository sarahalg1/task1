<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli('localhost', 'root', '','motors');
$con1 = new mysqli('localhost', 'root', '','turn');
$sc=$_POST['d'];
$sc2=$_POST['d2'];
$sc3=$_POST['d3'];
$sc4=$_POST['d4'];
$sc5=$_POST['d5'];
$sc6=$_POST['d6'];
if(isset($_POST['ss'])){
echo 'values are add ';
$sql = "INSERT into motor (m1,m2,m3,m4,m5,m6)values( $sc,$sc2,$sc3,$sc4,$sc5,$sc6)";
$rs = mysqli_query($con, $sql);	
}


if(isset($_POST['rr'])){
$sql2 = "INSERT into work (t1,t2)values(1,0)";
$rs2 = mysqli_query($con1, $sql2);
echo 'the motors are turn on ';
}




mysqli_close($con);

mysqli_close($con1);



?>