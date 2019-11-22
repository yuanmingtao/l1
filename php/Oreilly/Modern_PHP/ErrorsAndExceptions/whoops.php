<?php
require_once '../../../../vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SwiftMailerHandler;

$whoops = new Whoops\Run;
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler);
$whoops->register();

$log = new Logger('L1');
$log->pushHandler(new StreamHandler('this.log', LOGGER::WARNING));

$transport = Swift_SmtpTransport::newInstance('smtp.163.com', 25)
             ->setUsername("cshujun21625")
             ->setPassword("");

$mailer = Swift_Mailer::newInstance($transport);
$message = Swift_Message::newInstance()
           ->setSubject('Website error')
           ->setFrom(array('cshujun21625@163.com'=> "Joe"))
           ->setTo(array("709197667@qq.com"));
$log->pushHandler(new SwiftMailerHandler($mailer, $message, Logger::CRITICAL));
$log->crit('The server is on fire!');