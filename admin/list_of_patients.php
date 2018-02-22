<?php 
include("header.php");
include('sidebar.php');

$sql = "SELECT * FROM `patient_info` ORDER BY pat_firstname ASC";
$result = $con->query($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Patients List
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Patients List </li>
      </ol>
       
        <div class="content">
	   <div class="container-fluid">
           <?php if(isset($asuccess)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Added Patient successfully.</strong>
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
  <strong>Added successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($error)){ ?>
   <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted Unsuccessfully.</strong>
</div>
   <?php } ?>
   <a href="add_patient.php" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbspAdd Patients</a>
   <br>
   <br>
   <br>
         <div class="panel panel-info">
	          <div class="panel-heading">Patients </div>
		         <div class="panel-body table-responsive">

           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> Patient ID </th>
                                    <th> Patient Fullname </th>
                                    <th> Patient Age </th>
                                    <th> Birthdate </th>
                                    <th> Contact No. </th>
                                    <th> Guardian </th>
                                    <th> Address </th>
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                <?php  
                                while($row = $result->fetch_assoc()):
                                ?>
                              <tr id="<?php echo $row["pat_id"]; ?>">
                                <td><?=$row['pat_id'];?></td>
                                <td><?=ucfirst($row['pat_firstname']).' '.ucfirst($row['pat_middlename'][0]).'.'.' '.$row['pat_lastname'];?></td>
                                <td><?=$row['pat_age'];?></td>
                                <td><?=$row['birthdate'];?></td>
                                <td><?=$row['pat_contnum'];?></td>
                                <td><?=$row['pat_guardian'];?></td>
                                <td><?=$row['pat_address'];?></td>
                                <td>
                                <button type="button" class="btn btn-success btn-xs patupdate"><span class="glyphicon glyphicon-edit"></span></button>

                                <button type="button" class="btn btn-danger btn-xs patdelete"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                             </tr>
                             <?php  endwhile;  ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> Patient ID </th>
                                    <th> Patient Fullname </th>
                                    <th> Patient Age </th>
                                    <th> Birthdate </th>
                                    <th> Contact No. </th>
                                    <th> Guardian </th>
                                    <th> Address </th>
                                    <th> Action </th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <!-- /.box-body -->

                     </div>
                     <!-- /.box -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      


<?php include('footer.php');?>