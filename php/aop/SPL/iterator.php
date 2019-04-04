<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年4月4日 下午3:59:27
 * @link      https://github.com/yuanmingtao/
 */

#iterator_apply
//对迭代器中的每个元素执行回调函数,回调函数须返回true，保证顺序执行下去
//返回迭代器中元素数目

#iterator_count 迭代器数目

#iterator_to_array 迭代器转为数组/关联数组

function print_caps(Iterator $iterator) {
    echo strtoupper($iterator->current()) . "\n";
    return TRUE;
}

$it = new ArrayIterator(array("Apples", "Bananas", "Cherries"));
$it2 = new ArrayIterator(array("a" => "Apples", "B" => "Bananas", "C" => "Cherries"));
var_dump(iterator_apply($it, "print_caps", array($it)));

$iterator = new ArrayIterator(array('recipe'=>'pancakes', 'egg', 'milk', 'flour'));
var_dump(iterator_count($iterator));

var_dump(iterator_to_array($it2 ,false));