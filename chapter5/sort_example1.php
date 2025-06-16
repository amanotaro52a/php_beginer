<?php
$numbers = [9 ,3, 5, 4, 8, 1, 2, 7, 6];
echo  json_encode($numbers) . PHP_EOL;
sort($numbers);
echo json_encode($numbers) . PHP_EOL;
rsort($numbers);
echo json_encode($numbers) . PHP_EOL;