<?php

include_once 'includes/intro.php';

$method=$_POST['payment'];
$name=$_POST['name'];
$accnumber=$_POST['accnumber'];
$id=$_POST['id'];
$gender=$_POST['sex'];
$amount=$_POST['amount'];

$sql = "INSERT INTO payment(method,name,account_number,coupon-id,gender,amount) VALUES ('$method','$name','$accnumber','$id','$gender','$amount');";

mysql_query($dbconnection,$sql);
header("Location: ../index.html?signup=success");