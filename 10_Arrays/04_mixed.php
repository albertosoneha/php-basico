<?php

$mixed = [
    'name' => 'Felipe',
    [
        1, 5, 7, ['age' => 20]
    ],


];

print_r(value: $mixed);

$mixed = [
    'name' => 'Felipe',
    'numbers' => [
        1,
        5,
        7,

    ],
    'teste' => [
        'age' => 20,

    ],
];

print_r(value: $mixed);

