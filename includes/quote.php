<?php

include_once 'includes/intro.php';

$email=$_POST['email'];
$name=$_POST['name'];

$sql = "INSERT INTO qoutetable(Address,FirstName) VALUES ('$email','$name');";

mysql_query($dbconnection,$sql);
header("Location: ../index.html?signup=success");