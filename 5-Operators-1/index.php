<?php

// casting a string number
    $a = '10'; // string(2) "10
    +$a; // int(10)

// concat
    $b = 'a' . 'b';
    $b .= $b;

// spaceship op
    var_dump($a <=> $b);
    // if = returns 0
    // if < returns -1
    // if > returns 1

// ??
    // checks to see if a value is NULL
    $c ?? 'hello'; // hello

// short circuiting
    // || returns the first true value
    // && returns the first false value