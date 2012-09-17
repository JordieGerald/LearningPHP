<?php

class View {

    function __construct() {
        //echo 'This is the view<br />';
    }
    
    public function render($name) {
        require 'views/header.php';
        // figure out a neater way with the below logic...
        require 'views/navigation_begin.php';
        
        if ($name == "index") {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        echo "<a href='index'>Home</a></li>";
        if ($name == "help") {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        echo "<a href='help'>Help</a></li>";
        if ($name == "login") {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        echo "<a href='login'>Login</a></li>";
        
        require 'views/navigation_end.php';
        
        require 'views/' . $name . '.php';
        require 'views/footer.php';
    }

}
?>
