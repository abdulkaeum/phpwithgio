<?php

//>> Array MAP
    // returns a new array for each passed element
    // passing more than one array will be re-index
    // passing NULL as the callback will build a combined array
    array_map(
        fn($el) => $el * 2, 
        [1, 2, 3]
    );

//>> Array FILTER
    // returns a new array of conditionally passed expressions
    array_filter(
        [1, 2, 3], 
        fn($el) => $el > 2
    );

//>> Array REDUCE
    // reduces to single value = 6
    array_reduce(
        [1, 2, 3], 
        fn($sum, $el) => $sum + $el,
        0
    );

//>> Array MERGE
    // returns the keys of the array = [1, 2, 3, 4, 5, 6]
    // numeric keys are ignored and re-indexed from 0
    // string keys are overriden by the last one
    array_merge([1, 2], [3, 4], [5, 5],);


//>> Array CHUNK
    // returns a new array of the arrays in chunks of two's
    array_chunk($arr, 2, true);

//>> Array COMBINE
    // returns a new array ['k1' => 'v1', 'k2' => 'v2', 'k2' => 'v2'] 
    // 1st array are the keys, 2nd array are the values
    array_combine(['k1', 'k2', 'k3'], ['v1', 'v2', 'v3']);

//>> Array VALUES
    // returns the array re-indexed numerically with it's values
    array_values($arr);

//>> Array KEYS
    // returns the keys of the array
    array_keys($arr);

    // key of an element
    array_keys($arr, 'apple');

//>> Array DIFF VALUES
    // return an array of unique values across given array
    // [4, 5]
    array_diff([1, 2, 5], [1, 2, 3], [1, 2, 3, 4]);

//>> Array DIFF KEYS
    // return an array of unique values across given array
    // [b, c]
    ASORT(['a' => 1, 'b' => 2], ['a' => 1, 'c' => 2]);

//>> Array SORT BY VALUES = manipulates original value
    // [1, 2, 3]
    asort([3, 2, 1]);

//>> Array SORT BY KEYS = manipulates original value
    // [a, b, c]
    kasort(['b' => 3, 'c' => 2, 'a' => 1]);

//>> Array SORT BY callback = manipulates original value
    // [1, 2, 3, 4, 5]
    usort([5, 4, 3, 2, 1], fn($a, $b) => $a <=> $b);

//>> Array destructure
    [$one, , $three, [$four, $five]] = [1, 2, 3, [4, 5]];
