<?php

//user class
Class User{
	
	public int    $id;
	public String $firstName;
	public String $lastName;
	public String $email;
	public String $username;
	public String $password;
	public int 	  $access;
	public int 	  $obsolete

	//constructor
	function __construct(	$id,
							$firstName,
							$lastName,
							$email,
							$username,
							$password,
							$access,
							$obsolete{

		$this->id 		 = $id;
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
		$this->email 	 = $email;
		$this->username  = $username;
		$this->password  = $password;
		$this->access 	 = $access;
		$this->obsolete	 = $obsolete

	}


};

?>