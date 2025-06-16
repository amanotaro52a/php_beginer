<?php
$colors = ["red", "blue", "yellow"];
echo json_encode($colors) . PHP_EOL;
$colors[1] = "green";
echo json_encode($colors) . PHP_EOL;