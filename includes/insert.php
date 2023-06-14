<?php

include_once 'includes/intro.php';

$email=$_POST['email'];

$sql = "INSERT INTO emailtable(Address) VALUES ('$email');";

mysql_query($dbconnection,$sql);
header("Location: ../index.html?signup=success");
