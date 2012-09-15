<?php

// PHP OOP Tutorial 4 | File Logger
// jream.com

require_once('04log.class.php');

$log = new Log();
//$log->write('test.txt');
echo "<pre>";
echo $log->read('test.txt');
echo "</pre>";
?>
