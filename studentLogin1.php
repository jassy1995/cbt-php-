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
 	public function fetchAllStudent($email){
 		 $results=mysqli_query($this->conn,
 		 	"SELECT studentId, firstName,lastName,phoneNo,department FROM students WHERE email = '$email' ");
 		 $outputs = mysqli_fetch_assoc($results); 
 		 if ($outputs) {

 		 	$studentId = $outputs['studentId']; 		 	
	 		$check = mysqli_query($this->conn,"SELECT mathScore,phyScore,chmScore,bioScore,govScore,totalScore FROM studentrecords WHERE candidateId = $studentId");
	 		$check = mysqli_fetch_assoc($check);
	 		$data=[];
	 		if($check) {
	 			$data = ['success'=>true,'message'=>$outputs,'done'=>true,'score'=>$check];
	 		} else{
	 		 	 $data = ['success'=>true,'message'=>$outputs, 'done'=>false, ];
	 		}
 		 	echo  json_encode($data);
 		 }
 		 else{
 		 	echo  json_encode(['sucess'=>false,'message'=>"Invalid Email"]);
 		 }
 		
 	}
 }
?>
 



