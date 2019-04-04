<?php

/**
 * This file is practice functions.
 * @author Joe.Chan
 *  2018-12-19 10:20 $
*/

function foo ($name)
{
    class A{
        function __construct($name)
        {
            echo "welcome $name".PHP_EOL;
        }
        
        function __toString()
        {
            return  "A";
        }
        
        function smallTalk()
        {
            echo "test".PHP_EOL;
        }
    }
    
    return new A($name);
}


$t = foo("Joe");
$t->test();
