<?php 
include("header.php");
include('sidebar.php');
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
  <strong>Added Supervisors successfully.</strong>
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
  <strong>Updated Unsuccessfully.</strong>
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
  <strong>Deleted Unsuccessfully.</strong>
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
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                     <?php  $sql = "SELECT * from patient_info";
                                  $result = $con->query($sql);                 
                                while($row = $result->fetch_assoc()): ?>
                              <tr>
                                <td><?=$row['pat_id'];?></td>
                                <td><?=ucfirst($row['pat_firstname']).' '.ucfirst($row['pat_middlename'][0]).'.'.' '.$row['pat_lastname'];?></td>
                                <td><?=$row['pat_date_added'];?></td>
                                <td>
                                  <center>
                                  <button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button>

                                  <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span></button>

                                  <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
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
                                    <th> Action </th>
                                 </tr>
                              </tfoot>
                  </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form class="form-horizontal" role="form" method="post" action="add_medicine.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Patient name </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="mname">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Appointment Description </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="mdesc">
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
      


<?php include('footer.php');?>