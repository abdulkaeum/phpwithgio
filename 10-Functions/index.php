<?php

$z = 100;

// ommiting the return statement returns the function as NULL

// can declare functions anywhere before or after calling it as long as declared 

/*>> return type */

    // return type hint 
    function foo() : int {
        return 1;
    };

    function bar() : void {
    };

    // return nullable = type OR null
    function nullable() : ?int {
        return 1;
    };

    // return multiple type hint
    function multiple() : int|array {
        return 1;
    };

/*>> params hint */
    function params_hint(int|array $x) : int|array {
        return 1;
    };
    
/*>> default params ; must be at end of signature after any required ones */
    function default_params($x = 1) {
        return 1;
    };

/*>> spread op */
    function spread_op($a, $b, int ...$x){
        // $x = [3, 4]
    };

    
/*>> argument unpacking */
    $arr = [3, 4];
    
    spread_op(1, 2, ...$arr); // 3, 4#

/*>> named args  - essentially assigning values to args */
    // order doeas not matter
    // can just use the ones you need if many 

    function named_args($c , $d) {

    };

    named_args(c: 1, d: 5);

/*>> variable functions */

    $e = 'named_args';
    e();

/*>> check if callable */

    if(is_callable($e)){};

/*>> function exppressions */

    $function_exppression = function(){};
    $function_exppression();

/*>> use keyword - accessing outscope vars - only on anonymous */
    function () use ($z) {

    };

/*>> Callback functions */

    // passing a function as an arg to another
    // 1. add anonymous fn withthin the signature
    // 2. pass as an fn var
    // 2. give it the name of the fn as a string 

/*>> arrows functions */

    // returns the value of an expression you give it i.e expilicit return (no need for the return keyword)
    // usefull as an inline callback function 
    // can access outer scope vars only as values not by reference
    // does not except multiple line expressions i.e => {}


    fn() => 'hello world';
