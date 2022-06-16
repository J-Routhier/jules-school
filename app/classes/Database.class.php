<?php 

//database class
Class Database {

	protected $host 	= "localhost";
	protected $user 	= "root";
	protected $password = "";
	protected $dbname 	= "juleschool";
	protected $port 	= "3306";
	protected $autoConn = true;

	//constructor
	public function __construct(){


		// $this->host 	= $host;
		// $this->user 	= $user;
		// $this->password = $password;
		// $this->dbname 	= $dbname;
		// $this->port 	= $port;

		// //automatically opon if toggle set to true
		// if($autoConn){
			$this->open();

		// }
		
	}


	//open connection to database
	public function open(){
		$this->connection = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port);

	}


	//close connection to database
	public function close(){
		$this->connection->close();

	}


	//execute query
	//@paran $query - sql query
	//@return result of query
	public function query($query){
		return $this->connection->query($query);

	}


	//escape string
	//@param $string - parameter to escape
	//@return escaped string
	public function escape($string){
		return $this->connection->escape_string($string);

	}

};

?>