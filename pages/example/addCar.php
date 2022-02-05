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
            <h1 class="m-0">Car Register</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form name="Reg_form" method="POST" action="car-register.php">
              <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Car Detail:</h3>
                </div>

                <div class="card-body" id="recieveddata">

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

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
  </div>

  <?php include '../inc/js.php'; ?>

</body>

</html>