<?php
 class Student
 {
 	public $conn;
 	function __construct()
 	{
 	$this->conn =mysqli_connect("localhost","root","","cbt");
 		if($this->conn){

 		}
 		
 		else{
 			die("failure");
 		}
 	}
 	public function fetchAllStudent(){
 		 $results=mysqli_query($this->conn,"SELECT * FROM studentrecords");
 		 $outputs = mysqli_fetch_all($results, MYSQLI_ASSOC); 
 		 if ($outputs) {
 		 	 $data = ['success'=>true,'message'=>$outputs];
 		 	echo  json_encode($data);
 		 }
 		 else{
 		 	echo  json_encode(['sucess'=>false,'message'=>"Invalid Email"]);
 		 }
 		
 	}
 }
?>
