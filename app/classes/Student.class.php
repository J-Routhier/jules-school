<?php

//student class
Class Student{
	
	public int 	  $id;
	public String $firstName;
	public String $lastName;
	public String $email;
	public String $dob;
	public String $gender;
	public float  $grades;
	public float  $avgGrade;
	public bool   $obsolete;
	
	public String $fullName;
	public String $gradePercent;
	public String $avgPercent;

	//constructor
	public function __construct($array){

		$this->id 		 = $array['id'];
		$this->firstName = $array['firstName'];
		$this->lastName  = $array['lastName'];
		$this->email 	 = $array['email'];
		$this->dob  	 = $array['dob'];
		$this->gender  	 = $array['gender'];
		$this->grades    = $array['grades'];
		$this->avgGrade  = $array['avgGrade'];
		$this->obsolete	 = $array['obsolete'];

		$this->fullName     = $this->firstName . " " . $this->lastName;
		$this->gradePercent = (strlen($this->grades) == 3? "0" : "") . $this->grades . "%"; 
		$this->avgPercent   = (strlen($this->avgGrade) == 3? "0" : "") . $this->avgGrade . "%"; 


	}

	// function to return an empty student
	public static function emptyObj(){
		$student = new Student( [	'id' => -1, 
									'firstName' => "", 
									'lastName' => "", 
									'email' => "", 
									'dob' => "", 
									'gender' => "", 
									'grades' => 0, 
									'avgGrade' => 0, 
									'obsolete' => 0]);

		return $student;

	}

};

?>