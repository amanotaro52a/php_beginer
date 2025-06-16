<?php
$colors = ["red", "blue"];
echo json_encode($colors) . PHP_EOL;
array_unshift($colors, "yellow");
echo json_encode($colors) . PHP_EOL;