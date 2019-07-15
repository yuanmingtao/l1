<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月12日 上午11:59:35
 * @link      git@github.com:yuanmingtao/l1.git
 */
#Closures and anonymous
$closure = function($name) 
{
    return sprintf('Hello %s', $name);
};

echo $closure("Josh");

$numbersPlusOne = array_map(function($number) {
    return $number + 1;
}, [1, 2, 3]);

print_r($numbersPlusOne);

function incrementNumber ($number) {
    return $number + 1;
}

$numberPlusOne = array_map('incrementNumber', [1, 2, 3]);
print_r($numberPlusOne);

function enclosePerson($name) {
    return function ($doCommand) use($name) {
        return sprintf('%s, %s', $name, $doCommand);
    };
}

$clay = enclosePerson('Clay');
echo $clay('get me sweet tea!');

