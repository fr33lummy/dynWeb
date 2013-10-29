<?php

class DB{
	private static $_instance = null;
	private $pdo,$query,$result,$error = false;
	
	private function _construct(){
		try{
			//values uit db_config halen
			$this->pdo = new PDO();
			
			
		}catch(PDOException $e){
			die($e->getMessage());
	}
	
	public static function getInstance(){
		
		//singleton
		
		if(!isset(self::$_instance)){
			self::$_instance = new DB();
		}
		return self::$_instance;
	}
	
	public function error(){
		return $this->error;
	}
	
	public function query($sql,$params = array()){
		//voorkomt sql injecties
		if($this->query = $this->pdo->prepare($sql)){
			$i =1;
			if(count($params){
				foreach($params as $param){
					$this->query->bindValue(pos,$param);
					$i++;
				}
			}	
			
			if($this_query->execute()){
				$this-?results = $this->query->fetchAll(PDO::FETCH_OBJ);
			}else{
				$this->error = true;
			}
		}
		return $this;
	}
	
	private function action($action,$table,$where = array()){
		if(count($where) === 3){
			$operators = array('=','<','>','>=','<=');
			$field 		= $where[0];
			$operator 	= $where[1];
			$value 		= $where[2];
			
			if(in_array($operator,$operators)){
				$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
			
				if(!$this->query($sql,array($value))->error()){
					return $this;
				}
					
			}
			return false;
		}
	}
	
	//de action functie maakt de andere functies gemakkelijker om te lezen
	public function get($table,$where){
		return $this->action('SELECT', $table, $where);
	}
	
	public function delete(($table,$where){
		return $this->action('DELETE', $table, $where);
	}
	
	
	public function results(){
		return $this->results;
	}
	
	public function count(){
		return $this->count;
	}
}

?>
