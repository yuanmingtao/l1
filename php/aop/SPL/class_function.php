<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年4月4日 下午3:15:40
 * @link      https://github.com/yuanmingtao/
 */

//class_implements
//返回类自身和其父类实现的接口(含实现接口的继承接口）name associate array
//自动加载类


//class_parents
//返回父类的name associate array
//自动加载类

//class_uses
//返回自身(不含父类)使用的trait name associate array
//自动加载类



// array class_implements ( mixed $class [, bool $autoload = TRUE ] )
trait u{
    
}
trait h{
    
}
interface foo { }
interface jar{}
interface c extends jar{}
class father implements c{ use h;}
class bar extends father implements foo {}


class tu extends father {
    use u;
}

var_dump(class_uses(tu));
var_dump(class_implements("bar")); //类名   //5.1.0+
// var_dump(class_implements(bar)); //类名字面
// var_dump(class_implements(new bar)); //对象(类实例)

function __autoload($class_name) {
    require_once $class_name . '.php';
}
// use __autoload to load the 'loadeder' class
// print_r(class_implements('loader', true));

var_dump(class_parents('loader', true));
