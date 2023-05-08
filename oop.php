<?php
    class Person{
        private $name;
        private $email;
    
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    $person1 = new Person;

    $person1->setName('Liyah Ozella');
    echo $person1->getName();
    // $person1->name = 'John Doe';
    // echo $person1->name;
