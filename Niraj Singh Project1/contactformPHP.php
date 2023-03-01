<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$mobile = $_POST['mobile'];

$conn = mysqli_connect("localhost", "root", "", "project1") or die("connection failed");
$sql = "INSERT INTO contact_us(name, mobile, email, msg) VALUES ('{$name}','{$mobile}','{$email}','{$msg}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
mysqli_close($conn);
header("location: contact.php");
?>