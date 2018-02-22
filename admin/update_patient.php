<?php 
include('header.php');
include('sidebar.php');


?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Add New Patient
      </h1>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Patient </li>
      </ol>
      <div class="content">
         <div class="container-fluid">
            <?php
            if(isset($success)){?>
            <div class="alert alert-success" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>New Patient is added sucessfully</strong>
            </div>
            <?php }
            ?>
            <?php
            if(isset($error)){?>
            <div class="alert alert-warning" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>Patient is not added at this time try again!</strong>
            </div>
            <?php }
            ?>
            
            <br>
            <div class="panel panel-info">
               <div class="panel-heading">Update Patient</div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form" method="post" action="save_patient_update.php" enctype="multipart/form-data">
                     <div class="col-md-6 col-sm-6">
                         <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">ID </label><span id="sp">:</span> 
                              <input type="text" class="form-control" name="pid" value="'.$row["pat_id"].'" readonly="true"/>
                           </div>
                        </div>
                         <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Username </label><span id="sp">:</span> 
                              <input type="text" class="form-control" name="puser" value="'.$row["username"].'">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Firstname </label><span id="sp">:</span> 
                              <input type="text" class="form-control" name="pfname" value="'.$row["pat_firstname"].'">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Lastname </label><span id="sp">:</span> 
                              <input type="text" class="form-control" name="plname" value="'.$row["pat_lastname"].'">
                           </div>
                        </div>
                         <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Middlename </label><span id="sp">:</span>    
                              <input type="text" class="form-control" name="pmname" value="'.$row["pat_middlename"].'">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Contact No. </label><span id="sp">:</span>
                              <input type="text" class="form-control" name="pcont" value="'.$row["pat_contnum"].'">
                           </div>
                        </div>
                       
                     </div>


                     <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Age </label><span id="sp">:</span>     
                              <input type="text" class="form-control" name="page" value="'.$row["pat_age"].'">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Birthdate </label><span id="sp">:</span> 
                              <div class="input-group date">
                                 <div class="input-group-addon">
                                   <i class="fa fa-calendar"></i>
                                 </div>
                                 <input type="text" class="form-control pull-right" name="pbdate" id="datepicker" value="'.$row["birthdate"].'">
                              </div>
                           </div>
                        </div>
                         <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Guardian </label><span id="sp">:</span> 
                              <input type="text" class="form-control" name="pgrd" value="'.$row["pat_guardian"].'">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                              <label class="control-label">Address </label><span id="sp">:</span>
                              <input type="text" class="form-control" name="padd" placeholder="House No./Street/Barangay">
                              <br>
                              <select class="form-control" name="pprov" id="choice" onChange="changecat(this.value);">
                                  <option value="" disabled selected>Select Province</option>
                                  <option value="A">Nueva Ecija</option>
                                  <option value="B">Bulacan</option>
                                  <option value="C">Tarlac</option>
                              </select>
                               <br>
                              <select class="form-control" name="pcity" id="category">
                                  <option value="" disabled selected>Select City</option>
                              </select>
                           </div>
                        </div>
                     </div>
                        <div class="form-group">
                           <div class="col-md-12 col-sm-12 col-sx-12">
                             <button type="submit" name="submit" class="btn btn-success pull-right"><i class="fa fa-check" aria-hidden="true"></i>&nbspSave changes</button>
                           </div>
                        </div>
                  </form> 
               </div>
            </div>
         </div>
      </div>
   </section>
</div>








<?php include('footer.php'); ?>

