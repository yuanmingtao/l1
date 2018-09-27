<?php
namespace datastruct;

/**
 *
 * @author Joe.C
 *        
 */
final class DirectInsertOrder implements sort
{

    /**
     * (non-PHPdoc)
     *
     * @see \datastruct\sort::alogrithm()
     *
     */
    public  function alogrithm(&$input)
    {
        $start = microtime();
        $i = 0;
        $j = 0;
        for ($i = 2; $i <= count($input) - 1; $i++)
        {
            $input[0] =  $input[$i];
            for ($j = $i - 1; $input[0] < $input[$j]; $j--)
                $input[$j+1] = $input[$j];
            $input[$j + 1] = $input[0];
        }
        $end = microtime();
        list($msec, $sec) =  explode(" ", $start);
        list($msec1, $sec1) =  explode(" ", $end);
        if (intval($_SESSION['execution']['times']) == 0)
            
        echo("<br />--------------execution time------------------<br />");
        $mdist =  doubleval($msec1) - doubleval($msec);
        $sdist =  doubleval($sec1)  - doubleval($sec);
        echo $sdist + $mdist;
        echo("s<br />");
        
//         return microtime(true) - $time;
        $this->store($sdist + $mdist);
    }
    function store($executeTime)
    {
        $_SESSION['execution']['times'] = intval($_SESSION['execution']['times']) + 1;
        $_SESSION['execution']['time']  = doubleval($_SESSION['execution']['time']) + $executeTime;
    }
}