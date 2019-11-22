<?php
/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年9月11日 下午5:05:22
 * @link      git@github.com:yuanmingtao/l1.git
 */
// set_time_limit(0);
// $begiontime=microtime(true);
// for($i=0;$i<1000;$i++) {
//     $pdo = new PDO("mysql:host=localhost;dbname=books", 'root', 'Li42uf03');
// }
// $endtime=microtime(true);
// $times=$endtime-$begiontime;
// echo $times;

set_time_limit(0);
$begiontime=microtime(true);
for($i=0;$i<1000;$i++) {
    $pdo = new PDO("mysql:host=localhost;dbname=books", 'root', 'Li42uf03', array(PDO::ATTR_PERSISTENT => true));
}
$endtime=microtime(true);
$times=$endtime-$begiontime;
echo $times;