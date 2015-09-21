<?php
	class Database
	{
		public $host;
		public $user;
		public $password;
		public $database;
		public $connection;
		public $id;

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

	}

?>
