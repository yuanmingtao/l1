<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月30日 上午11:08:38
 * @link      git@github.com:yuanmingtao/l1.git
 */
$requestBody = '{"username":"josh"}';
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => "Content-Type:application/json;charset=utf-8;\r\n" . 
                    "Content-Length:" . mb_strlen($requestBody), 
        'content' => $requestBody
    )
));

$response = file_get_contents('http://192.168.1.58/todo.php', false, $context);
var_dump($response);