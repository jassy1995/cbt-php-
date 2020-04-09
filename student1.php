<?php 
require "student.php";
$_POST = json_decode(file_get_contents('php://input'),true);
$a = $_POST['firstName'];
$b = $_POST['lastName'];
$c = $_POST['phoneNo'];
$d = $_POST['department'];
$e = $_POST['email'];
header("Access-Control-Allow-Origin: *");
header("Connection:Keep-alive");
$anyName = new Student;
$anyName->saveToDatabase($a,$b,$c,$d,$e);
 ?>