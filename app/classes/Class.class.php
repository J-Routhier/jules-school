<?php

//class class
Class Class{
	
	public int 	  $id;
	public String $name;
	public String $description;
	public int 	  $teacherID;
	public float  $duration;
	public String $startDate;
	public String $startTime;
	public bool   $obsolete;

	//constructor
	function __construct(	$id,
							$name,
							$description,
							$teacherID,
							$duration,
							$startDate,
							$startTime,
							$obsolete){

		$this->id 			= $id;
		$this->name 		= $name;
		$this->description  = $description;
		$this->teacherID 	= $teacherID;
		$this->duration   	= $duration;
		$this->startDate  	= $startDate;
		$this->startTime 	= $startTime;
		$this->obsolete 	= $obsolete;

	}

};

?>