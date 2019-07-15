<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月11日 下午5:29:06
 * @link      git@github.com:yuanmingtao/l1.git
 */

#Generator
function myGenerator()
{
    yield 'value1';
//     return;
    yield 'value2';
//     return;
    yield 'value3';
}

foreach(myGenerator() as $yieldValue)
{
    echo $yieldValue, PHP_EOL;
}

// function makeRange($length)
// {
//     $dataset = [];
//     for ($i = 0; $i < $length; $i++)
//     {
//         $dataset[] = $i;
//     }
//     return $dataset;
// }

// $customRange = makeRange(1000000);
// foreach($customRange as $i)
// {
//     echo $i, PHP_EOL;
// }

$time = time();
function makeRange($length)
{
    for ($i = 0; $i < $length; $i++)
        yield $i;
}

foreach(makeRange(1000000) as $i)
    echo $i, PHP_EOL;
echo time() - $time;

function getRows($file)
{
    $handle = fopen($file, 'rb');
    
    if ($handle == false)
        throw new Exception();
    
    while(feof($handle) === false)
        yield fgetcsv($handle);
    
    fclose($handle);
}

foreach(getRows('data.csv') as $row)
{
    if (is_array($row))
    { 
        foreach($row as $k => $v)
            $row[$k] = iconv("gbk", "utf-8", $v);
    }
    
    print_r($row);
    echo PHP_EOL;
}
