<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
        
    }
    
    function index() {
        $this->view->msg = "<p>This page doesn't exist.</p>";
        $this->view->render("error/index");
    }

}
?>
