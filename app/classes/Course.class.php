<?php

//course class
Class Course{
	
	public int 	  $id;
	public String $name;
	public String $description;
	public String $startDate;
	public String $endDate;
	public bool	  $obsolete;

	//constructor
	function __construct(	$id,
							$name,
							$description,
							$startDate,
							$endDate,
							$obsolete){

		$this->id 			= $id; 
		$this->name 		= $name;
		$this->description  = $description;
		$this->startDate  	= $startDate;
		$this->endDate 		= $endDate;
		$this->obsolete 	= $obsolete;

	}

};

?>