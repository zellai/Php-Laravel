<?php
    class Person{
        public $name;
        public $email;
    }

    $person1 = new Person;

    $person1->name = 'John Doe';
    echo $person1->name;
