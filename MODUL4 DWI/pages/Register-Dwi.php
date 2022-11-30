<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"><style>
      <?php include 'asset/style/style.css'; ?>
    </style>
    <title>Register</title>


  <body>

    <!-- Content -->
    <div class="row justify-content-center">
        <div class="col-4 m-3">
            <div class="card-body bg-white" style="border-radius: 10px;">
            <img src="../asset/images/2021 Toyota Hilux.png" alt="car2" class="float-start" style="width: 100%;">
                <form action="../pages/Login-Dwi.php" method="POST">
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email"
                            required>
                    </div>

                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama"
                            required>
                    </div>


                    <!-- Nomor HP -->
                    <div class="mb-3">
                        <label for="No_HP" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" name="nohp"
                            required>
                    </div>

                    <!-- Kata Sandi -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" name="password"
                            required>
                    </div>

                    <!-- Konfirm Kata Sandi -->
                    <div class="mb-3">
                        <label for="confirmPasssword" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" name="confirm"
                            required>
                    </div>
                    <div class="text-center pt-4">
                        <button type="submit" name="register" class="btn btn-primary">Daftar</button>
                    </div>
                </form>

                <!-- Login -->
                <p class="text-center pt-3">Anda Sudah Punya Akun? <a href="../pages/Login-Dwi.php">Login</a></p>
            </div>
        </div>
    </div>
    <!-- Content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>