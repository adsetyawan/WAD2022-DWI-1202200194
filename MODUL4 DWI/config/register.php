<?php

include 'connector.php';

    //Register
    // Get Data
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nohp = $_POST["nohp"];
    $pwd = $_POST["password"];
    $confirm = $_POST["confirm"];

    //check pass2
    if ($pwd !== $confirm) {
        echo "
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Password Konfirmasi Tidak Sesuai!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
        return false;
    }

    // insert to database
    $sql = "INSERT INTO user VALUES(0, '$nama','$email','$pwd','$nohp')";

    //sql cek
    $sql_cek = "SELECT email FROM user WHERE email = '$email'";
    $cek = $connect->query($sql_cek);;

    //Data check
    if (mysqli_query($connect, $sql)){
        session_start();
        $_SESSION['register'] = 'berhasil';
        header("location: ../pages/Login-Dwi.php");
    } else{
        header("location: ../pages/Register-Dwi.php");
    }

    if ($cek -> num_rows > 0){
        session_start();

        while ($row = $cek -> fetch_assoc()) {

            $email = $_POST['email'];
            $email_cek = $row['email'];
            $nama = $row['nama'];
            $uid = $row['id'];

        }

        if ($email == $email_cek){
            $_SESSION['register'] = 'gagal';
            header("location: ../pages/Register-Dwi.php");
        }
    }
    

?>