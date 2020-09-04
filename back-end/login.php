<?php 
    include_once("config.php");
    $username = $_GET['name'];
    $password = $_GET['pass'];
    $result = mysqli_query($mysqli, "SELECT * FROM login where username = '$username' and password = '$password' ");
    // if ($result == true){
    //     echo "User added successfully.";
    // }
    if($row=mysqli_fetch_array($result)){

        $_SESSION['username']=$row['username'];
    }
?>