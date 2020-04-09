<?php 
require "record.php";
$_GET = json_decode(file_get_contents("php://input"),true);
$candidateId = $_GET['candidateId'];
header("Access-Control-Allow-Origin: *");
header("Connection:Keep-alive");
$newstudent = new Student;
$newstudent->fetchAllStudent($candidateId);

 ?>
