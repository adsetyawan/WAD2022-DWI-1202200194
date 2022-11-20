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
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/List-Dwi.php";
                                    } else {
                                      echo "./pages/Add-Dwi.php";
                                    } ?>">MyCar</a>
        </div>
      </div>
    </div>
  </nav>

  
  <section id="home">
    <div class="container">
      <div class="row align-items-center mt-5">
        <div class="col">
          <h1 class="fw-bold">Selamat Datang Di Show Room Port-Numbay</h1>
            <div class="description">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex exercitationem eius veniam molestias
                accusantium labore</p>
            </div>
          
          <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./pages/List-Dwi.php";
                    } else {
                      echo "./pages/Add-Dwi.php";
                    } ?>" type="button" class="button btn-primary">MyCar</a>

          <div class="about mt-5">
                <div class="d-flex gap-5">
                  <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logo-ead" width="125" heigh="15">
                  <p>Dwi_1202200016</p>
                </div>
          </div>
        </div>
        
        <div class="col">
          <img src="<?php echo "asset/images/2021 Toyota Hilux.png" ?>" width="500" alt="static car">
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>