<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月30日 上午9:56:35
 * @link      git@github.com:yuanmingtao/l1.git
 */
#Iñtërnâtiônàlizætiøn  test multibyte character

echo mb_strlen("中国") . PHP_EOL;
echo strlen('中国') . PHP_EOL;

echo mb_detect_encoding("中国");
echo mb_convert_encoding("中国", "GBK");
htmlentities("");
html_entity_decode("");
htmlspecialchars("");
header('Content-Type:application/json;charset=utf-8');
# php.init default_charset = "utf-8";
#<meta charset="UTF-8">