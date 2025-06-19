<?php
$pattern = '/PHP/';

preg_match_all($pattern, "PHP", $matches1);
echo json_encode($matches1[0]) . "\n";

preg_match_all($pattern, "PHP PHP", $matches2);
echo json_encode($matches2[0]) . "\n";