<?php

// login
function login($post)
{
    global $koneksi;
    $email = $post['email'];

    $password = $post['password'];

    if ($email && $password) {
        // cek email dan password
        $qLogin = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
        $cekLogin = mysqli_fetch_assoc($qLogin);
        if ($cekLogin) {
            // cek password
            if (password_verify($password, $cekLogin['password'])) {
                if (isset($post['rememberme'])) {

                    $_SESSION['id'] = $cekLogin['id'];
                    $_SESSION['nama'] = $cekLogin['nama'];
                    $_SESSION['email'] = $cekLogin['email'];
                    $_SESSION['level'] = $cekLogin['level'];
                    $key = md5($cekLogin['password']);
                    setcookie('id', $cekLogin['id'], time() + (60 * 60 * 24 * 30), '/');
                    setcookie('key', $key, time() + (60 * 60 * 24 * 30), '/');
                    if($cekLogin['level'] === 'admin')
                    {
                        echo "
                    <script>
                        alert('Berhasil Login!');
                         window.location.href = 'admin/index.php';
                    </script>
                    ";
                    die;
                    }else{
                        echo "
                    <script>
                        alert('Berhasil Login!');
                         window.location.href = 'index.php';
                    </script>
                    ";
                    die;
                    }
                } else {
                    $_SESSION['id'] = $cekLogin['id'];
                    $_SESSION['nama'] = $cekLogin['nama'];
                    $_SESSION['email'] = $cekLogin['email'];
                    $_SESSION['level'] = $cekLogin['level'];
                    if($cekLogin['level'] === 'admin')
                    {
                    header('Location:' . URL . 'admin');
                    
                    }else{
                        header('Location:' . URL);
                    }
                }
            } else {
                echo "
                <script>
                    alert('Email atau Kata Sandi Salah!');
                     window.location.href = 'login.php';
                </script>
                ";
                die;
            }
        } else {
            echo "
            <script>
                alert('Email atau Kata Sandi Salah!');
                 window.location.href = 'login.php';
            </script>
            ";
            die;
        }
    } else {
        echo "
        <script>
            alert('Inputan tidak boleh ada yang kosong!');
             window.location.href = 'login.php';
        </script>
        ";
        die;
    }
}


//register
function register($post)
{
    global $koneksi;
    $nama = $post['nama'];
    $email = $post['email'];
    $password = $post['password'];
    $konfirmas_password = $post['konfirmasi_password'];
    if ($nama && $email && $password && $konfirmas_password) {


        // cek password dan konfirmasi password
        if ($password !== $konfirmas_password) {
            echo "
                <script>
                    alert('Password dan Konfirmasi Password Tidak Sesuai!');
                     window.location.href = 'register.php';
                </script>
                ";
            die;
        }

        // cek password dan konfirmasi password
        if (strlen($password) < 5) {
            echo "
                 <script>
                     alert('Password minimal harus 5 karakter!');
                      window.location.href = 'register.php';
                 </script>
                 ";
            die;
        }


        // cek ketersedian email
        $qCek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");

        $cekEmail = mysqli_num_rows($qCek);

        if ($cekEmail > 0) {
            echo "
            <script>
                alert('Email yang didaftarkan sudah digunakan!');
                 window.location.href = 'register.php';
            </script>
            ";
            die;
        }


        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`) VALUES (NULL, '$nama', '$email', '$password_hash', 'user')");
        echo "
        <script>
            alert('Anda berhasil mendaftar, silahkan login terlebih dahulu');
            window.location.href = 'login.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Inputan tidak boleh ada yang kosong!');
             window.location.href = 'register.php';
        </script>
        ";
        die;
    }
}
