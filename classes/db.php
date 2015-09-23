<?php
session_start();
class Database
	{
		public $host="localhost";
		public $user="root";
		public $password="";
		public $database="contentuploader";
		public $connection;
		


//This will connect to the database
function connect()
		{
			try{
				$this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database);
			}
			catch(Exception $e){
				echo "Caught exception :",$e->getMessage(),"\n";
			}

		}
//inseting the query
		function insertquery($insertQuery)
		{	
			return mysqli_query($this->connection,$insertQuery) or die("errors");
		}

		function selectdata($selectQuery)
		{
			return mysqli_query($this->connection,$selectQuery);
		}
	}

?>
