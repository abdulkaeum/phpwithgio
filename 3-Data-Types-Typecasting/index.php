<?php

//> PHP is dynamically/weakly typed language; you do not need to defined the type of your vars

//> 10 primitive types

    // 4 scaler
        # bool - true / false
        $completed = true;
        # int - whole numbers
        # float - decimal numbers
        # string - 'hello world'

    // 4 compound types
        # array - [q, 1, [], 0.1, 'x', true]
        # object
        # callable
        # iterable

    // special types
        # resouce
        # null

//> return type
    echo gettype($completed); // 1
    
    var_dump($completed);

    print_r($completed);

//> Type hinting, coersion, strict types, typecasting
    /*
    PHP dynamically assigns the data type for you.

    It uses type coersion '2' = 2
    
    You can enable strict type 
        e.g. you can't pass string to a int number

    You can type hint int $x;

    typecasting (int) '5'
    */

//> check if number
 
    // if not number
    is_nan(2); // bool
    // type
    is_int(2); //bool
    // number or numeric string
    is_numeric(); // bool

//> Heredoc like JS ``
$x = 1;
$y = 2;
$text = <<<TEXT
Line 1 $x
<p>Line 2 $y</p>
Line 3 ' "
TEXT;

//> NULL - set a default value

$x = null; // print blank
var_dump($x); // NULL data type
is_null($x); // bool
unset($x);
var_dump($x); // NULL data type
?>