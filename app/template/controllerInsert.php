<?php

  //variables to display data table
  $uri = explode("/", $_SERVER['REQUEST_URI']);

  $currentPage = $uri[1];
  $columns = TABLE_COLUMNS[$currentPage]; 
  $totalNumRecords = count(getRecords($currentPage));
  $numRecordsToDisplay = 20;
  $className = ucfirst(substr($currentPage, 0, -1));


  //check for POST actions
  if(isset($_POST['action'])){

    
    $currentObject = new $className($_POST);

    switch($_POST['action']){

      case 'add':

          addRecord($_POST['currentPage'], $currentObject);

      case 'edit':
          editRecord($_POST['currentPage'], $currentObject);

        break;

      case 'delete':
          
          $currentObject = getSingleRecord($currentPage, $_POST['id']);
          deleteRecord($_POST['currentPage'], $_POST['id']);

        break;

    }

    //reset currentobject
    $currentObject = null;

  }

  //checks for URI
  (isset($uri[2])) ? $actionFlag = $uri[2] : $actionFlag = "";

  switch ($actionFlag) {

    case 'add':

        $currentObject = $className::emptyObj();
        $currentObject->id = getNextID($currentPage);
        $contentToLoad = '/app/template/displayPanel.php';

      break;

    case 'view':
    case 'edit':
    case 'delete':

      //get id from the uri
      if(isset($uri[3]) && intval($uri[3]) > 0){
        $currentObject = getSingleRecord($currentPage, intval($uri[3]));

        if($currentObject){
          $contentToLoad = '/app/template/displayPanel.php';
            
        }else{          
          $contentToLoad = '/assets/404.php';
        
        }
      
      }else{
        $contentToLoad = '/assets/404.php';

      } 

      break;

    case 'confirm':
    
      $currentObject = getSingleRecord($currentPage, $_POST['id']);
      $contentToLoad = '/app/template/' . $currentPage . '.php';

      break;

    default:

      //pagination variable, uri[3] must be set, and must be more records to show
      (!isset($uri[3]) || (intval($uri[3]) - 1 > ($totalNumRecords / $numRecordsToDisplay))) ? $pagination = 0 : $pagination = intval($uri[3]) - 1;

      //get list of objects to be displayed
      $recordsList = getRecords($currentPage, $numRecordsToDisplay, $pagination * $numRecordsToDisplay);
      
      $contentToLoad = '/app/template/dataTable.php';
      break;
  }

?>