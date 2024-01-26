<?php
    include_once 'userRepository.php';
    include_once 'user.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $dateOfBirth = $_POST['dateOfBirth'];

        $user = new User($username, $email, $password, $dateOfBirth);
        $userRepository = new userRepository();

        $userRepository->insertUser($user);
    }
?>