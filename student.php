<?php 

class Student
{ 
 
	public $conn;

	function __construct()
	{
		$serverName="localhost";
		$username="root";
		$password="";
		$dbName="cbt";
		$this->conn = new mysqli($serverName,$username,$password,$dbName);
		if($this->conn->connect_error){
			die('error connecting to database');
		}
	}
	public function saveToDatabase($a,$b,$c,$d,$e){
		$this->statement = $this->conn->prepare("INSERT INTO students(firstName,lastName,phoneNo,department,email) VALUES(?,?,?,?,?)");
		$this->statement->bind_param('sssss',$a,$b,$c,$d,$e);
		$this->statement->execute();
		if($this->statement){
 			echo json_encode("details upload successfully");
 		}else{
 			die ("something has wrong somewhere");
 		}
	}
		// public function fetchAllStudent($email){
 	// 	 $result=mysqli_query($this->conn,"SELECT  firstName,lastName,phoneNo,department FROM students WHERE email ='$email'");
 	// 	 $output = mysqli_fetch_assoc($result); 
 	// 	 return  json_encode( $output);
 		
 	// }
 
}

 ?>