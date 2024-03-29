<?php
include_once 'databaseConnection.php';

class userRepository{
    private $connection;
    
    function __construct(){
        $conn = new databaseConnection();
        $this->connection = $conn->startConnection();
    }

    //CREATE
    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $dateofbirth = $user->getDateofbirth();

        $sql = "INSERT INTO user (username, email, password, date_of_Birth) VALUES (?, ?, ?, ?)";


        $statement = $conn->prepare($sql);

        $statement->execute([$username, $email, $password, $dateofbirth]);

        echo '<script> alert("User has been inserted succesfully!");</script>';

        // try {
        //     $statement->execute([$username, $email, $password, $dateOfBirth]);
        //     echo '<script>alert("User has been inserted successfully!");</script>';
        // } catch (PDOException $e) {
        //     echo "Error: " . $e->getMessage();
        // }

    }

    //READ
    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }


    
    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    //UPDATE
    function updateUser($id,$username,$email,$password,$dateofbirth){
        $conn = $this->connection;

        $sql = "UPDATE user SET username=?, email=?, password=?, date_of_birth=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username, $email, $password, $dateofbirth, $id]);

        echo "<script>alert('Updated!'); </script>";
   } 

   //DELETE
   function deleteUser($id){
    $conn = $this->connection;

    $sql = "DELETE FROM user WHERE id=?";

    $statement = $conn->prepare($sql);

    $statement->execute([$id]);

    echo "<script>alert('Deleted!'); </script>";
} 


}
?>