<?php
class Person {
    private $name;
    private $age;
    private $country;

    public function __construct($name, $age, $country) {
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    public function info() {
        return "{$this->name}, {$this->age}歳, {$this->country}出身";
    }
}

$person = new Person("一郎", 51, "Japan");
var_dump($person);
echo $person->info() . "\n";