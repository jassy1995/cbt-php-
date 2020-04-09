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
	public function saveToDatabase($a,$b,$c,$d,$e,$f,$g){
		$this->statement = $this->conn->prepare("INSERT INTO studentrecords(mathScore,phyScore,chmScore,bioScore,govScore,totalScore, candidateId) VALUES(?,?,?,?,?,?,?)");
		$this->statement->bind_param('iiiiiii',$a,$b,$c,$d,$e,$f,$g);
		$this->statement->execute();
		if($this->statement){
 			echo json_encode("details upload successfully");
 		}else{
 			die ("something has wrong somewhere");
 		}
	}
		
 
}

 ?>