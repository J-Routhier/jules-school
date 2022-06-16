<?php

function get_location() {
    return explode("/", $_SERVER['REQUEST_URI']);
}

//getpath and variables from URI, and determine what includes to include on the page
function populatePage(){

    $uri = get_location();
    
    if($uri[1] == ""){
    	$thisPage = "dashboard.php";

    }else{
        $thisPage = $uri[1] . '.php';

    }
 
    if(
    	file_exists(PATH . '/app/model/' . $thisPage) &&
        file_exists(PATH . '/app/controller/' . $thisPage) &&
        file_exists(PATH . '/app/view/' . $thisPage)){

        include PATH . '/app/model/' . $thisPage;
        include PATH . '/app/controller/' . $thisPage;
        include PATH . '/app/view/' . $thisPage;
        
    }else{
        include PATH . '/assets/404.php';
        
    }
    
}


