<?php
    class User{
        private $id;
        private $fullName;
        private $name;
        private $email;
        private $password;

        function __construct($fullName, $name, $email, $password, $id = 0){
            $this->id = $id;
            $this->fullName = $fullName;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId(){
            return $this->id;
        }

        public function getFullName(){
            return $this->fullName;
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }
    }
?>