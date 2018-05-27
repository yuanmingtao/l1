<?php

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