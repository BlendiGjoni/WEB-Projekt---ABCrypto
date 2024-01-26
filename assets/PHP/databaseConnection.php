<?php

    class databaseConnection{
        private $servername = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'abcryptodb';

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Lidhja dështoi : " . mysqli_connect_error());
            echo "<p>Nuk u lidh</p>";
        }

    }

?>