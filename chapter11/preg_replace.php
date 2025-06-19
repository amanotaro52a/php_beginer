<?php
$pattern = '/PHP/';

echo preg_replace($pattern, "Python", "PHP") . "\n";
echo preg_replace($pattern, "Python", "PHP PHP") . "\n";