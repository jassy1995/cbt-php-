
<?php 
require "studentLogin1.php";
$_GET = json_decode(file_get_contents("php://input"),true);
$email = $_GET['email'];
header("Access-Control-Allow-Origin: *");
header("Connection:Keep-alive");
$newstudent = new Student;
$newstudent->fetchAllStudent($email);

 ?>


