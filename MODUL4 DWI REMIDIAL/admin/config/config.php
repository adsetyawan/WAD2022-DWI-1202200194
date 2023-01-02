<?php


define('URL', 'http://localhost:8080/Quiz_2/');

$koneksi = mysqli_connect("localhost", "root", " ", "rental_mobil", 3308);


function auth()
{
    global $koneksi;
    // cek cookie
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
        $query = mysqli_query(
            $koneksi,
            "SELECT * FROM users WHERE id=$id"
        );
        $user = mysqli_fetch_assoc($query);
        if ($key === md5($user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
        }
    } else {
        if (!isset($_SESSION['nama'])) {
            header('Location:' . URL . 'login.php');
        }
    }
}

function admin()
{
    if ($_SESSION['level'] === 'user') {
        header('Location:' . URL);
    }
}

function isCookie()
{
    global $conn;
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
        $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
        $user = mysqli_fetch_assoc($query);
        if ($key === md5($user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['level'] = $user['level'];
        }
    }
}
isCookie();
