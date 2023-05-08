<?php
    class Person{
        private $name;
        private $email;
    
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created <br>';
        }
        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name. '<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email. '<br>';
        }
    }

    $person1 = new Person('John Doe', 'jd@gmail.com');

    // $person1->setName('Liyah Ozella');
    echo $person1->getName();
    // $person1->name = 'John Doe';
    // echo $person1->name;
