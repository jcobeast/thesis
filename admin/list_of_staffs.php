<?php 
include("header.php");
include('sidebar.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        Staffs 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staffs </li>
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
    <a href="add_staff.php" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbspAdd Staffs </a>
   <br>
   <br>
   <br>
         <div class="panel panel-info">
	          <div class="panel-heading">Staffs List </div>
		         <div class="panel-body">
             <div class="table-responsive">
              <div class="box-body table-responsive no-padding">
                           <table id="example1" class="table table-hover">
                              <thead>
                                 <tr>
                                    <th> Staff ID NO. </th>
                                    <th> Fullname </th>
                                    <th> Email </th>
                                    <th> Contact No. </th>
                                    <th> Description </th>
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                               
                                  $sql = "SELECT * From staff_info";
                                  $result = $con->query($sql);
                                  while($row = $result->fetch_assoc()): ?>
                                  <tr>
                                    <td><?=$row['staff_id'];?></td>
                                    <td><?=$row['staff_firstname'].' '.$row['staff_lastname'];?></td>
                                    <td><?=$row['email'];?></td>
                                    <td><?=$row['staff_contnum'];?></td>
                                    <td><?=$row['staff_desc'];?></td>
                                    <td><a href="#" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                  </tr>
                                  <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> Staff ID NO. </th>
                                    <th> Fullname </th>
                                    <th> Email </th>
                                    <th> Contact No. </th>
                                    <th> Description </th>
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