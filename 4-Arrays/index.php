<?php

//> Arrays
$myArray = ['PHP', 'JS', 'HTML'];

/*
If you don't define the keys PHP does it for you from 0 or the largest int

You can't use -1 index as per JS... -1 index does not exist and returns null

keys are strings / int
keys will be casted i.e true, 1, '1', 1.8 = all these keys will be overrided to the key 1
*/

// check if index is set
isset($myArray[3]); // false

count($myArray); // 3

// push to end of array
$myArray[] = 'add to end';

// associative arrays
$myArrayTwo = [
    'key1' => 'apples',
    'key2' => 'pears'
    
];
echo $myArrayTwo['key2'];

$myArrayTwo['key3'] = [
'more' => [['more' => 'veg']]
];
echo $myArrayTwo['key3']['more']; // [['more' => 'veg']]
echo $myArrayTwo['key3']['more'][0]; // ['more' => 'veg']

array_pop($myArrayTwo); // removed from end = re-index
array_shift($myArrayTwo); // removed from beginning = re-index
unset($myArray['key3']); // not re-index
array_key_exists('key3', $myArray);
isset($myArray['key3']); // checks for key and if value is set
