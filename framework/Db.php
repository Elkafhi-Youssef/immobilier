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
		 * insert method
		 * @param string $table name
		 * @param array $attrs table attributes
		 * @param array $values to be inserted
		 * @return true|false
		 */

		 public function insert($table,$attrs = [],$values = []){
			 
			 $sqlAttrs = '';
			 $sqlValues = '';
			 $query = '';

			 // form sql attributes and values
			 foreach ($attrs as $key => $val) {
				 $sqlAttrs.="$val,";
				 $sqlValues.="?,";
			 }

			 // remove last comma
			 $sqlAttrs = rtrim($sqlAttrs,',');
			 $sqlValues = rtrim($sqlValues,',');
			 
			 // form sql query
			 $query = "INSERT INTO $table($sqlAttrs) VALUES($sqlValues)";

			 // Prepare query
			 $this->prepareQuery($query);
			 // Execute query
			 return $this->execute($values);
		 }

		 /**
		 * Select method
		 * @param string $table name
		 * @param array $attrs table attributes
		 * @param array $values to be selected
		 * @return array|false
		 */

		 public function select($table,$attrs = [],$values = [],$all = '*'){

			$query = '';
			$i = 0;
			// form sql attributes and values
			foreach ($attrs as $key => $attr) {
				$query.=" $attr LIKE ? AND";
				$i++;
			}

			// remove last 'AND' (!rtrim is case sensitive)
			$query = rtrim($query,'AND');
			
			// form sql query
			$query = "SELECT $all FROM $table WHERE $query";
			// Prepare query
			$this->prepareQuery($query);
			// Execute query
			return $this->execute($values) ? $this->getResult() : false;
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
	
