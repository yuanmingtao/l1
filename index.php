<?php

/**
 * JOE PHP
 * ============================================================================
 * Learn Composer L1
 * ============================================================================
 * $Author: joe $
 * $Id: index.php 1 2018-05-28 13:51:08Z joe $
*/
 // $loader = require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';

 // $log = new Monolog\Logger('name');
 // $log->pushHandler(new Monolog\Handler\StreamHandler('app.log',Monolog\Logger::WARNING));
 // $log->addWarning('Foo');
// var_dump($loader);
// $loader->addPsr4('Acme\\', __DIR__)
// $a = new Acme\App\Case;
$a = new Acme\Foo;
$a->o();

?>