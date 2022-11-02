<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>Home</title>
    </head>


    <body>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Dwi_Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/MODUL2 DWI/Pages/Dwi_Booking.php">Booking</a>
                </li>
            </ul>
        </nav>


        <section class="container text-center mt-3 mb-3">
            <h1>WELCOME TO EAD RENT</h1>
            <h6 class="text-secondary">Find your best deal here!</h6>
        </section>


        <section class="container d-flex justify-content-center mb-5">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/2022 Jeep Gladiator RHD.png" class="card-img-top" alt="car1">
                        <div class="card-body">
                            <h5 class="card-title text-dark">2022 Jeep Gladiator RHD</h5>
                            <p class="card-text text-secondary">Rp1.800.000,00 / Day</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item  text-primary">Double Cabin</li>
                            <li class="list-group-item  text-primary">3,6L 4WD</li>
                            <li class="list-group-item  text-primary">8-Speed AT</li>
                        </ul>
                        <div class="card-body text-center bg-light">
                            <a href="./pages/Dwi_Gladiator.php" class="btn btn-primary card-link w-100">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/2021 Toyota Hilux.png" class="card-img-top" alt="car1">
                        <div class="card-body">
                            <h5 class="card-title text-dark">2021 Toyota Hilux</h5>
                            <p class="card-text text-secondary">Rp1.200.000,00 / Day</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item  text-primary">Double Cabin</li>
                            <li class="list-group-item  text-primary">2.7L 4WD</li>
                            <li class="list-group-item  text-primary">5-Speed Manual</li>
                        </ul>
                        <div class="card-body text-center bg-light">
                            <a href="./pages/Dwi_Hilux.php" class="btn btn-primary card-link w-100">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 20rem;">
                        <img src="./img/2022 Nissan Navara RHD.png" class="card-img-top" alt="car1">
                        <div class="card-body">
                            <h5 class="card-title text-dark">2022 Nissan Navara RHD</h5>
                            <p class="card-text text-secondary">Rp1.600.000,00 / Day</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item  text-primary">Double Cabin</li>
                            <li class="list-group-item  text-primary">2,5L 4WD</li>
                            <li class="list-group-item  text-primary">6-Speed Manual</li>
                        </ul>
                        <div class="card-body text-center bg-light">
                            <a href="./pages/Dwi_Navara.php" class="btn btn-primary card-link w-100">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer type="button" class="text-center pt-2 pb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Created by Ari Dwi Setyawan_1202200194_SI-44-01
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Copyright</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Nama Lengkap: Ari Dwi Setyawan
                        <br>
                        NIM: 1202200194
                        <br>
                        Kelas: SI-44-01
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    </body>
</html>
