<?php

/*function addTenWithoutReference(int $value): int
{
    return $value + 10;
}

$myvalue = 20;

echo"{$myvalue}\n";
$myvalue = addTenWithoutReference($myvalue);
echo"{$myvalue}\n";

echo"\n";*/


function addTen(int &$value ): void
{
    $value += 10;
}

$myvalue = 20;

echo"{$myvalue}\n";
addTen(value: $myvalue);
echo"{$myvalue}\n";
