<?php

//full path of files
define("PATH", __DIR__);

//include constant variables
include PATH . '/app/functions/variables.php';

//load classes
spl_autoload_register(function ($class_name) {
    include PATH . '/app/classes/' . $class_name . '.class.php';
});

//include functions
include PATH . '/app/functions/functions.php';

//include <head>
include PATH . '/app/template/head.php';

//include side navbar
include PATH . '/app/template/sidebar.php';

//include header
include PATH . '/app/template/header.php';

//function to include what is displayed in body of page
populatePage();

//include footer
include PATH . '/app/template/footer.php';

//insclude script
include PATH . '/assets/js/script.js';
