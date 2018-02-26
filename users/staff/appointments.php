<?php 
include("../header.php");
include('susidebar.php');
$sql = "SELECT * FROM appointments LEFT JOIN patient_info ON appointments.pat_id=patient_info.pat_id ORDER BY appointments.app_schedule DESC";
?>

<div class = "modal fade" id = "edit_apps" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
        <div class = "modal-dialog" role = "document">
          <div class = "modal-content">
            <div class = "modal-header">
              <button type = "button" class = "close" data-dismiss = "modal" 
              aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
              <h4 class = "modal-title" id = "myModallabel">Edit Details</h4>
            </div>
            <div id = "edit_apps_query">
            
            </div>
          </div>
        </div>
      </div>
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
  <strong>Added appointment successfully.</strong>
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
        <div class="col-sm-12 col-xs-12 col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-flask" aria-hidden="true"></i>&nbspAppointments</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i>&nbspAdd New Appointment</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane table-responsive active" id="tab_1">
                  <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Patient Name </th>
                                    <th> Date of Appointment </th>
                                    <th> Description </th>
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php  
                                    $result = $con->query($sql);                 
                                    while($row = $result->fetch_assoc()):?>
                              <tr id="<?=$row['app_id'];?>">
                                <td><?=$row['app_id'];?></td>
                                <td><?=$row['pat_firstname'];?></td>
                                <td><?=$row['app_schedule'];?></td>
                                <td><?=$row['app_description'];?></td>
                                <td>
                                  <center>
                                  <button type="button" class="btn btn-primary btn-xs appupdate" name = "<?php echo $row['app_id']?>" data-toggle = "modal" data-target = "#edit_apps"><span class="glyphicon glyphicon-edit"></span></button>

                                  <button type="button" class="btn btn-danger btn-xs appdelete"><span class="glyphicon glyphicon-trash"></span></button>
                                  </center>
                                </td>

                              </tr>
                              <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> ID </th>
                                    <th> Patient Name </th>
                                    <th> Date of Appointment </th>
                                    <th> Description </th>
                                    <th> Action </th>
                                 </tr>
                              </tfoot>
                  </table>
              </div>
              <!-- /.tab-pane -->
              <?php 
              $sql = "SELECT pat_id, pat_firstname FROM `patient_info`";
              $result = $con->query($sql);   
               ?>
              <div class="tab-pane" id="tab_2">
                <form class="form-horizontal" role="form" method="post" action="add_appointment.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-3 col-sm-12 col-xs-12 col-md-offset-1">
                           <label class="control-label">Patient name</label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <select class="form-control" name="aname">
                               <?php 
                              while($rows = $result->fetch_assoc()):
                               ?>
                                  <option value="<?= $rows['pat_id']; ?>"><?= $rows['pat_firstname'];?></option>
                              <?php endwhile; ?>
                           </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-12 col-xs-12 col-md-offset-1">
                           <label class="control-label">Appointment Description </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="adesc">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-12 col-xs-12 col-md-offset-1">
                           <label class="control-label">Appointment Schedule </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="asched" id="datepicker">
                           </div>
                        </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspAdd New Test</button>
                            &nbsp
                            <button type="reset" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>&nbspCancel</button>
                          </div>
                     </div>
                  </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
      


<?php include('../footer.php');?>