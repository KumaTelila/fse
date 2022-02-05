<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <?php include '../inc/css.php'; ?>

</head>

<body class="hold-transition skin-blue ">
    <?php include '../inc/nav.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Car List</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">

            <div class="row">
                <?php if (isset($_GET['edit'])) {
                    //  $array_ric_id = $obj_fetch->fetchCarId($_GET['edit']);
                ?>
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Car:</h3>
                                <div class="pull-right">
                                    <a href="carlist.php" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancel</a>
                                </div>
                            </div>
                            <div class="card-body" id="recieveddata">
                                <form name="Reg_form">
                                    <div class="row" style="margin-top: 15px;">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Brand Name </label>
                                                <input type="text" class="form-control" name="bname">
                                            </div>

                                            <div class="form-group">
                                                <label>Model </label>
                                                <input type="text" class="form-control" name="model">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label class="text-info">Car Type</label>
                                                <select class="form-control select2" name="car_type">
                                                    <option></option>
                                                    <option value="Automobile">Automobile</option>
                                                    <option value="Pickup">Pickup</option>
                                                    <option value="SUV">SUV</option>
                                                    <option value="Minibus">Minibus</option>
                                                    <option value="BUS">BUS</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-info">Plate No. </label>
                                                <input type="text" class="form-control" name="plate">
                                            </div>

                                            <div style="margin-top: 13%; margin-left: 30%;">
                                                <input type="submit" id="buttonDetail" value="Submit" class="btn btn-primary">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label class="text-success">Parchased Date</label>
                                                <input type="date" class="form-control" name="per_date" required>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-success">Production Date</label>
                                                <input type="date" class="form-control" name="pro_date" required>
                                            </div>


                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-xs-12">
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">List of car:</h3>
                        </div>
                        <div class="card-body">
                            <table id="table_stud" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="10">No.</th>
                                        <th>Brand Name</th>
                                        <th>Model</th>
                                        <th>Type</th>
                                        <th>Plate Number</th>
                                        <th>Parchased Date</th>
                                        <th>Production Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    include "conndb.php"; // Using database connection file here

                                    $records = mysqli_query($conn, "select * from car"); // fetch data from database

                                    while ($data = mysqli_fetch_array($records)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['bname']; ?></td>
                                            <td><?php echo $data['model']; ?></td>
                                            <td><?php echo $data['car_type']; ?></td>
                                            <td><?php echo $data['plate']; ?></td>
                                            <td><?php echo $data['per_date']; ?></td>
                                            <td><?php echo $data['pro_date']; ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>



                                </tbody>
                            </table>
                            <?php mysqli_close($conn); // Close connection 
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <?php include '../inc/js.php'; ?>

</body>

</html>