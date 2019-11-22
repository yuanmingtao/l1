<?php
/**
 * Just for learning not commerical
 * 测试pdo和mysqli的执行效率
 * 
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年9月11日 下午4:50:23
 * @link      git@github.com:yuanmingtao/l1.git
 */
set_time_limit(0);//这一句很重要，php默认响应时间为30秒，如果超过就返回错误。
$begiontime=microtime(true);
for($i=0;$i<100;$i++) {
    $pdo = new PDO("mysql:host=localhost;dbname=books", 'root', 'Li42uf03', array(PDO::ATTR_PERSISTENT => true));
}
$endtime=microtime(true);
$times=$endtime-$begiontime;

$btime=microtime(true);
for($j=0;$j<100;$j++) {
    $conn = mysqli_connect('localhost', 'root', 'Li42uf03');
    mysqli_select_db($conn, 'books');
}
$etime=microtime(true);
$times2=$etime-$btime;

echo $times;
echo "<br/>";
echo $times2;