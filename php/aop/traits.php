<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年4月4日 下午1:19:24
 * @link      https://github.com/yuanmingtao/
 */

 /**
 * --------------------------------------------
 *  优先顺序
 * --------------------------------------------
 */
trait a{
    //override base method
    function sayHello()
    {
        parent::sayHello();
        echo 'world';
    }
}
class base {
    function sayHello()
    {
        echo "hello ";
    }
}

class b extends base
{
    use a;
    //alternate trait method
    function sayHello()
    {
        parent::sayHello();
        echo "b";
    }
}

/**
 * --------------------------------------------
 *  trait多继承                          
 * --------------------------------------------
 */

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo $this->sayHello().$this->sayWorld();
    }
}

/**
 * --------------------------------------------
 *  冲突方案
 * --------------------------------------------
 */

trait A1 {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B1 {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker
{
    use A1, B1 {
        B1::smallTalk insteadof A1;
        B1::bigTalk insteadof A1;
     }
}

class Aliased_Talker {
    use A1, B1 {
        B1::smallTalk insteadof A1;
        A1::bigTalk insteadof B1;
        B1::bigTalk as talk;
    }
}

/**
 * --------------------------------------------
 *  改变方法访问限制 
 * --------------------------------------------
 */

trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

// Change visibility of sayHello
class MyClass1 {
    use HelloWorld { sayHello as protected; }
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2 {
    use HelloWorld { sayHello as private myPrivateHello; }
}

/**
 * --------------------------------------------
 *  从其他trait组合trait 
 * --------------------------------------------
 */

trait Hello3 {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World3 {
    public function sayWorld() {
        echo 'World!';
    }
}

trait HelloWorld3 {
    use Hello3, World3;
}

class MyHelloWorld3 {
    use HelloWorld3;
}

/**
 * --------------------------------------------
 *  抽象成员
 * --------------------------------------------
 */
trait Hello1 {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld(); //此抽象方法可以去掉
}

class MyHelloWorld2 {
    private $world;
    use Hello1;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}

/**
 * --------------------------------------------
 *  静态成员
 * --------------------------------------------
 */

trait Counter {
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

trait StaticExample {
    public static function doSomething() {
        echo 'Doing something';
    }
}

class Example {
    use StaticExample;
}

/**
 * --------------------------------------------
 *  属性
 * --------------------------------------------
 */
trait PropertiesTrait {
    public $x = 1;
    public $same = true;
    public $different = false;
}

class PropertiesExample {
    use PropertiesTrait;
    
    //访问限制与初始值和trait 同名属性兼容 仅支持7.0+ <7.0 E_STRICT notice
    public $same = true; // Allowed as of PHP 7.0.0; E_STRICT notice formerly
    public $different = true; // Fatal error
}