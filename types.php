<?php
// var_dump((bool) "");        // bool(false)
// var_dump((bool) 1);         // bool(true)
// var_dump((bool) -2);        // bool(true)
// var_dump((bool) "foo");     // bool(true)
// var_dump((bool) 2.3e5);     // bool(true)
// var_dump((bool) array(12)); // bool(true)
// var_dump((bool) array());   // bool(false)
// var_dump((bool) "false");   // bool(true)

// $a = 1234; // decimal number
// print_r($a);
// $a = -123; // a negative number
// print_r($a);
// $a = 0127; // octal number (equivalent to 83 decimal)
// // print_r($a);
// // $a = 0xA0A0; // hexadecimal number (equivalent to 26 decimal)
// // print_r($a);
// // $a = 0b11111111; // binary number (equivalent to 255 decimal)
// // print_r($a);
// $large_number = 2147483647;
// var_dump(PHP_INT_SIZE);                     // int(9223372036854775807)
// var_dump($large_number);                     // int(9223372036854775807)

// echo (int) ( (0.1+0.7) * 10 ); // echoes 7!
// echo is_nan(NAN);

/*STRING*/
// echo 'You deleted C:\*.*?';
// echo 'You deleted C:\'*.*?';
// echo 'You can also have embedded newlines in
// strings this way as it is
// okay to do';

// echo 'This will not expand: \n a newline';
// echo 'Variables do not $expand $either';

// echo "\$";
// echo "01\v2345"; 垂直制表符
// echo "01\e345";
// echo "01\f345";
// echo "\60";  8进制格式表示字符串
// echo "\x30"; 16进制格式表示字符串
// echo "\u5e7f"; unicode格式表示字符串

// echo '\$a'; php5.1.1 \$a中\不打印


//Heredoc 
// class foo {
//     public static $bar = <<<_EOT
// bar
// _EOT;
// // Identifier must not be indented
// }

// $str = <<<EOD
// Example of string
// spanning multiple lines
// using heredoc syntax.
// EOD;

// class foo
// {
//     var $foo;
//     var $bar;
    
//     function __construct()
//     {
//         $this->foo = 'Foo';
//         $this->bar = array('Bar1', 'Bar2', 'Bar3');
//     }
// }

// $foo = new foo();
// $name = 'MyName';
// //Notice: Array to string coversion $foo->bar[1]
// echo <<<EOT
// My name is "$name". I am printing some $foo->foo.
// Now, I am printing some {$foo->bar[1]}.
// This should print a capital 'A': \x41
// EOT;

// var_dump(array(<<<EOD
// foobar!
// EOD
// ));

//PHP 5.3.0 the opening Heredoc identifier may optionally be enclosed in double quotes: 
// class test{
//     const BAR = <<<"EOT"
// test
// EOT;
// }
// echo test::BAR;

//Nowdoc
// $str = <<<'EOD'
// Example of string
// spanning multiple lines
// using nowdoc syntax.
// EOD;
// echo $str;

/* More complex example, with variables. */
// class foo
// {
//     public $foo;
//     public $bar;
    
//     function __construct()
//     {
//         $this->foo = 'Foo';
//         $this->bar = array('Bar1', 'Bar2', 'Bar3');
//     }
// }

// $foo = new foo();
// $name = 'MyName';

// echo <<<'EOT'
// My name is "$name". I am printing some $foo->foo.
// Now, I am printing some {$foo->bar[1]}.
// This should not print a capital 'A': \x41
// EOT;

// $juice = "apple";

// echo "He drank some $juice juice.".PHP_EOL;
// // Invalid. "s" is a valid character for a variable name, but the variable is $juice.
// echo "He drank some juice made of $juices.";
// // Valid. Explicitly specify the end of the variable name by enclosing it in braces:
// echo "He drank some juice made of ${juice}s.";

// $juices = array("apple", "orange", "koolaid1" => "purple");

// echo "He drank some $juices[0] juice.".PHP_EOL;
// echo "He drank some $juices[1] juice.".PHP_EOL;
// echo "He drank some $juices[koolaid1] juice.".PHP_EOL;

// class people {
//     public $john = "John Smith";
//     public $jane = "Jane Smith";
//     public $robert = "Robert Paulsen";
    
//     public $smith = "Smith";
// }

// $people = new people();

// echo "$people->john drank some $juices[0] juice.".PHP_EOL;
// echo "$people->john then said hello to $people->jane.".PHP_EOL;
// echo "$people->john's wife greeted $people->robert.".PHP_EOL;
// echo "$people->robert greeted the two $people->smiths."; // Won't work

//PHP 7.1.0 负数下标支持
// $string = 'string';
// echo "The character at index -2 is $string[-2].", PHP_EOL;
// $string[-3] = 'o';
// echo "Changing the character at index -3 to o gives $string.", PHP_EOL;

// Show all errors
// error_reporting(E_ALL);

// $great = 'fantastic';

// // Won't work, outputs: This is { fantastic}
// echo "This is { $great}".PHP_EOL;

// // Works, outputs: This is fantastic
// echo "This is {$great}".PHP_EOL;

// Works
// echo "This square is {$square->width}00 centimeters broad.";

// $arr['key'] = "demo";
// // Works, quoted keys only work using the curly brace syntax
// echo "This works: {$arr['key']}".PHP_EOL;
// echo "This works: $arr[key]";


// // Works
// echo "This works: {$arr[4][3]}";
// const foo = 'foo';
// $arr['foo'] = array();
// $arr['foo'][3] = 4;
// // This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// // In other words, it will still work, but only because PHP first looks for a
// // constant named foo; an error of level E_NOTICE (undefined constant) will be
// // thrown.
// echo "This is wrong: {$arr[foo][3]}";

// // Works. When using multi-dimensional arrays, always use braces around arrays
// // when inside of strings
// echo "This works: {$arr['foo'][3]}";

// // Works.
// echo "This works: " . $arr['foo'][3];
// class names{
//     public $name = "get";
// }
// // $namelist = new names();
// class A{
//     public $values;
//     public function __construct()
//     {
//         $this->values = array();
//         $this->values[0] = new names();
//     }
// }
// $obj = new A(); 
// echo "This works too: {$obj->values[0]->name}";
// $name = "open";
// $open = "abc";
// function getName()
// {
//     return "open";
// }

// class B
// {
//     function getName()
//     {
//         return "open";
//     }
// }
// $object = new B();

// echo "This is the value of the var named $name: {${$name}}";

// echo "This is the value of the var named by the return value of getName(): {${getName()}}";

// echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// // Won't work, outputs: This is the return value of getName(): {getName()}
// echo "This is the return value of getName(): ${getName()}";
// class foo {
//     var $bar = 'I am bar.';
// }

// $foo = new foo();
// $bar = 'bar';
// $baz = array('foo', 'bar', 'baz', 'quux');
// echo "{$foo->$bar}\n";
// echo "{$foo->{$baz[1]}}\n";

// $aa = "";
// // $aa[6.1] = "d"; // convert to 6 Notice
// // $aa[7] = "E";
// // $aa["sbc"] = "F"; // 's' cover up 0 element. Warning

// //PHP 7.1.0 throws a fatal error.formerly silently converted to an array.
// $aa[""] = 't';
// // echo strlen($aa);
// var_export($aa);
// $aa = 1;

// var_export($aa[0]);

// $fl = 3e13;
// serialize($fl);
// echo $fl;

// $foo = 1 + "10.5";                // $foo is float (11.5)
// $foo = 1 + "-1.3e3";              // $foo is float (-1299)
// $foo = 1 + "bob-1.3e3";           // $foo is integer (1)
// $foo = 1 + "bob3";                // $foo is integer (1)
// $foo = 1 + "10 Small Pigs";       // $foo is integer (11)
// $foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2)
// $foo = "10.0 pigs " + 1;          // $foo is float (11)
// $foo = "10.0 pigs " + 1.0;        // $foo is float (11)   

// echo "\$foo==$foo; type is " . gettype ($foo) .PHP_EOL;

// echo chr(65);
// echo utf8_encode("saaa");
// setlocale(LC_ALL, 'nl_NL');
// // echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));
// $loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
// echo "Preferred locale for german on this system is '$loc_de'";

// $loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');
// echo "Preferred locale for german on this system is '$loc_de'";


// $net   = "1234,56";
// $gross = "1,22" * $net;
// echo $net.PHP_EOL;
// echo $gross.PHP_EOL;

//ARRAY
// $array1 = array(
//     1 => "bar",
//     "bar" => "foo",
// );

// // as of PHP 5.4
// $array2 = [
//    "1" => "bar",
//    "bar" => "foo",
//    2.3 => "ok",
//    null => "null",
//     $array1 => "null",//Warning: Illegal offset type
//     2 => "not ok",//overwritten
//     true => "beer",//1
// ];

// var_export($array2[1]);
// $array = array(
//     "foo" => "bar",
//     42    => 24,
//     "multi" => array(
//         "dimensional" => array(
//             "array" => "foo"
//         )
//     )
// );

// var_dump($array["foo"]);
// var_dump($array{42});
// var_dump($array["multi"]["dimensional"]["array"]);

// function getArray() {
//     return array(1, 2, 3);
// }

// // on PHP 5.4
// $secondElement = getArray()[1];

// list(, $secondElement,$thirdElement) = getArray();

// echo $secondElement;
// echo $thirdElement;


// $array = ["t" => "5", "5"];
// if ($array[1] == NULL)
//     echo "test";

// $a = 1;
// if ($a[0] == NULL)
//     echo "NULL";
// $arr = ['5','4','k' => 't'];
// $arr = 'welcome';
// $arr[] = '';
// var_export($arr);

// $arr = array(5 => 1, 12 => 2);

// $arr[] = 56;    // This is the same as $arr[13] = 56;
// // at this point of the script

// $arr["x"] = 42; // This adds a new element to
// // the array with key "x"

// unset($arr[5]); // This removes the element from the array

// // unset($arr);    // This deletes the whole array

// var_export($arr);


// Create a simple array.
// $array = array(1, 2, 3, 4, 5);
// print_r($array);

// // Now delete every item, but leave the array itself intact:
// foreach ($array as $i => $value) {
//     unset($array[$i]);
// }
// // print_r($array);

// // // Append an item (note that the new key is 5, instead of 0).
// $array[] = 6;
// print_r($array);

// // Re-index:
// $array = array_values($array);
// $array[] = 7;
// print_r($array);

// $a = array(1 => 'one', 2 => 'two', 3 => 'three');
// unset($a[2]);
// var_export($a);
// /* will produce an array that would have been defined as
//  $a = array(1 => 'one', 3 => 'three');
//  and NOT
//  $a = array(1 => 'one', 2 =>'three');
//  */
// //reindex array
// $b = array_values($a);
// var_export($b);
// Now $b is array(0 => 'one', 1 =>'three')


// $foo[bar] = 'enemy';
// echo $foo[bar];
// ini_set('display_errors', true);
// ini_set('html_errors', false);
// // Simple array:
// $array = array(1, 2);
// $count = count($array);
// for ($i = 0; $i < $count; $i++) {
//     echo "\nChecking $i: \n";
//     echo "Bad: " . $array['$i'] . "\n";
//     echo "Good: " . $array[$i] . "\n";
//     echo "Bad: {$array['$i']}\n";
//     echo "Good: {$array[$i]}\n";
// }

// $arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
// print $arr['fruit'];  // apple
// print $arr['veggie']; // carrot

// // Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// // of an undefined constant named fruit
// //
// // Notice: Use of undefined constant fruit - assumed 'fruit' in...
// print $arr[fruit];    // apple

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
// define('fruit', 'veggie');

// // Notice the difference now
// print $arr['fruit'];  // apple
// print $arr[fruit];    // carrot

// // The following is okay, as it's inside a string. Constants are not looked for
// // within strings, so no E_NOTICE occurs here
// print "Hello $arr[fruit]";      // Hello apple

// // With one exception: braces surrounding arrays within strings allows constants
// // to be interpreted
// print "Hello {$arr[fruit]}";    // Hello carrot
// print "Hello {$arr['fruit']}";  // Hello apple

// // This will not work, and will result in a parse error, such as:
// // Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// // This of course applies to using superglobals in strings as well
// print "Hello $arr['fruit']";
// print "Hello $_GET['foo']";

// // Concatenation is another option
// print "Hello " . $arr[fruit]; // Hello apple

error_reporting(E_ALL);

// $a = 10;
// $a = (array)$a;
// var_export($a); //0 =>10

// class A{
//     const a = 10;
//     var $b = 20; //work
//     public $q = 10; //work
//     public static $p = 20;
//     protected function tt(){
        
//     }
//     private function bb(){
        
//     }
//     public function cc(){
        
//     }
// }
// // $t = new A();
// var_dump(((array)new A()));

// class A {
//     private $A = 10; // This will become '\0A\0A'
//     protected $t = 20;
// }

// class B extends A {
//     var $q = "1";
//     const ss = "ok";
//     static $p = "dd";
//     var $d = 1;
//     private $A; // This will become '\0B\0A'
//     public $AA = 80; // This will become 'AA'
// }
// $aa = (array)new B();
// // echo $aa["\0A\0A"];
// // // echo $aa["\0B\0A"]; //\0是空白符 不显示
// // echo $aa["AA"];
// var_export($aa);

// var_export((array)NULL);
// Array as (property-)map
// $map = array( 'version'    => 4,
//     'OS'         => 'Linux',
//     'lang'       => 'english',
//     'short_tags' => true
// );

// // strictly numerical keys
// $array = array( 7,
//     8,
//     0,
//     156,
//     -10
// );
// // this is the same as array(0 => 7, 1 => 8, ...)

// $switching = array(         10, // key = 0
//     5    =>  6,
//     3    =>  7,
//     'a'  =>  4,
//     11, // key = 6 (maximum of integer-indices was 5)
//     '8'  =>  2, // key = 8 (integer!)
//     '02' => 77, // key = '02'
//     0    => 12  // the value 10 will be overwritten by 12
// );

// var_export($switching);


// $colors = array('red', 'blue', 'green', 'yellow');

// foreach ($colors as $color) {
//     echo "Do you like $color?\n";
// }

// fill an array with all items from a directory
// $handle = opendir('.');
// while (false !== ($file = readdir($handle))) {
//     $files[] = $file;
// }
// closedir($handle); 
// $arr = [30,80,44,3,434,334,344,2332];
// sort($arr);
// rsort($arr);
// // print_r($files);
// var_export($arr);
// $arr1 = array(2, 3);
// $arr2 = $arr1;
// $arr2[] = 4; // $arr2 is changed,
// // $arr1 is still array(2, 3)
// // var_export($arr2);
// // var_export($arr1);

// $arr3 = &$arr1;
// $arr3[] = 4; // now $arr1 and $arr3 are the same
// var_export($arr1);
// var_export($arr3);


// function foo(iterable $iterable = []) {
//     foreach ($iterable as $value) {
//         echo $value;
//     }
// }

// function bar(): iterable {
//     return "a";
// }

// try {
//     bar();
// }catch(Exception $e)
// {
//     print_r($e->getMessage());
// }


// function gen():Generator {
//     yield 1;
//     yield 2;
//     yield 3;
// }


// echo gen();

// class A {
//   public  function test()
//    {
//        echo "FF";
//    }
// }

// $a = new A();
// $a = (object)$a;
// $a->test();

// $a = NULL;
// $a = (object)$a;
// var_export($a);

// $obj = (object)array('1' => 'foo');
// var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
// // var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
// // var_dump($obj); 
// echo $obj;

// $a = 10;
// $b = (unset)$a;
// echo $a;

// function f1($a, $b)
// {
//     if ($a == $b)
//     {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// class A
// {
//     function t($a, $b)
//     {
//         if ($a == $b)
//         {
//             return 0;
//         }
//         return ($a < $b) ? -1 : 1;
//     }
// }
// $arr = [1,5,3,2,5,6];
// $a = new A();
// usort($arr, '$a->t');
// var_dump($arr);

// $foo = "1";  // $foo is string (ASCII 49)

// $foo *= 2;   // $foo is now an integer (2)

// $foo = $foo * 1.3;  // $foo is now a float (2.6)

// $foo = 5 * "10 Little Piggies"; // $foo is integer (50)
// $foo = 5 * "10 Small Pigs";     // $foo is integer (50)

// var_dump($foo);

//Type Juggling
// echo (integer)"10 Little Piggies";
//(boolean)"0"; //false
//(boolean)""; //false
// $obj = (array)"10 Little Piggies";
// $obj = (unset)"10 Little Piggies";
// // $obj = (object)"10 Little Piggies";
// // var_dump($obj->scalar);
// var_dump($obj);
// $binary = (binary) "welcome";
// $binary = b"welcome";
// $binary = NULL;
// var_dump($binary);

// $binary = (binary) $string;
// $binary = b"\x32";
// var_dump($binary);

// if ("\400" === "\000")
// {
//     echo "test";
// }

// $str = b"\x30F"; 
// $str = b"\400"; //高位溢出 \000
// if ("\x31" === "1")
// echo "yes";

//constant [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]* always GBK
// define("中文","dimen");
// echo 中文;

// header('Content-type:text/plain; charset=utf-8');

// // function unichr($u) {
// //     return mb_convert_encoding('&#'.intval($u).';', 'UTF-8', 'HTML-ENTITIES');
// // }

// // for($i = hexdec("7f"); $i <= hexdec("ff"); $i++) echo unichr($i)."\n";

// // simple example

// function ñ(){
//     echo "I'm ok!";
// }

// ñ(); 












