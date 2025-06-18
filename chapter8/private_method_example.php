<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduceText() {
        return "私の名前は{$this->name}です。{$this->age}才です。私の秘密は{$this->secret()}です。";
    }

    private function secret() {
        return '内緒';
    }
}

$person = new Person("公康", 47);
echo $person->introduceText();