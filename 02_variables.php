<?php
//String, Integer, Float, Boolean, Array, Object(class), NULL, Resource

$name = 'Brad'; //string
$age = 40; //int
$hasKids = true; //bool, var_dump
$cash = 20.75; // float

//echo $name + ' is '+ $age +' years old';
echo "$name is $age years old";
echo "${name} is ${age} years old";

echo 5+5;
echo '5'+'5'; //10

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
