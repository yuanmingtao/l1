<?php
require __DIR__ . '/vendor/autoload.php';
/** 
 * @author Joe.C
 * main execute file
 */
session_start();
if (!isset($_SESSION['execution']))
{
    $_SESSION['execution']['times'] = 0;
    $_SESSION['execution']['time'] = 0;
}
final class main
{
     function run()
    {
        $i = 0;
        $input = array();
        $input[0] = 0;
        if (intval($_SESSION['execution']['times']) == 0)
            echo "0"." ";
        while($i++ < 1000)
        {
            $input[$i] = rand(10,99);
            if (intval($_SESSION['execution']['times']) == 0)
                echo $input[$i]." ";
        }
//         (new datastruct\DirectInsertOrder)->alogrithm($input);
        (new datastruct\ShellInsertOrder)->alogrithm($input);
//         var_dump($input);
    }
}
$i = 0;
while($i++ < 10)
    (new main())->run();

echo("<br />+--------------average execution time-----+<br />");
echo doubleval($_SESSION['execution']['time'])/10;
echo("s<br />+--------------------------------------------+<br />");
$_SESSION['execution']['times'] = 0;
$_SESSION['execution']['time'] = 0;

?>