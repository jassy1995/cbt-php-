<?php 
require "saveRecord.php";
$_POST = json_decode(file_get_contents('php://input'),true);
$a = $_POST['mathScore'];
$b = $_POST['phyScore'];
$c = $_POST['chmScore'];
$d = $_POST['bioScore'];
$e = $_POST['govScore'];
$f = $_POST['totalScore'];
$g = $_POST['candidateId'];
header("Access-Control-Allow-Origin: *");
header("Connection:Keep-alive");
$anyName = new Student;
$anyName->saveToDatabase($a,$b,$c,$d,$e,$f,$g);
 ?>