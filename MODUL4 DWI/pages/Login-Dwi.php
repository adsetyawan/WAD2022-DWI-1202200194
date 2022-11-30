<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"><style>
      <?php include 'asset/style/style.css'; ?>
    </style>
    <title>Login</title>


  <body>
  <div class="row justify-content-center">
        <div class="col-4 m-5">
            <div class="login-container">
                <div class="split left">
                    <div class="left">
                        <img src="../asset/images/2021 Toyota Hilux.png" alt="Pages" style="width: 100%;">
                    </div>
                </div>
                <div class="split right">
                    <div class="centered">
                        <div class="form-container">
                            <form action="../pages/Home-Dwi.php" method="POST">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email/User" required>
                                </div>
            
                                <!-- Kata Sandi -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" placeholder="******" required>
                                </div>
            
                                <!-- Remember Me -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="rememberme" name="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember Me
                                    </label>
                                </div>
                                <!-- Button -->
                                <div class="text-center pt-4">
                                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                                </div>

                                
                                <!-- Login -->
                                <p class="text-center pt-3">Belum punya akun? <a href="../pages/Register-Dwi.php">Daftar</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>