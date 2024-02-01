<?php
$userId = $_GET['id'];
include_once 'userRepository.php';

$userR = new userRepository();
$userR->deleteUser($userId);

header('../pages/dashboarduser.php');
?>