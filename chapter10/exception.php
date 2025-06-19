<?php
try {
    $result = 1 / 0;
} catch (DivisionByZeroError $e) {
    echo "DivsionByZeroError: " . $e->getMessage() . PHP_EOL;
}