<?php
	
	class DATABASE{
		public $server = "localhost";
		public $user = "root";
		public $pass = "";
		public $db = "firstproject";

		public $con;
		public $error;

		public function __construct(){
			$this->connectDB();

		}

		private function connectDB(){
			$this->con = new mysqli($this->server,$this->user,$this->pass,$this->db); 
			$this->con->set_charset("utf8");

			if(!$this->con){
				$this->error = "Connection Failed";
				return false;
			}
		}

		public function run($query){
			$result = $this->con->query($query);
			return $result;
/*			if(($result->affected_rows) >0){
				return $result;
			}else{
				return false;
			}*/
		}
	}

 ?>