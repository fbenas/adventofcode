<?php

// Script to run the first problem

require(__DIR__ . '/../vendor/autoload.php');

use App\One\FileToArray;
use App\One\ArraySum;

$array = (new FileToArray(realpath(__DIR__ . '/../resources/inputs/one.txt')))->toArray();

$sum = (new ArraySum($array))->getSum();

echo $sum . PHP_EOL;
