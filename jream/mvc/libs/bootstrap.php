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
            $controller->index();
            return false; // so the rest of the code below won't execute
        }
        
        $file = 'controllers/' . $url[0] . '.php';
        
        if (file_exists($file)) {
            require $file;
        } else {
            $this->error();
        }
        $controller = new $url[0];
        
        // calling methods 
        // BUG: Fatal error if one tries to load a page that isn't index, 
        // help or login
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }
    
    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }
}

?>
