<?php
        // private $servername = 'localhost';
        // private $username = 'root';
        // private $password = '';
        // private $database = 'abcryptodb';

        // $conn = mysqli_connect($servername, $username, $password, $database);

        // if (!$conn) {
        //     die("Lidhja dështoi : " . mysqli_connect_error());
        //     echo "<p>Nuk u lidh</p>";
        // }
        // else{
        //     echo "<p>U lidh</p>";
        // }
        class databaseConnection{
            private $server="localhost";
            private $username="root";
            private $password="";
            private $database = "abcryptodb";
        
        
            function startConnection(){
                try{
                    $conn = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conn;
                }catch(PDOException $e){
                    echo "Database Connection Failed".$e->getMessage();
                    return null;
                }
        
        
            }
        }
?>