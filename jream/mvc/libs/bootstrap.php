<?php

class Bootstrap {

    function __construct() {
        // to load the default page without errors
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        
        // get rid of the slashs at the far right of the url
        $url = rtrim($url, '/');
        
        $url = explode('/', $url);
        
        // for debugging purposes
        //print_r($url);
        
        // to load the default page if 'index' is not explicitly in the url
        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            return false; // so the rest of the code below won't execute
        }
        
        $file = 'controllers/' . $url[0] . '.php';
        
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/error.php';
            $controller = new Error();
            return false; // so the rest of the code below won't execute
        }
        $controller = new $url[0];

        if (isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }

}

?>
