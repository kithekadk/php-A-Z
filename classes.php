<?php

        
    class Person{
        function __construct(){
            // $this->callMe();
            // echo $this->firstname;
        }
        // properties
        protected $firstname = "Nicholas";
        protected $lastname = "Kirui";
        private $age = 20;

        // method
        public function callMe(){
            echo "Say my name";
        }

        // getter
        public function getName(){
            echo $this->lastname;

            $this->setName();
            echo $this->firstname. ' ' . $this->lastname , "<br>";
        }

        //setter
        public function setName(){
            return $this->lastname ="Muriithi";
        }
    }

    class Man extends Person{
        protected $lastname = "Kalusi";

        public function callMe(){
            echo "This is method overriding";
        }
        public function getDetails(){
            echo $this->age , "<br>";
            echo $this->lastname, "<br>";
            $this->setAge();
        }

        public function setAge(){
            $this->age = 30;
            // echo $this->age;
        }
    }
?>