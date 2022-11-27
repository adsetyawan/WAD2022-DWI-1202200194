<?php
require './config/connector.php';

$query = "SELECT * FROM showroom_dwi_table";
$result = mysqli_query($connector, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/List-Dwi.php");
  } else {
    header("Location: ./pages/Add-Dwi.php");
  }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"><style>
      <?php include 'asset/style/style.css'; ?>
    </style>
    <title>Home</title>
</head>

<body>
        <section class="container-fluid">
            <form action="../config/insert.php?" method="post">
                <div class="row">
                    <div class="col-6" style="height:100vh;"><br><br><br><br><br><br>
                        <img src="../assets/images/bmw-e30.jpg" width="100%" alt="bmw" style="border-radius:10px;">
                    </div>
                    <div class="col-6">
                        <br><br><br><br><br>
                        <h3 class="fw-bold">REGISTRASI</h3>
                        <?php
                            //Validasi untuk menampilkan pesan pemberitahuan
                            if (isset($_GET['registrasi'])) {
                            
                                if ($_GET['registrasi']=='success'){
                                    echo "
                                    <div class='container d-flex justify-content-end' style='position:fixed;right:8em;top:5em;'>
                                        <div class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>
                                        <div class='toast-header'>
                                        
                                            <svg class='placeholder col-1 rounded me-2 bg-warning' width='20' height='20' xmlns='http://www.w3.org/2000/svg' aria-hidden='true' preserveAspectRatio='xMidYMid slice' focusable='false'><rect width='100%' height='100%' fill='#007aff'></rect>
                                            </svg>
                                
                                            <strong class='me-auto'>Registrasi Berhasil</strong>
                                            <small>11 mins ago</small>
                                            <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                                        </div>
                                        <div class='toast-body'>
                                            Silahkan Login</a>!
                                        </div>
                                        </div>
                                    </div>
                                    ";
                                    ?><script type='text/javascript'>
                            $(document).ready(function() {
                                swal({
                                    title: 'Success Registration',
                                    text: 'Success Registration, Anda Sudah Boleh Login!',
                                    icon: 'success',
                                    button: 'Ok',
                                    timer: 3000
                                });
                                });
                        </script><?php
                            }else if ($_GET['registrasi']=='failed'){
                                echo"<div class='alert alert-danger'><strong>Failed!</strong> File gambar gagal diupload!</div>";
                            }    
                            }
                            if (isset($_GET['email'])) {
                            
                            if ($_GET['email']=='sudahTerdaftar'){
                                echo "
                                <div class='container d-flex justify-content-end' style='position:fixed;right:8em;top:5em;'>
                                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        Email Sudah Terdaftar, Ganti Email !
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                </div>
                                ";
                            }
                            }
                            if (isset($_GET['password'])) {
                            
                            if ($_GET['password']=='notmatch'){
                                echo "
                                <div class='container d-flex justify-content-end' style='position:fixed;right:8em;top:5em;'>
                                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                                        Konfirmasi Password masih salah, Coba cek lagi !
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                </div>
                                ";
                            }
                            }
                            ?>
                        <div class="mb-3 row">
                            <label>Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label>Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_hp" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label>Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"  required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password1" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password2" required>
                            </div>
                        </div>
                        <p class="mt-3">Anda sudah punya akun?<a href="Login-Dwi.php">Login</a></p>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary w-100" name="registrasi" value="Registration">
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
    </body>
</html>