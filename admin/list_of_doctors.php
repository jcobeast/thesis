<?php 
include("header.php");
include('sidebar.php');

$sql = "SELECT * FROM doctor_info";
$result = $con->query($sql);
?>
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Edit Details</h4>  
                </div>  
                <div class="modal-body" id="doctor_detail">  
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
      Clinic Doctor
    </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Clinic Doctor </li>
      </ol>
       
        <div class="content">
	   <div class="container-fluid">
           <?php if(isset($asuccess)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Added doctor Account successfully.</strong>
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
  <strong>Deleted Successfully.</strong>
</div>
   <?php } ?>
   <a href="add_doctor.php" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbspAdd Clinic Doctor</a>
   <br/><br/>
         <div class="panel panel-info">
	          <div class="panel-heading">Clinic Doctor List </div>
		         <div class="panel-body">
              <div class="box-body table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
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
                                <tr id="<?php echo $row["doc_id"]; ?>">
                                <td><?='Dr.'.' '.ucfirst($row['doc_firstname']).' '.ucfirst($row['doc_middlename'][0]).'.'.' '.$row['doc_lastname'];?></td>
                                <td><?=$row['email'];?></td>
                                <td><?=$row['doc_contnum'];?></td>
                                <td><?=$row['doc_desc'];?></td>
                                <td>
                                <button type="button" class="btn btn-success btn-xs view_data"><span class="glyphicon glyphicon-edit"></span></button>

                                <button type="button" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-trash"></span></button>
                                </td>
                             </tr>
                             <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
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