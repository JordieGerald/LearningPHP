<?php
class Index extends Controller {

    function __construct() {
        parent::__construct();
        
    }
    
    function index() {
        echo '<p>INSIDE INDEX INDEX</p>';
        $this->view->render('index/index');
    }
    
    function details() {
        $this->view->render('index/index');
    }

}
?>
