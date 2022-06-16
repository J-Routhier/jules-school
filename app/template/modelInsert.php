<?php 
//generic model


//function to get records
//
//@limit - number of records to return
//@startNum - how many records to skip before starting list
//@uri - current page
//
function getRecords($uri, $limit = 9999, $startNum = 0){

	$db = new Database();

	$query = "SELECT * FROM $uri
              WHERE obsolete = 0 
              LIMIT $limit 
              OFFSET $startNum";

    $result = $db->query($query);

    $itemList = [];
    $className = ucfirst(substr($uri, 0, -1));

    //create an array of row results to return
    while($row = mysqli_fetch_assoc($result)){
        $item = new $className($row);

        array_push($itemList, $item);        

    }
    
    $db->close();

    return $itemList;
   
}

//function to get the id that a new entry will be assigned upon inserting
//
//@uri - current page
//
function getNextID($uri){

    $db = new Database();

    $query = "SELECT MAX(id) 
              FROM $uri";
                   
    $result = $db->query($query);

    $row = mysqli_fetch_assoc($result);

    return intval($row['MAX(id)']) + 1;
   
}


//function to get a single record
//
//@id - object id
//@uri - current page
//
function getSingleRecord($uri, $id){

    $db = new Database();

    $query = "SELECT * FROM $uri 
              WHERE id = $id";
                   
    $result = $db->query($query);
    $className = ucfirst(substr($uri, 0, -1));
    
    //return student object if exists        
    if($row = mysqli_fetch_assoc($result)){

        $item = new $className($row);

        $db->close();

        return $item;

    }else{
        return null;

    }

}

//function to add a record
//
//@obj - object
//
function addRecord($uri, $item){

    $db = new Database();
    $itemStructure = DISPLAY_OBJ_DATA[$uri];

    $query = 'INSERT INTO ' . $uri . ' (';

        foreach($itemStructure as $row => $property ){

            $query .= $property[0] . ', ';

        }

        $query = substr($query, 0, -2);
        $query .= ') VALUES (';

        foreach($itemStructure as $row => $property){

            $query .= $property[0] . ' = "' . $item->{$property[0]} . '", ';

        }

        $query = substr($query, 0, -2);
        $query .= ')';
    
    $result = $db->query($query);

    $db->close();

    return $result;

}

//function to edit a record
//
//@uri - table name
//@object - object
//
function editRecord($uri, $item){

    $db = new Database();
    $itemStructure = DISPLAY_OBJ_DATA[$uri];

    $query = 'UPDATE ' . $uri . ' ' . 'SET ';

    foreach($itemStructure as $row => $property){
        $query .= $property[0] . ' = "' . $item->{$property[0]} . '", ';

   }

    $query = substr($query, 0, -2);
    $query .= ' WHERE id = ' . $item->id;

    $result = $db->query($query);

    $db->close();

    return $result;

}

//function to delete a record
//
//@id - object id
//
function deleteRecord($uri, $id){

    $db = new Database();

    $query = "UPDATE $uri
              SET obsolete = 1
              WHERE id = $id";
                   
    $result = $db->query($query);    

    $db->close();

    return $result;

}

?>