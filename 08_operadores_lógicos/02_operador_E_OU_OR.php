<?php
// Se for ISSO e/ou ISSO
// OR = ||
$a = 1 == 1 || 2 == 2; // true
//     true
$b = 1 == 1 || 2 == 2; // true

$c = 2 == 1 || 2 == 2; // true

$d = 1 == 2 || 2 == 1; // false

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);