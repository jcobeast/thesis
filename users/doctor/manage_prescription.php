<?php 
include("../header.php");
include('trsidebar.php');
$sql = "SELECT * from manage_prescriptions LEFT JOIN patient_info ON manage_prescriptions.pat_id = patient_info.pat_id";
$result = $con->query($sql);
?>

    <div class = "modal fade" id = "edit_pres" 
      tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
        <div class = "modal-dialog" role = "document">
          <div class = "modal-content">
            <div class = "modal-header">
              <button type = "button" class = "close" data-dismiss = "modal" 
              aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
              <h4 class = "modal-title" id = "myModallabel">Edit Details</h4>
            </div>
            <div id = "edit_pres_query">
            
            </div>
          </div>
        </div>
      </div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        Presciption
      </h1>
      <ol class="breadcrumb">
        <li><a href="doctor.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Prescription </li>
      </ol>
       
    <div class="content">
	    <div class="container-fluid">
        <?php if(isset($asuccess)){ ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Added Labtest successfully.</strong>
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
             <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Updated Successfully.</strong>
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
            <strong>Incomplete details! Please fill out all fields.</strong>
          </div>
             <?php } ?>
             <br>

      <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-flask" aria-hidden="true"></i>&nbspPrescription List</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i>&nbspAdd New Prescription</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                  <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> # </th>
                                    <th> Patient Name </th>
                                    <th> Date of Prescription </th>
                                    <th> Description </th>
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                <?php                  
                                while($row = $result->fetch_assoc()): ?>
                                <tr id="<?php echo $row["pat_id"]; ?>">
                                <td><?=$row['pat_id'];?></td>
                                <td><?=$row['pat_firstname'];?></td>
                                <td><?=$row['date_of_prescription'];?></td>
                                <td><?=$row['description'];?></td>
                                <td> 
                                  <center>
                                  <button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span>
                                  </button>

                                  <button type="button" class = "btn btn-primary btn-xs test_id" name = "<?php echo $row['test_id']?>" data-toggle = "modal" data-target = "#edit_lab"><span class="glyphicon glyphicon-edit"></span></button>

                                  <button type="button" class="btn btn-danger btn-xs labdelete"><span class="glyphicon glyphicon-trash"></span></button>
                                  </center>
                                </td>
                             </tr>
                             <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> # </th>
                                    <th> Patient Name </th>
                                    <th> Date of Prescription </th>
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
                <form class="form-horizontal" role="form" method="post" action="add_prescription.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Patient name </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <select class="form-control" name="patname">
                               <?php 
                              while($rows = $result->fetch_assoc()):
                               ?>
                                  <option value="<?= $rows['pat_id']; ?>"><?= $rows['pat_firstname'];?></option>
                              <?php endwhile; ?>
                           </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Case History </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <textarea class="form-control" name="pathistory"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Medication </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                          <textarea class="form-control" name="medication"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Description </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="desc">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Date </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="date" id="datepicker">
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