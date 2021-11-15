<?php
	class Database {
		private $host = "localhost";
		private $database_name = "findpro";
		private $username = "finpro_admin";
		private $password = "Finpro@2021";
		public $conn;
		public function getConnection(){
			$this->conn = null;
			try{
				$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
				$this->conn->exec("set names utf8");
			}catch(PDOException $exception){
				echo "Nao pode conectar na base de dados!!! " . $exception->getMessage();
			}
			return $this->conn;
			}
		}
?>
