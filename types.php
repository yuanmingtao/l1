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
error_reporting(E_ALL);

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
// ];

// var_export($array2[2]);











