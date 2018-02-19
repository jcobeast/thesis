<?php include("header.php");
      include('sidebar.php');
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
		         <div class="panel-body">

           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> S No </th>
                                    <th> Patient User Name </th>
                                    <th> Patient Email </th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                     <?php
                                     $i=1;
                                $sql = "SELECT * FROM `patient_info` ORDER BY username ASC";
                                $result = $con->query($sql);
                                while($row = $result->fetch_assoc())
                                { 
                                ?>
                                <tr>
                                <td><?=$i;?></td>
                                <td><?=$row['username'];?></td>
                                  <td><?=$row['email'];?></td>
                                  <td><a href="#" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                             </tr>
                             <?php  $i++; }  ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> S No </th>
                                    <th> Patient User Name </th>
                                    <th> Patient Email </th>
                                    <th>Action</th>
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