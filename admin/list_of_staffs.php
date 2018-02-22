<?php 
include("header.php");
include('sidebar.php');

$sql = "SELECT * From staff_info";
$result = $con->query($sql);
?>
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Edit Details</h4>  
                </div>  
                <div class="modal-body" id="staff_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>  
           </div>  
      </div>  
 </div>

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
  <strong>Added Staff successfully.</strong>
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
  <strong>Saving data Unsuccessfully.</strong>
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
                                  while($row = $result->fetch_assoc()): 
                                  ?>
                                  <tr id="<?php echo $row['staff_id']; ?>">
                                    <td><?=$row['staff_id'];?></td>
                                    <td><?=ucfirst($row['staff_firstname']).' '.ucfirst($row['staff_middlename'][0]).'.'.' '.$row['staff_lastname'];?></td>
                                    <td><?=$row['email'];?></td>
                                    <td><?=$row['staff_contnum'];?></td>
                                    <td><?=$row['staff_desc'];?></td>
                                    <td>
                                      <button type="button" class="btn btn-success btn-xs update"><span class="glyphicon glyphicon-edit"></span></button>

                                      <button type="button" class="btn btn-danger btn-xs delete"><span class="glyphicon glyphicon-trash"></span></button>
                                    </td>
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