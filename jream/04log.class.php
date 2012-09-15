<?php

// PHP OOP Tutorial 4 | File Logger & PHP doc commenting
// jream.com

class Log
{
    
/**
* @desc Writes to a file
* @param str $filename  The name of the existing file
* @param str $data      Data to be appended to the file, for writing only
*/
    
    public function write($filename, $data="")
    {
        if (!is_writable($filename))
            die('Change your CHMOD permissions to ' . $filename);
        
        /* When you add the above if statement though ... the attempt to 
        create it will fail; the program dies before you can try so. */
        
        $handle = fopen($filename, 'a');
        fwrite($handle, "\n" . $data); // have to be in double quotes to see the escape characters
        fclose($handle);
    }

/**
* @desc Reads an existing file
* @param str $filename  The name of the existing file
* @return str   Text of the file
*/
    public function read($filename)
    {
        if (!is_readable($filename))
            die('Change your CHMOD permissions to ' . $filename);
        
        $handle = fopen($filename, 'r');
        
        return file_get_contents($filename);
    }
    
}

?>
