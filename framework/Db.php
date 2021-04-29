<?php

    /**
     * class : Db 
     * core class to hundel database
     * 
     */

    class Db{

		private $host_name = DB_HOST;
		private $user_name = DB_USER;
		private $passwd = DB_PASSWD;
		private $db_name = DB_NAME;
		private $pdo;
			
		function __construct(){
			try{
				$this->pdo = new PDO("mysql:host=$this->host_name;dbname=$this->db_name",$this->user_name,$this->passwd);
			}catch(PDOExeption $exp){
				die($exp->getMessage());
			}
			echo "-> Db class instantiated...";

		}
	
	}
	
