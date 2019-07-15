<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月10日 下午5:18:43
 * @link      git@github.com:yuanmingtao/l1.git
 */
// namespace Oreilly\ModernPHP{
//     require 'preface.php';
//     use function china;
//     use const OK;
//     china();
//     echo OK;
// }

#PHP Framework Interop Group (PHP-FIG)
#PSR 4 autoloader standard

namespace Oreilly\ModernPHP;
class Foo
{
    public static function doSomething()
    {
        //Qualified class name inside another namespace
        $exception = new \Exception();
    }
}