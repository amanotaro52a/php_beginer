<?php
$associative_array1 = [ "name" => "Alex", "age" => 25 ];
$associative_array2 = [ "city" => "Washington,D.C." ];
$associative_array3 = [ "name" => "David", "age" => 24 ];

$merged_associative_array = array_merge($associative_array1, $associative_array2);
print_r($merged_associative_array);

$merged_associative_array_with_conflict = array_merge($associative_array1, $associative_array3);
print_r($merged_associative_array_with_conflict);

