<?php
$productId = $_GET['product_id'];
include_once 'productRepository.php';

$productR = new productRepository();
$productR->deleteProduct($productId);

header('../pages/dashboardcrypto.php');
?>