<?php 

include('../header.php');
include('psidebar.php');


$sql = "SELECT * FROM manage_prescriptions LEFT JOIN patient_info ON manage_prescriptions.pat_id=patient_info.pat_id WHERE patient_info.username='$session_name'";



?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"> 
      <h1>
      MY RECORDS
      </h1>
      <ol class="breadcrumb">
         <li><a href="patient.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">My Records</li>
      </ol>
      <div class="content">
         <div class="container-fluid">
            <?php
            if(isset($success)){?>
            <div class="alert alert-success" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>Team_Leaders is added sucessfully</strong>
            </div>
            <?php }
            ?>
            <?php
            if(isset($error)){?>
            <div class="alert alert-warning" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>Team_Leaders is not added at this time try again!</strong>
            </div>
            <?php }
            ?>
            <!-- panel1 -->
            <br><br>
            <div class="col-md-12">
               <div class="panel panel-info">
                  <div class="panel-heading">My Records </div>
                  <div class="panel-body">
                      <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    
                                    <th> Patient Name </th>
                                    <th> Case </th>
                                    <th> Medication </th>
                                    <th> Description </th>
                                    
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php  
                                    $result = $con->query($sql);                 
                                    while($row = $result->fetch_assoc()):
                                    $fname = $row['pat_firstname'].' '.$row['pat_lastname'];

                                  ?>
                              <tr>
                                
                                <td><?=$fname;?></td>
                                <td><?=$row['case_history'];?></td>
                                <td><?=$row['medication'];?></td>
                                <td><?=$row['description'];?></td>
                              </tr>
                              <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                   
                                    <th> Patient Name </th>
                                    <th> Case </th>
                                    <th> Medication </th>
                                    <th> Description </th>
                                    
                                 </tr>
                              </tfoot>
                  </table>
                      
                  </div>
               </div>
            </div>
         
            <!-- panel1 end -->
         </div>
      </div>              
   </section>
</div>
<?php include("../footer.php");?>