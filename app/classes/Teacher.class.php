<?php

//teacher class
Class Teacher{
	
	public int    $id;
	public String $firstName;
	public String $lastName;
	public String $email;
	public String $dob;
	public String $gender;
	public String $tenor;
	public String $specialty;
	public String $cv;
	public bool   $obsolete;

	public String $fullName;

	//constructor
	function __construct($array){

		$this->id 		 = $array['id'];
		$this->firstName = $array['firstName'];
		$this->lastName  = $array['lastName'];
		$this->email 	 = $array['email'];
		$this->dob  	 = $array['dob'];
		$this->gender  	 = $array['gender'];
		$this->tenor     = $array['tenor'];
		$this->specialty = $array['specialty'];
		$this->cv	 	 = $array['cv'];
		$this->obsolete	 = $array['obsolete'];

		$this->fullName  = $this->firstName . " " . $this->lastName;

	}

	// function to return an empty teacher
	public static function emptyObj(){
		$teacher = new Teacher	( [	'id' => -1, 
									'firstName' => "", 
									'lastName' => "", 
									'email' => "", 
									'dob' => "", 
									'gender' => "", 
									'tenor' => "", 
									'specialty' => "", 
									'cv' => "",
									'obsolete' => 0]);

		return $teacher;

	}

};

?>