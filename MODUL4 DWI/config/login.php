<?php
if (!isset($_SESSION)){
    session_start();
}

require 'connector.php';

$username = $_POST['email'];
$password = $_POST['password'];

$dt_username = "SELECT * FROM user WHERE email = '$username' AND password = '$password'";
$executeQuery = mysqli_query($connect, $dt_username);

if (mysqli_num_rows($executeQuery) == 1){
    $row = mysqli_fetch_assoc($executeQuery);

    if ($row['email'] == $username && $row['password'] == $password){
        echo "Logged in!";
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("location: ../pages/Home-Dwi.php?login=berhasil");
        exit();
        
    } else {
        header("location: ../pages/Login-Dwi.php");
        exit();
    }
}

$_SESSION['message-error'] = 'Gagal Login';
header('location: ../pages/Login-Dwi.php');
exit();


?>