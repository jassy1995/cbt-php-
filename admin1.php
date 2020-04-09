<?php 
include "admin.php";
$_POST = json_decode(file_get_contents('php://input'),true);
$ab = $_POST['firstName'];
$bc = $_POST['lastName'];
$cd = $_POST['phoneNo'];
$de = $_POST['department'];
$ef = $_POST['email'];
header("Access-Control-Allow-Origin: *");
header("Connection:Keep-alive");
$anything= new Student;
$anything->saveToDatabase($ab,$bc,$cd,$de,$ef);

 ?>