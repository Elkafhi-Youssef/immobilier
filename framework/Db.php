<?php

    /**
	 * 
     * class : Db 
     * core class to hundel database
     * 
     */

    class  Db{

		private $host_name = DB_HOST;
		private $user_name = DB_USER;
		private $passwd = DB_PASSWD;
		private $db_name = DB_NAME;
		private $pdo;
		private $sth;
		
		/**
		 * 
		 * Constructor
		 * @return null
		 * 
		 */

		function __construct(){
			try{
				$this->pdo = new PDO("mysql:host=$this->host_name;dbname=$this->db_name",$this->user_name,$this->passwd);
			}catch(PDOExeption $exp){
				die($exp->getMessage());
			}
		}

		/**
		 * 
		 * Prepare query and asign it to $sth property
		 * 
		 * @param array
		 * @return void
		 * 
		 */
		
		public function prepareQuery($query){
			$this->sth = $this->pdo->prepare($query);
		}	

		/**
		 * 
		 * Bind given values and execute
		 * 
		 * @param array $values to bind
		 * @return void
		 * 
		 */

		public function bindValues($values = []){
			$num_params = count($values);
			for ($i=0; $i < $num_params; $i++) { 
				$this->sth->bindValue($i+1,$values[$i]);
			}
		}

		/**
		 * Execute 
		 * @param array
		 */

		public function execute($values = []){
			$this->bindValues($values);
			return $this->sth->execute();
		}

		/**
		 * 
		 * Get result 
		 * 
		 * @param integer  PDO::FETCH_ASSOC | PDO::FETCH_OBJ | PDO::FETCH_COLUMN | ...
		 * @return object|array| ... depending on the given param
		 * 
		 */

		public function getResult($type = PDO::FETCH_ASSOC){
			return $this->sth->fetchAll($type);
		}

		/**
		 * 
		 * Get one row
		 * @return object
		 * 
		 */

		public function getRow(){
			return $this->fetch(PDO::FETCH_ASSOC);
		}

		/**
		 * get numbre of rows
		 * @return integer
		 */
		
		public function getNumRows(){
			return $this->sth->rowCount();
		}

		
	}
	
