<?php
namespace datastruct;
use datastruct\sort;

/**
 *
 * @author Joe.C
 *        
 */
class ShellInsertOrder implements sort
{

    protected $total = 0;
    /**
     * (non-PHPdoc)
     *
     * @see \datastruct\sort::alogrithm()
     *
     */
    
    public function alogrithm(&$input)
    {
        
        $start = microtime();
        $i = 0;
        $j = 0;
        $k = 0;
        $dt = [300, 8, 1];
        for ($k = 0; $k < count($dt); $k++)
            for ($i = 2 * $dt[$k]; $i < count($input)/$dt[$k] * $dt[$k];)
            {
                $input[0] =  $input[$i];
                for ($j = $i - $dt[$k]; $input[0] < $input[$j]; $j = $j - $dt[$k])
                    $input[$j + $dt[$k]] = $input[$j];
                 $input[$j + $dt[$k]] = $input[0];
                 $i = $i + $dt[$k];
            }
        $end = microtime();
        
        list($msec, $sec) =  explode(" ", $start);
        list($msec1, $sec1) =  explode(" ", $end);
        if (intval($_SESSION['execution']['times']) == 0)
            echo("<br />+--------------execution time--------------+<br />");
        $mdist =  doubleval($msec1) - doubleval($msec);
        $sdist =  doubleval($sec1)  - doubleval($sec);
        echo $sdist + $mdist;   
        echo("s<br />");
        
        $this->store($sdist + $mdist);
    }
    function store($executeTime)
    {
        $_SESSION['execution']['times'] = intval($_SESSION['execution']['times']) + 1;
        $_SESSION['execution']['time']  = doubleval($_SESSION['execution']['time']) + $executeTime;
    }

}

