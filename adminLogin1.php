<?php
 class Student
 {
 	public $con;
 	function __construct()
 	{
 	$this->con =mysqli_connect("localhost","root","","cbt");
 		if($this->con){
 		
 		}
 		
 		else{
 			die("failure");
 		}
 	}
 	public function fetchAllStudent($email){
 		 $result=mysqli_query($this->con,"SELECT  firstName,lastName,phoneNo,department FROM admins WHERE email ='$email' 
");
 		 $output = mysqli_fetch_assoc($result); 
 		 if ($output) {
 		 	echo  json_encode("success");
 		 }
 		 else{
 		 	echo  json_encode("invalid email");
 		 }
 		
 	}
 }
 ?>
