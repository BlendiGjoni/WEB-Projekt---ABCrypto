<?php 
include_once 'databaseConnection.php';

    class productRepository {

        private $connection;

        function __construct(){
            $conn = new databaseConnection();
            $this->connection = $conn->startConnection();
        }

        //CREATE
        function insertProduct($product){
            $conn = $this->connection;

            $product_id = $product->getProductId();
            $product_logo = $product->getProductLogo();
            $product_name = $product->getProductName();
            $product_name_shortcut = $product->getProductNameShortcut();
            $product_last_price = $product->getProductLastPrice();
            $product_perc = $product->getProductPerc();
            $product_market_cap = $product->getProductMarketCap();
            $product_chart = $product->getProductChart();
            $fk_user_id = $product->getFkUserId();

            $sql = "INSERT INTO product (product_logo, product_name, product_name_shortcut, product_last_price, product_perc, product_market_cap, product_chart, fk_user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $statement = $conn->prepare($sql);

            $statement->execute([$product_logo, $product_name, $product_name_shortcut, $product_last_price, $product_perc, $product_market_cap, $product_chart, $fk_user_id]);

            echo '<script> alert("Product has been inserted succesfully!");</script>';
    }

    //READ
    function getAllProducts(){
        $conn = $this->connection;

        $sql = "SELECT * FROM product";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    
    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM product WHERE product_id='$id'";

        $statement = $conn->query($sql);
        $product = $statement->fetch();

        return $product;
    }

    
    //UPDATE
    function updateProduct($product_id,$username,$email,$password,$dateofbirth){
        $conn = $this->connection;

        $sql = "UPDATE product SET product_logo=?, product_name=?, product_name_shortcut=?, product_last_price=?, product_perc=?, product_market_cap=?, product_chart=? WHERE product_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$product_logo, $product_name, $product_name_shortcut, $product_last_price, $product_perc, $product_market_cap, $product_chart, $product_id]);

        echo "<script>alert('Updated!'); </script>";
   } 

   //DELETE
    function deleteProduct($product_id){
        $conn = $this->connection;

        $sql = "DELETE FROM product WHERE product_id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$product_id]);

        echo "<script>alert('Deleted!'); </script>";
   }
} 

?>