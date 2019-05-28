<?php

/**
 * Just for learning not commerical
 *
 * @author    Joe.Chan<cshujun21625@gmail.com>
 * @date      2019年5月21日 下午1:59:02
 * @link      git@github.com:yuanmingtao/l1.git
 */

/*
The type of a variable is not usually set by the programmer; 
rather, it is decided at runtime by PHP depending on the context 
in which that variable is used. */


// ten primitive types

// four scalar types
//-------------------------

// boolean
// integer
// float
// string


// four compound types
//-------------------------

// array
// object
// callable 
// iterable

//two special types
//------------------------------
// resource
// NULL


//pseudo-types
// mixed
// number
// callback
// array|object
// void

$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool).PHP_EOL; // prints out:  boolean
echo gettype($a_str).PHP_EOL;  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
    echo $an_int.PHP_EOL;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool".PHP_EOL;
}














