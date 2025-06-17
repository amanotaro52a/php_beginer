<?php
$associative_array = [
    "name" => "Alex",
    "age" => 25,
    "city" => "Washington,D.C."
];

foreach ($associative_array as $key => $value) {
    echo "{$key}: {$value}" . PHP_EOL;
}