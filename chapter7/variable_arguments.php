<?php
function greet(...$names) {
    foreach ($names as $name) {
        echo "Hello, $name!\n";
    }
}

greet("Alex", "David", "Mariah");