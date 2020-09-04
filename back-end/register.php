<?php 
    include_once("config.php");
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $repassword = $_POST['repass'];
    $result = mysqli_query($mysqli, "INSERT INTO login (username,password,repassword,time_login,status_login) VALUES('$username','$password','$repassword','0000-00-00','0')");
    if ($result == true){
        echo "User added successfully.";
    }
?>