<?php
/**
 * sort() - 对数组进行升序排列
 */
$cars=["Volvo","BMW","Toyota"];
sort($cars);
print_r($cars);
echo PHP_EOL;
$numbers=[4,6,2,22,11];
sort($numbers);
print_r($numbers);
echo PHP_EOL;

/**
 * rsort() - 对数组进行降序排列
 */
$cars=["Volvo","BMW","Toyota"];
rsort($cars);
print_r($cars);
echo PHP_EOL;
$numbers=[4,6,2,22,11];
rsort($numbers);
print_r($numbers);
echo PHP_EOL;

/**
 * ksort() - 根据数组的键(key)，对数组进行升序排列
 */
echo "ksort() - 根据数组的键(key)，对数组进行升序排列", PHP_EOL;
$age=["Peter"=>35,"Ben"=>37,"Joe"=>43];
ksort($age);
print_r($age);

/**
 * krsort() - 根据数组的键(key)，对数组进行降序排列
 */
echo "krsort() - 根据数组的键(key)，对数组进行降序排列", PHP_EOL;
$age=["Peter"=>35,"Ben"=>37,"Joe"=>43];
krsort($age);
print_r($age);

/**
 * asort() - 根据数组的值(value)，对数组进行升序排列
 */
echo "asort() - 根据数组的值(value)，对数组进行升序排列", PHP_EOL;
$age=["Peter"=>35,"Ben"=>37,"Joe"=>43];
asort($age);
print_r($age);

/**
 * arsort() - 根据数组的值(value)，对数组进行降序排列
 */

echo "arsort() - 根据数组的值(value)，对数组进行降序排列", PHP_EOL;
$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
arsort($age);
print_r($age);

