<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年9月17日 下午4:48:05
 * @link      git@github.com:yuanmingtao/l1.git
 */


//Register your exception handler
set_exception_handler(function(Exception $ex){
    //Handle and log exception
    echo $ex->getMessage();
});

try {
throw new PDOException("test PDO", 111);
} catch(InvalidArgumentException $ex) {
    echo $ex->getMessage();
}

//Restore previous exception handler
restore_error_handler();