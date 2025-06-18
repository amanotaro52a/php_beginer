<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function info() {
        return "{$this->name}, {$this->age}歳";
    }
}

$person = new Person("一郎", 51);
var_dump($person);
echo $person->info() . "\n";