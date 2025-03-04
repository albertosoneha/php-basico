<?php
// Se for ISSO e ISSO
$a = 1 == 1 && 2 == 2;  // true
   // true  &&  true = true
$b = 1 == 1 && 2 == 1;  // false
   // true  &&  false = false
$c = 2 == 1 && 2 == 2;  // false
   // false     true = false
$d = 1 == 2 && 2 == 1;  // false
   // false &&  false = false

var_dump(value: $a);
var_dump(value: $b);
var_dump(value: $c);
var_dump(value: $d);