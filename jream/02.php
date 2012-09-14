<?php

// PHP OOP Tutorial 2 | Properties and $this
// jream.com


class Example
{
    public $item = "item blah time";
    public $name;
    
    function Sample()
    {
        $this->Test();
    }
    
    function Test()
    {
        echo "Test";
        echo $this->item;
        
        $regular = 500;
        echo $regular;
    }
    
    function Dog()
    {
        echo $regular; // won't work
    }

}

$e = new Example();
$e->Sample();
?>
