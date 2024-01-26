<?php
    class user{
        private $id;
        private $username;
        private $email;
        private $password;
        private $dateOfBirth;
        private $userType;

        function __construct($username, $email, $password, $dateOfBirth){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->dateOfBirth = $dateOfBirth;
        }

        function getId(){
            return $this->id;
        }

        function getUsername(){
            return $this->username;
        }

        function getEmail(){
            return $this->email;
        }

        function getPassword(){
            return $this->password;
        }

        function getDateOfBirth(){
            return $this->dateOfBirth;
        }

        function getUserType(){
            return $this->userType;
        }

    }

?>