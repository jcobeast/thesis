<?php
include ('dbconfig.php');

$email = $password = "";
$error = $emailerr = $passerr = "";

if (isset($_POST['btnLogin'])) {

  if (empty($_POST['email'])) {

    $error =  '<div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              Incorrect <b>username</b>try again ! 
                            </div>';
  } else {
    $email = $_POST['email'];
  }

  if (empty($_POST['password'])) {
    $error =  '<div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              Incorrect <b>username</b> or <b>password</b> try again ! 
                            </div> ';
  } else {
    $password = $_POST['password'];
  }

  if ($email && $password) {
    
    $sql_query = "SELECT username, email, password, acc_type 
                  FROM staff_info
                  UNION
                  SELECT username, email, password, acc_type 
                  FROM doctor_info
                  UNION
                  SELECT username, email, password, acc_type 
                  FROM patient_info WHERE email = '$email'";
    $check_email = mysqli_query($con, $sql_query);
    $check_email_row = mysqli_num_rows($check_email);

    if ($check_email_row > 0) {
    
      while ($row = mysqli_fetch_assoc($check_email)) {

        $user_id = $row['email'];  
        $db_password = $row['password'];
        $db_acc_type = $row['acc_type'];

          if ($password == $db_password) {

              session_start();

              $_SESSION['email'] = $user_id; 

              if ($db_acc_type == "1") {
                echo "<script>window.location.href='staff/staff.php'</script>";
              
              } elseif ($db_acc_type == "2") {
                echo "<script>window.location.href='doctor/doctor.php'</script>";

              } else {
                echo "<script>window.location.href='patient/patient.php'</script>";
              }

          } else {
            $passerr =  '<div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              Password <b>incorrect</b> try again ! 
                            </div> ';
          }

      }  
    
    } else {
      $emailerr =  '<div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              Email <b>not</b> <b>registered</b> try again ! 
                            </div> ';
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Users | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
     
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Users</b> Login</a>
  </div>
                     
        <?php echo $error; ?>
        <?php echo $emailerr; ?>
        <?php echo $passerr; ?>            
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">   
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-flat">Log in</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
