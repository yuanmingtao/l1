<?php

/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年9月17日 下午1:56:37
 * @link      git@github.com:yuanmingtao/l1.git
 */
header('Content-Type:application/json; charset=utf-8');

$v  = 'Iñtërnâtiônàlizætiøn';
echo mb_strlen($v) . PHP_EOL;
echo strlen($v) .PHP_EOL;

// var_dump(mb_list_encodings());
echo mb_detect_encoding($v, 'GBK, gb2312, GB18030, ISO-8859-1, ASCII, UTF-8', true).PHP_EOL;
// echo mb_convert_encoding($v,'gbk','utf-8') .PHP_EOL;


// htmlentities转换所有的html标记
// htmlspecialchars只格式化& 、’、 “、 <、> 这几个特殊符号。
// 使用htmlentities不指定编码的话遇到中文会乱码

$s = htmlentities("<br />");
echo $s .PHP_EOL;
echo html_entity_decode($s).PHP_EOL;
echo htmlspecialchars("<br />") .PHP_EOL;