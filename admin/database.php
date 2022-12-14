<?PHP
	  class Database extends mysqli{

		function __construct($HOSTNAME,$HOST_USER,$HUSER_PSWD,$DATABASE){
			parent::__construct($HOSTNAME,$HOST_USER,$HUSER_PSWD,$DATABASE);
			}
		function fetch($feth){
			return $feth->fetch_array(MYSQLI_BOTH);
		}
		function num($rows){
			if($this->num_rows($rows)) throw new Exception("Database num_rows manager not valid, please verif and try again !");
			else return $this->num_rows($rows);
		}
		function mytables($db){
			if($this->list_table($db)) throw new Exception("Database list_table manager not valid, please verif and try again !");
			else return $this->list_table($db);
		}
		function create_table($table,$valeur,$primary){ 
		     $this->query("CREATE TABLE $table (id int not null auto_increment primary key, $valeur )");
		}
		function drop_table($table){
		    if(!$this->query("DROP TABLE $table ")) throw new Exception(" Cannot drop ".$table.", please verif database query manager and try again !");
		}
		function create_row($table,$row,$valeur){
		    if(!$this->query("ALTER TABLE $table ADD $row $valeur NOT NULL ")) throw new Exception("Cannot create ".$row." in ".$table.", please verif database query manager and try again");
		    
		}
		function drop_row($table,$row){
		    if(!$this->query("ALTER TABLE $table DROP $row ")) throw new Exception("Cannot drop ".$row." from ".$table.", please verif database query manager and try again !");
		    
		}
		function select($table,$row,$where = "",$limit = ""){
		     if($where != "") $where = "WHERE ".$where;
		     if(!$this->query("SELECT ".$row." FROM ".$table." ".$where." ".$limit)) throw new Exception("Cannot select ".$row." from ".$table.", please verif database query manager and try again !");
		     else return $this->query("SELECT ".$row." FROM ".$table." ".$where." ".$limit);
		}
		function insert($table,$rows,$valeurs,$limit = ""){
		     if(!$this->query("INSERT INTO ".$table." (".$rows.") VALUES (".$valeurs.") ".$limit)) throw new Exception(" Cannot execute insert method, please verif database query manager and try again !");
		     
		}
		function deletes($table,$where = "",$limit = ""){
			if($where != "") $where = "WHERE ".$where;
		      if(!$this->query("DELETE FROM $table ".$where." ".$limit)) throw new Exception(" Cannot execute delete method, please verif query manager !");
		      
		}
		function update($table,$valeurs,$where = "",$limit = ""){
			if($where != "") $where = " WHERE ".$where;
		    if(!$this->query("UPDATE $table SET $valeurs ".$where." ".$limit)) throw new Exception("cannot execute update method, please verif query manager !");
		    
		}
		// for security purpose 
		function secure($val, $type = ""){
			if($type == ""){ // for normale usage
				$val = $this->escape_string($val);
				return $val;
			}else if($type == "int"){ // for numeric usage 
				return intval($val);
			}
		}
	 }

?>