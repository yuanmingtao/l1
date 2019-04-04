<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年4月4日 下午4:25:57
 * @link      https://github.com/yuanmingtao/
 */

#spl_classes  所有模板类名称数组
#spl_object_hash  对象统一标识hash字符
#spl_autoload 检测include_path中的文件  若存在则自动引入改文件
#

// spl_autoload_register(function($class_name) {
//     echo "test";
// });
spl_autoload_extensions(".php");


//最先执行 
// spl_autoload("iii"); //默认扩展名 .php .inc
//spl_autoload没找到  执行spl_autoload_register
spl_autoload_register(function($class_name){
    echo 'I am a register autoload';
});
//若存在spl_autoload_register 则不执行 若不存在spl_autoload_register 则执行
function __autoload($class_name)
{
    echo "test";
}
// spl_autoload("iii", ".inc"); //默认扩展名 .php .inc
// spl_autoload("iii", ".php"); //默认扩展名 .php .inc

$t = new ttt();

$t->ok();

//类未定义时调用
// function __autoload($class_name)
// {
//     echo "ttttt";
// }

// function __autoload($class_name)
// {
//     require_once $class_name.'.php';
//     echo 'original'.PHP_EOL;
// }
// spl_autoload_register(function($className) {
//     echo 'anonymous callable function'.PHP_EOL;
// //     require_once $className.'.php';
// });

// var_dump(get_include_path());
// $a = new loader();
// spl_autoload("inter", ".ini");
// var_dump(spl_classes());
// $l = new loader();
// spl_autoload_call('loader');
// spl_autoload_call('inter');
// spl_autoload_extensions();