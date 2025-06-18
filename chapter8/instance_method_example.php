<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function introduceText() {
        return "私の名前は{$this->name}です。{$this->age}才です";
    }
}

$ichiro = new Person("一郎", 51);
echo $ichiro->introduceText() . "\n";

$hideki = new Person("秀喜", 55);
echo $hideki->introduceText() . "\n";