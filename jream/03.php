<?php

// PHP OOP Tutorial 3 | Scope & Calculator
// jream.com

class Calc
{
    public $input;
    public $input2;
    private $output;
    
    function setInput($int)
    {
        $this->input = (int) $int;
    }
    
    function setInput2($int)
    {
        $this->input2 = (int) $int;
    }
    
    function calculate()
    {
        $this->output = $this->input * $this->input2;
    }
    
    function getResult()
    {
        return $this->output;
    }
}

$calc = new Calc();
$calc->setInput(5);
$calc->setInput2(22);
$calc->calculate();
echo $calc->getResult();
// $calc->output; // due to its private property, it cannot be used like this.

?>
