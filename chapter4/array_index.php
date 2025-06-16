<?php
$program = ["PHP", "Ruby", "Java", "Python", "Javascript"];
echo $program[0] . PHP_EOL;
echo $program[1] . PHP_EOL;
echo $program[3] . PHP_EOL;
echo json_encode(array_slice($program, 2, 4)) . PHP_EOL;