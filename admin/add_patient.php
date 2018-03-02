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
            <a href="list_of_patients.php" class="btn btn-primary pull-right"><i class="fa fa-navicon" aria-hidden="true"></i>&nbspList Of Patients</a>
            <br>
            <br>
            <br>
            <div class="panel panel-info">
               <div class="panel-heading">Add Patient</div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form" method="post" action="save_patient_info.php" enctype="multipart/form-data">  
                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Username </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="puser">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Email </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="email" class="form-control" name="pemail">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Password </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="password" class="form-control" name="ppass">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Firstname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="pfname">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Lastname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="plname">
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Middlename </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="pmname">
                        </div>
                     </div>
                     
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">     
                           <label class="control-label">Birthdate </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="pbdate" id="datepicker">
                           </div>
                        </div>
                     </div>                  
                  </div>
                  

                  <div class="col-md-6">
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Age </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="page">
                        </div>
                     </div>         
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Contact No. </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="pcont">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Guardian </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="pgrd">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Address </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="padd" placeholder="House No./Street/Barangay"><br>
                           <select class="form-control" name="pprov" id="choice" onChange="changecat(this.value);">
                               <option value="" disabled selected>Select Province</option>
                               <option value="Nueva Ecija">Nueva Ecija</option>
                               <option value="Bulacan">Bulacan</option>
                               <option value="Tarlac">Tarlac</option>
                           </select>
                           <br>
                           <select class="form-control" name="pcity" id="category">
                               <option value="" disabled selected>Select City</option>
                           </select>
                        </div>
                     </div>
                     <br>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">  
                     <div class="button-group pull-right">
                        <button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspAdd Patient Info</button>
                        &nbsp
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>&nbspCancel</button>
                     </div>
                  </div>       
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php include("footer.php");?>