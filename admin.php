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
	public function saveToDatabase($ab,$bc,$cd,$de,$ef){
		$this->statement = $this->conn->prepare("INSERT INTO admins(firstName,lastName,phoneNo,department,email) VALUES
			(?,?,?,?,?)");
		$this->statement->bind_param('sssss',$ab,$bc,$cd,$de,$ef);
		$this->statement->execute();
		if($this->statement){
 			echo json_encode ("details upload successfully");
 		}else{
 			die ("something has wrong somewhere");
 		}
		
	}
	

 
}

 ?>
