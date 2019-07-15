<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月11日 下午4:59:21
 * @link      git@github.com:yuanmingtao/l1.git
 */

trait MyTrait
{
    public function t()
    {
        echo "t in MyTrait" . PHP_EOL;
        $this->b();
    }
}

class MyClass 
{
    use MyTrait;
//     public function b()
//     {
//         echo "ok";
//     }
}

$n = new MyClass();
$n->t();