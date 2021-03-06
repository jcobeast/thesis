<?php 
   include('header.php');
   include('sidebar.php');
?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add New Doctor
      </h1>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Doctor </li>
      </ol>
      <div class="content">
         <div class="container-fluid">
            <?php
               if(isset($success)){?>
            <div class="alert alert-success" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>Doctor is added sucessfully</strong> 
            </div>
            <?php }
               ?>
            <?php
               if(isset($error)){?>
            <div class="alert alert-warning" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <strong>Doctor is not added at this time try again!</strong> 
            </div>
            <?php }
               ?>
               <a href="list_of_doctors.php" class="btn btn-primary pull-right"><i class="fa fa-navicon" aria-hidden="true"></i>&nbspList Of Doctor</a>
            <br>
            <br>
            <br>
            <div class="panel panel-info">
               <div class="panel-heading">Add Doctor Info </div>
               <div class="panel-body">
                  <form class="form-horizontal" role="form" method="post" action="save_doc_info.php" enctype="multipart/form-data">
                     <div class="col-md-6">
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Username </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="duser">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Firstname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dfname">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Lastname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dlname">
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Middlename </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dmname">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Email </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="email" class="form-control" name="demail">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">           
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Password </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="password" class="form-control" name="dpass">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Contact No. </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dcont">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Description </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <textarea type="text" class="form-control" name="desc" placeholder="Description here..."></textarea>
                        </div>
                     </div>
                     <br>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">  
                     <div class="button-group pull-right">
                        <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check" aria-hidden="true"></i>&nbspAdd Doctor Info</button>
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