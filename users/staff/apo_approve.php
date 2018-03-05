<?php 
include("../header.php");
include('susidebar.php');

$apo_id = $_GET['id'];


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        APPOINTMENTS
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Appointments </li>
      </ol>
       
        <div class="content">
     <div class="container-fluid">
           <?php if(isset($asuccess)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Action taken successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($deasucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deactivated Successfully.</strong>
</div>
   <?php } ?>
            <?php if(isset($updsucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updated successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($upderr)){ ?>
   <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updating Appointment Successful.</strong>
</div>
   <?php } ?>
           <?php if(isset($success)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($error)){ ?>
   <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted Successfully.</strong>
</div>
   <?php } ?>
   <br>

      <div class="row">
        <div class="container-fluid">
          <div class="panel panel-default">
            <?php 

              $sql = $con->query("SELECT * FROM appointments LEFT JOIN patient_info ON appointments.pat_id=patient_info.pat_id WHERE appointments.app_id='$apo_id'");
              $row= $sql->fetch_array();
              $fname = $row['pat_firstname'].' '.$row['pat_lastname'];

                if ($row['status'] == "0") {

                    $status = '<button type="button" class="btn btn-warning btn-lg">Pending</button>';
                } elseif ($row['status'] == "1") {
                    $status = '<button type="button" class="btn btn-success btn-lg">Approved</button>';
                } else {

                    $status = '<button type="button" class="btn btn-danger btn-lg">Rejected</button>';
                }
              ?>
            <div class="panel-body">
                <div class="col-md-12">
                  <h2 style="text-align: center;">
                    <?php 
                    echo $status;  
                    ?>
                  </h2>
                </div>
                <div class="col-md-12">
                  <h2 style="text-align: center;">
                    <?php 
                    echo $fname;
                     ?>
                  </h2>
                  <h4 style="text-align: center;">
                    <?php 
                      echo "Contact No. :";
                      echo '<p>'.$row['pat_contnum'].'<p>';
                     ?>
                  </h4>
                </div>
                <br>
                <br>
                <br>
                <div class="col-md-12">
                  <h4 style="font-weight: bold;">Description<span id="sp">:</span><h5><?php echo $row['app_description'];?></h5></h4>
                  <hr>
                </div>
                <div class="col-md-12">
                  <form method="POST" action="approve_appo.php?id=<?php echo $apo_id; ?>">
                      <div class = "form-group">
                        <label>Schedule:</label>
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                                <input type="text" name="sched" class="form-control pull-right" id="datepicker" value="<?php echo $row['app_schedule'];?>">
                            </div>
                      </div>
                      <div class="form-group">
                        <textarea name="message" class="col-md-12 col-sm-12 col-xs-12" style="height: 150px; resize: none;" placeholder="Enter your message here..."></textarea>
                      </div>
                      <div class="form-group"> 
                        <center>
                          <button type="submit" name="approve" class="btn btn-success btn-lg">Approve</button>
                          <button type="submit" name="decline" class="btn btn-danger btn-lg">Decline</button>
                        </center>
                      </div>         
                  </form>
                </div>
            </div>

          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    
<?php include('../footer.php');?>
<?php include 'datepicker.php'; ?>  