<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年9月17日 下午5:16:19
 * @link      git@github.com:yuanmingtao/l1.git
 */


//Production mode

// ; DO NOT display errors
// display_startup_errors = Off
// display_errors = Off
// ; Report all errors EXCEPT notices
// www.it-ebooks.info
// error_reporting = E_ALL & ~E_NOTICE
// ; Turn on error logging
// log_errors = On


//Development mode

// ; Display errors
// display_startup_errors = On
// display_errors = On
// ; Report all errors
// error_reporting = -1
// ; Turn on error logging
// log_errors = On
error_reporting(E_ALL);

// abstract  class A{
//     static abstract function test($errno, $errstr, $errfile, $errline);
// }

// class B extends Exception{
//     static  function test($errno, $errstr, $errfile, $errline) {
//         echo $errno;
//     }
// }

// set_error_handler(array("B", "test"), E_ALL); 

$res2 = set_error_handler(function($errno, $errstr, $errfile, $errline) {
    //Handle error
    echo $errno.$errstr.$errfile.$errline.PHP_EOL;
    return false;
});

// var_dump($res2);


//Register error handler
set_error_handler(function($errno, $errstr, $errfile, $errline){
    if(! (error_reporting() & $errno)){
        //Error is not specified in the error_reporting
        //setting, so we ignore it.
        return;
   }
    throw new\ErrorException($errstr, $errno, 0, $errfile, $errline);
});

echo 5 / 0;

//Restore previous error handler
restore_error_handler();

