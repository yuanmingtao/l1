<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月19日 上午11:25:33
 * @link      git@github.com:yuanmingtao/l1.git
 */

#静态延迟绑定

class StaticBind
{
    public function __construct()
    {
        echo "definition" . PHP_EOL;
    }
    
    public static function generate($action)
    {
        new static($action);
    }
}

class  ImpleStaticBind extends StaticBind
{
    public function __construct($action)
    {
        echo "implement $action" . PHP_EOL;
    }
}

// will output implement TEST
ImpleStaticBind::generate('TEST');
