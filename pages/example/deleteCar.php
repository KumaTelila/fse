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
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <h1 class="m-0">Remove Car By Plate Number</h1>
                        </h1>
                    </div>
                    <form name="Reg_form" method="POST" action="removeCar.php">
                        <div class="row">
                            <div class="cl md-4">
                                <div class="form-group">
                                    <label class="text-info">Plate No. </label>
                                    </h1>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="plate">
                                    </h1>
                                </div>
                                <div class="form-group">

                                    <input type="submit" id="buttonDetail" value="Remove Car" class="btn btn-primary">
                                </div>
                            </div>



                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php include '../inc/js.php'; ?>


</body>

</html>