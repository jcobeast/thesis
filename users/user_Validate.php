<?php
include ('dbconfig.php');

$email = $password = "";
$error = $emailerr = $passerr = "";



if (isset($_POST['btnLogin'])) {

  if (empty($_POST['email'])) {

    $error =  '<div class="alert alert-danger alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              Incorrect <b>username</b> or <b>password</b> try again ! 
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
    
    $sql_query = "SELECT * FROM staff_info WHERE staff_email = '$email'";
    $check_email = mysqli_query($con, $sql_query);
    $check_email_row = mysqli_num_rows($check_email);

    if ($check_email_row > 0) {
    
      while ($row = mysqli_fetch_assoc($check_email)) {
          
        $db_password = $row['staff_password'];

          if ($password == $db_password) {
        
              echo "<script>window.location.href='staff/suexecute.php'</script>";


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