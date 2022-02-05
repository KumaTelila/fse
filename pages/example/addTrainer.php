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
                        <h1 class="m-0">Trainer Register</h1>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <form name="Detail" method="POST" action="trainer-register.php">
                        <div class="card card-primary">

                            <div class="card-header">
                                <h3 class="card-title">Trainer Detail:</h3>
                            </div>

                            <div class="card-body" id="recieveddatadetail">

                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-info">First Name </label>
                                            <input type="text" class="form-control" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label class="text-info">Father Name </label>
                                            <input type="text" class="form-control" name="fname">
                                        </div>

                                        <div class="form-group">
                                            <label class="text-info">Grand Father Name </label>
                                            <input type="text" class="form-control" name="gname">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info">Gender</label>
                                            <select class="form-control select2" name="gender">
                                    
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="text-info">Phone </label>
                                            <input type="text" class="form-control" name="phone" >
                                        </div>

                                        <div class="form-group">
                                            <label class="text-info">Date of Registration</label>
                                            <input type="date" class="form-control" name="per_date" required>
                                        </div>


                                        <div class="form-group">
                                            <label class="text-info" >Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-info">Educational Level</label>
                                            <select class="form-control select2" name="edu_lev">
                                                <option></option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="10+1">10+1</option>
                                                <option value="10+2">10+2</option>
                                                <option value="Diploma">Diploma</option>
                                                <option value="Advanced Diploma">Advanced Diploma</option>
                                                <option value="Degree">Degree</option>
                                                <option value="Masters">Masters</option>
                                                <option value="Phd">Phd</option>
                                            </select>
                                        </div>

                                    </div>



                                    <div class="col-md-4">
                            
                                        <div class="form-group">
                                            <label class="text-info">Trainer State</label>
                                            <select id="selectcard" class="form-control select2" name="e_state">
                                                <option></option>
                                                <option value="1">Constant</option>
                                                <option value="2">Contrat</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label class="text-info">  User name</label>
                                            <input type="text" class="form-control" name="uname" placeholder="User name" required>
                                        </div>
                                        <div class="form-group">
                                        <label class="text-info">Trainer password</label>
                                            <input type="password" class="form-control" name="pass" placeholder="password" required>
                                        </div>
                                        <div class="form-group">
                                        <label class="text-info">confirm password</label>
                                            <input type="password" class="form-control" name="pass2" placeholder="confirm password" required>
                                        </div>
                                        <div style="margin-top: 13%; margin-left: 30%;">
                                            <input type="submit" id="buttonDetail" value="Submit" class="btn btn-primary">
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?php include '../inc/js.php'; ?>


</body>

</html>