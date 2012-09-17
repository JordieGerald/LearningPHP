<?php

class View {

    function __construct() {
        //echo 'This is the view<br />';
    }
    
    public function render($name, $no_include = false) {
        
        if ($no_include == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            $this->render_navigation($name); // NOTE: have to prefix $this or it's out of scope?
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
    
    private function render_navigation($name) {
        // TODO: figure out a neater way to render the navigation
        // so a page is seen as active
        
        // get rid of the slashs at the far right of the url
        $name = explode('/', rtrim($name, '/'));
        $url = URL;
        
        require 'views/navigation_begin.php';
        
        if ($name[0] == "index") {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        echo "<a href='";
        echo $url;
        echo "index'>Home</a></li>";
        
        if ($name[0] == "help") {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        echo "<a href='";
        echo $url;
        echo "help'>Help</a></li>";
        
        if ($name[0] == "login") {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        echo "<a href='";
        echo $url;
        echo "login'>Login</a></li>";
        
        require 'views/navigation_end.php';
    }

}
?>
