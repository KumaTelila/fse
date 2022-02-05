<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        img {
            vertical-align: middle;
            border-radius: 50%;

        }
    </style>
    <?php include '../inc/css.php'; ?>
</head>

<body>
    <?php include '../inc/nav.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3> <?php

                                        include "conndb.php";
                                        $records = mysqli_query($conn, "select * from student");
                                        $car = 0;
                                        while ($data = mysqli_fetch_array($records)) {
                                            $car++;
                                        }
                                        echo $car;

                                        ?></h3>

                                <p>Students</p>
                            </div>
                            <div class="icon">
                                <i class='fas fa-user-graduate' style='font-size:px'></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?php

                                    include "conndb.php";
                                    $records = mysqli_query($conn, "select * from car");
                                    $car = 0;
                                    while ($data = mysqli_fetch_array($records)) {
                                        $car++;
                                    }
                                    echo $car;

                                    ?><sup style="font-size: 20px"></sup></h3>

                                <p>Cars</p>
                            </div>
                            <div class="icon">
                                <i class='fas fa-shuttle-van' style='font-size:64px'></i>
                            </div>
                            <a href="veiwCar.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?php

                                    include "conndb.php";
                                    $records = mysqli_query($conn, "select * from trainer");
                                    $car = 0;
                                    while ($data = mysqli_fetch_array($records)) {
                                        $car++;
                                    }
                                    echo $car;

                                    ?></h3>

                                <p>Trainer</p>
                            </div>
                            <div class="icon">
                                <i class='fas fa-chalkboard-teacher' style='font-size:64px'></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- ./col -->
                </div>
                <!-- /.row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->



    <?php include '../inc/js.php'; ?>
</body>

</html>