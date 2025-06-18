<?php

trait Greeting {
    const PLAYBALL = "Playball!";

    public function hello() {
        return self::PLAYBALL;
    }
}

class Person {
    use Greeting;
}

$person = new Person();
echo $person->hello() . "\n";
echo Person::PLAYBALL . "\n";