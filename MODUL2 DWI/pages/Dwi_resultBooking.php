<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="#">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <title>MY Booking</title>
    </head>


    <body>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="Dwi_Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href=".pages/Dwi_resultBooking.php">Booking</a>
                </li>
            </ul>
        </nav>


        <?php
            $name = isset($_POST['name'])? $_POST['name'] : '';
            $dated = isset($_POST['date'])? $_POST['date'] : '';
            $time = isset($_POST['time'])? $_POST['time'] : '';
            $duration = isset($_POST['duration'])? $_POST['duration'] : '';
            $typeCar = isset($_POST['typeCar'])? $_POST['typeCar'] : '';
            $phone = isset($_POST['phoneNumber'])? $_POST['phoneNumber'] : '';
            $serv = isset($_POST['service'])? $_POST['service'] : '';
            
            
            
            $count=0;
            $booking = rand(1,99999999999);
            $health = 100000;
            $driver = 300000;
            $fullFilled = 800000;
            ?>


        <section class="container">
            <h1 class="text-center mb-3 pt-3">THANK YOU <?php echo $name ?></h1>
            <h5 class="text-center text-success medium mb-5">Please double check your reservation details.</h5>
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                        <th scope=col>Booking Number</th>
                        <th scope=col>Name</th>
                        <th scope=col>Check In</th>
                        <th scope=col>Check Out</th>
                        <th scope=col>Car Type</th>
                        <th scope=col>Phone Number</th>
                        <th scope=col>Services(s)</th>
                        <th scope=col>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo "$booking" ?></td>
                        <td><?php echo "$name" ?></td>
                        <td><?php echo "$dated" ?>&nbsp; <?php echo $time ?></td>
                        <td>
                            <?php
                                echo date("Y-m-d", strtotime("+$duration day", strtotime($dated)));
                                ?>
                        </td>
                        <td><?php echo "$typeCar" ?></td>
                        <td><?php echo "$phone" ?></td>
                        <td>
                            <?php
                                if ($serv) {
                                    $serv = $_POST['service'];
                                    foreach ($serv as $service){
                                        echo "<li>".$service."<br>";
                                        if($service == "Health Protocol"){
                                            $count += $health;
                                        }
                                        if($service == "Driver"){
                                            $count += $driver;
                                        }
                                        if($service == "Full Filled"){
                                            $count += $fullFilled;
                                        }
                                    }
                                }else{
                                    echo 'No Service';
                                }
                                ?>
                        </td>
                        <td>
                            <?php 
                                if($typeCar == "2022 Jeep Gladiator RHD"){
                                    $gladiator = (1800000 * $duration)+$count;
                                    echo "Rp.  &nbsp;". number_format($gladiator,2,',','.') ;
                                }    
                                elseif($typeCar == "2021 Toyota Hilux"){
                                    $hilux = (1200000 * $duration)+$count;
                                    echo "Rp.  &nbsp;". number_format($hilux,2,',','.') ;
                                }
                                elseif($typeCar == "2022 Nissan Navara RHD"){
                                    $navara = (1600000 * $duration)+$count;
                                    echo "Rp.  &nbsp;". number_format($navara,2,',','.') ;
                                }
                                ?>
                        </td>
                    </tr>
                </tbody>
            </table>
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