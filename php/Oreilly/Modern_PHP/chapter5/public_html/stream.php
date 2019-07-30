<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月30日 上午10:31:25
 * @link      git@github.com:yuanmingtao/l1.git
 */


//<scheme>://<target>

// $handle = fopen('hosts', 'rb');
// $handle = fopen('file://'.__DIR__.'/hosts', 'rb');

// #Filter 
// stream_filter_append($handle, 'string.toupper');
// $handle = fopen('php://temp', 'rb');
// $handle = fopen('php://memory', 'rb');
// $handle = fopen('php://stdin', 'rb');
// $handle = fopen('php://stdout', 'rb');

#filter/read=<filter_name>/resource=<scheme>: //<target>
$handle = fopen('php://filter/read=string.toupper/resource=hosts', 'rb');
while(feof($handle) !== true) {
    //Output all uppercase characters
    echo fgets($handle);
}

#直接读出或写入
// file();
// fpassthru();
fclose($handle);
