<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月24日 上午11:09:19
 * @link      git@github.com:yuanmingtao/l1.git
 */

// 外部数据
// $_GET
// $_POST
// $_REQUEST
// $_COOKIE
// $argv
// php: //stdin
// php: //input
// file_get_contents()
// Remote databases
// Remote APIs
// Data from your clients

#不要使用正则表达式对html标记转义,表达式过于复杂,容易出错
#sanitize input, validate data, and escape output.
// $input = '<p><script>alert(\'You won the Nigerian lottery!\'); </script></p>';
#ENT_QUOTES 对单引号encode
// echo htmlentities($input,ENT_QUOTES, "UTF-8");


//==========Bad SQL===============
// $sql = sprintf(
//     ' UPDATE users SET password = "%s" WHERE id = %s' ,
//     $_POST[' password' ] ,
//     $_GET[' id' ]
// );



// POST /user id=1 HTTP/1. 1
// Content-Length:  17
// Content-Type:  application/x-www-form-urlencoded
// password=abc"; --  //--后面的sql将不会执行!!!!

#except letters, digits, and !#$%&’*+-/= ^_`{|}~@.[]
$email = 'johnexample.com';
$emailSafe = filter_var($email, FILTER_SANITIZE_EMAIL);
// echo $emailSafe;

$string = "\nIñtërnâtiônàlizætiøn\t";
#ascii < 32 > 127
$safeString = filter_var(
    $string, 
    FILTER_SANITIZE_STRING,
    FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);


$isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($isEmail);
// echo $safeString;
