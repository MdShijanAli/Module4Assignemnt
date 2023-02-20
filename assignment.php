<?php

// Question-1

function sortByLength($array)
{
    usort($array, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}

$array = array("apple", "kola", "Mango", "Lichi");
$sortedArray = sortByLength($array);
print_r($sortedArray);

echo PHP_EOL;
echo PHP_EOL;
// Question-2


function concatenateFromEnd($string1, $string2)
{
    $length1 = strlen($string1);
    $length2 = strlen($string2);

    if ($length2 > $length1) {
        $temp = $string1;
        $string1 = $string2;
        $string2 = $temp;
    }

    $result = '';
    $j = $length2 - 1;
    for ($i = $length1 - 1; $i >= 0; $i--) {
        if ($j >= 0) {
            $result = $string2[$j] . $result;
            $j--;
        }
        $result = $string1[$i] . $result;
    }

    return $result;
}

$string1 = "hello";
$string2 = "world";
$result = concatenateFromEnd($string1, $string2);
echo $result;

echo PHP_EOL;
echo PHP_EOL;

// Question-3

function removeFirstAndLast($arr)
{
    if (count($arr) < 3) {
        return array();
    }
    array_shift($arr);
    array_pop($arr);
    return $arr;
}
$myArray = array(1, 2, 3, 4, 5);
$newArray = removeFirstAndLast($myArray);
print_r($newArray);




echo PHP_EOL;
echo PHP_EOL;


// Question-4


function containsOnlyLettersAndWhitespace($str)
{
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

$str1 = "Hello world";
$str2 = "Hello123 world";
$isOnlyLettersAndWhitespace1 = containsOnlyLettersAndWhitespace($str1);
$isOnlyLettersAndWhitespace2 = containsOnlyLettersAndWhitespace($str2);

echo $isOnlyLettersAndWhitespace1;
echo PHP_EOL;
echo $isOnlyLettersAndWhitespace2;


echo PHP_EOL;
echo PHP_EOL;
// Question-5


function findSecondLargest($arr)
{
    $largest = $arr[0];
    $secondLargest = null;

    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } elseif ($num < $largest && ($secondLargest === null || $num > $secondLargest)) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}
$myArray = array(10, 5, 7, 3, 12);
$secondLargest = findSecondLargest($myArray);
echo $secondLargest;
