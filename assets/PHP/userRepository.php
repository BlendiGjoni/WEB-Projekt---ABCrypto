<?php
include_once 'databaseConnection.php';

class userRepository{
    private $connection;
    
    function __construct(){
        $conn = new databaseConnection;
        $this->connection = $conn->startConnection();
    }

    //CREATE
    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $dateOfBirth = $user->getDateOfBirth();

        $sql = "INSERT INTO user (username, email, password, dateOfBirth) VALUES ('$username', '$email', '$password', '$dateOfBirth')";

        $statement = $conn->prepare($sql);

        $statement->execute([$username, $email, $password, $dateOfBirth]);

        echo '<script> alert("User has been inserted succesfully!");</script>'

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
    function updateUser($id,$username,$email,$password,$dateOfBirth){
        $conn = $this->connection;

        $sql = "UPDATE user SET username=?, email=?, password=?, dateOfBirth=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$username, $email, $password, $dateOfBirth]);

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