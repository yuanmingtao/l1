<?php

//Precedence

trait a{
    function sayHello()
    {
//         parent::sayHello();
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
    function sayHello()
    {
        parent::sayHello();
        echo "b";
    }
}
$b = new  b();
$b->sayHello();