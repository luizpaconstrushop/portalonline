<?php
	class DB{
		public function conectar(){
			
			$host="us-cdbr-azure-southcentral-f.cloudapp.net";
			$user="bb1052e5ecb76d";
			$pass="8c1d55a9";
			$dbname="dbrepresentantes";
			
			$conexao=mysql_connect($host,$user,$pass);
			$selectdb=mysql_select_db($dbname);
			
			return $conexao;
			
		}
		
	}


?>