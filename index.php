<?php
session_start();
$name ="kuma";
include("pages/example/conndb.php");
//include("function.php");
if(isset($_SESSION['user_id'])){
  header("Location: pages/example/admin.php");
}
if(isset($_POST["submit_login"]))
{
    //something posted
    $uname = $_POST['uname'];
    $pass = md5($_POST['pass']);
    if(!empty($uname)&& !empty($pass)&& !is_numeric($uname))
    {
        //read from ddatabase database
        //$id = random_num(20);
        $query  = "select * from admin where username = '$uname' AND password = '$pass'  ";
  
        $result =  mysqli_query($conn, $query);
        if( mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id']= $user_data['id'];
            header("Location: pages/example/admin.php");
        }
        else{
          $return_message =  "Wrong username or password";
        }
       
    }
    else{
        $return_message =  "Please insert some valid information";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <title>Login</title>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><b>MM Driving School</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Login Here</p>
        <?php if(isset($return_message)): ?>
        <div class="alert alert-danger">
          <h5> <i class="icon fas fa-ban"></i> <?php echo $return_message; ?></h5>
        </div>
        <?php endif ?>
        <form  method="post">
          <div class="input-group mb-3">
            <input type="text" name="uname" class="form-control" placeholder="User name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="submit_login" id="sign_in"  class="btn btn-primary">
                Log in
              </button>
            </div>

            <!-- /.col -->
          </div>
        </form>
        <div class="container">
  <div class="row">
    <div class="col-sm">
    <a href="forgot-password.html">I forgot my password</a>
    </div>
    <div class="col-sm">
    <a href="pages/example/register.php">For Registeration</a>
    </div>
   
  </div>
</div>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
 <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>