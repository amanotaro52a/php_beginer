<?php
$colors = ["red", "blue", "yellow"];
echo json_encode($colors) . PHP_EOL;
unset($colors[1]);
echo json_encode(array_values($colors)) . PHP_EOL;