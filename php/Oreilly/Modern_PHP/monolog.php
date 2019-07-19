<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月18日 上午10:40:52
 * @link      git@github.com:yuanmingtao/l1.git
 */
require '../../../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//Prepare logger
$log = new Logger('myApp');
$log->pushHandler(new StreamHandler('logs/development.log'), Logger::DEBUG);
$log->pushHandler(new StreamHandler('logs/production.log'), Logger::WARNING);

//Use logger
$log->debug("This is a debug message");
$log->warn('This is a warning message');