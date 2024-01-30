<?php
    class user{
        private $id;
        private $username;
        private $email;
        private $password;
        private $dateofbirth;
        private $userType;

        function __construct($username, $email, $password, $dateofbirth){
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->dateofbirth = $dateofbirth;
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

        function getDateofbirth(){
            return $this->dateofbirth;
        }

        function getUserType(){
            return $this->userType;
        }

    }

?>