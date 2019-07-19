<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月18日 上午10:48:41
 * @link      git@github.com:yuanmingtao/l1.git
 */

/*
 PSR-4: Autoloaders
--------------------------------
*
* An example of a project-specific implementation.
*
* After registering this autoload function with SPL, the following line
* would cause the function to attempt to load the \Oreilly\MordernPHP\TestAutoloader class
* from D:\git\l1\php\Oreilly\Modern_PHP/TestAutoloader.php:
* 
*      TestAutoloader::auto();
*       
* @param string $class The fully qualified class name.
* @return void
*/

namespace Oreilly\ModernPHP;

use Oreilly\ModernPHP\TestAutoloader;

spl_autoload_register(function ($class) {
    
    //project-specific namespace prefix
    $prefix = 'Oreilly\\ModernPHP\\';
    
    //base directory for the namepace prefix
    $base_dir = __DIR__ . '/';
    
    //does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        //no, move to the next registered autoloader
        return;
    }
    
    //get the relative class name
    $relative_class = substr($class, $len);
    
    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    //if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

TestAutoloader::auto();

 