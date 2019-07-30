<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年7月30日 上午11:14:42
 * @link      git@github.com:yuanmingtao/l1.git
 */

// var_dump(json_decode(file_get_contents("php://input"), true));

$words = array('grime', 'dirt', 'grease');
$wordData = array();
foreach ($words as $word) {
    $replacement = array_fill(0, mb_strlen($word),'*');
    $wordData[$word] = implode('', $replacement);
}

$bad = array_keys($wordData);
$good = array_values($wordData);

var_dump($bad);
var_dump($good);