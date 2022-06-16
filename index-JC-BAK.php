<?PHP


//include header
include 'app/template/header.php';


//to set global variables, need a function
function uri(){
    global $uri, $extra;
    $uri = $_SERVER['REQUEST_URI'];

}

//include model
include 'app/model/model.php';

//depending on uri, include different view pages
if(preg_match('/\/dashboard/', $uri)){
    
    $extra = str_replace("/view/dashboard", "", $uri);
    include 'app/view/dashboard.php';
    
}else if(preg_match('/\/user/', $uri)){
    $extra = str_replace("/view/user", "", $uri);
    include 'app/view/user.php';
    
}else if(preg_match('/\/logout/', $uri)){
    $extra = str_replace("/view/logout", "", $uri);
    include 'app/view/logout.php';
    
}else{
    echo "incorrect URL.  Please try again.";
    
}

//include controller
include 'app/controller/controller.php';


//include footer
include 'app/template/footer.php';

?>
