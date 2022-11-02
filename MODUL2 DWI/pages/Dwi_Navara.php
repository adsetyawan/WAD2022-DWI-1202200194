<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="#">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>2022 Nissan Navara RHD</title>
    </head>


    <body>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Dwi_Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="Dwi_Booking.php">Booking</a>
                </li>
            </ul>
        </nav>


        <section class="container text-center mt-3 mb-3">
            <h3>Rent Your Car Now!</h3>
        </section>


        <section class="container">
            <div class="row">
                <div class="col-6">
                    <img src="2022 Nissan Navara RHD.png" width="100%" alt="rush">
                </div>
                <div class="col-6">
                    <form action="Dwi_resultBooking.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="price" name="price" value="1600000">Rp1.600.000,00 / Days</span>
                        </div>
                        <div class="form-control mb-3">
                            <span class="text-secondary">Name</span>
                            <input type="username" class="form-control mb-3" value="DWI_1202200194" id="name" name="name" readonly>
                            <span class="text-secondary">Book Date</span>
                            <input type="date" class="form-control mb-3" id="date" name="date" required>   
                            <span class="text-secondary">Start Time</span>
                            <input type="time" class="form-control mb-3" id="time" name="time" required>  
                            <span class="text-secondary">Duration (Days)</span>
                            <input type="text" class="form-control mb-3" id="time" name="duration" required>
                            <span class="text-secondary">Car Type</span>
                            <select class="form-select mb-3" aria-label="Default select example" id="typeCar" name="typeCar">
                                <option selected>2022 Nissan Navara RHD</option>
                            </select>
                            <span class="text-secondary">Phone Number</span>
                            <input type="text" class="form-control mb-3" id="phoneNumber" name="phoneNumber" required>
                            <span class="text-secondary">Add Service(s)</span>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"   id="services" name="service[0]" value="Health Protocol">
                                <label class="form-check-label" for="flexCheckDefault">
                                Health Protocol / Rp100.000.00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="services" name="service[1]" value="Driver">
                                <label class="form-check-label" for="flexCheckChecked">
                                Driver / Rp300.000.00
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox"  id="services" name="service[2]" value="Full Filled">
                                <label class="form-check-label" for="flexCheckChecked">
                                Full Filled / Rp800.000.00
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mb-3">Book</button>
                </div>
                </form>
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