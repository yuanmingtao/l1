<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年9月17日 下午3:16:09
 * @link      git@github.com:yuanmingtao/l1.git
 */

// Exception

/* $exception = new Exception('Danger, Will Robinson!', 100);

echo $exception->getCode();
echo $exception->getMessage();

throw $exception;
 */

// try{
//     $pdo=new PDO('mysql: //host=wrong_host; dbname=wrong_name' );
// }catch(PDOException $e) {
//     //Inspect the exception for logging
//     $code=$e->getCode();
//     $message= $e->getMessage();
//     //Display a nice message to the user
//     echo ' Something went wrong. Check back soon, please. ' ;
// //     exit;
// } catch (Exception $e) {
//     // Handle all other exceptions
//     echo "Caught generic exception";
// } finally {
//     // Always do this
//     echo "Always do this";
// }

// try {
    try { //this will bubble upward
        $pdo=new PDO('mysql: //host=wrong_host; dbname=wrong_name' );
    }catch(InvalidArgumentException $ex) {
        echo "uncaughted";
    }
// } catch(PDOException $ex) {
//     echo "PDO exception parent caughted!";
// }

echo "test";