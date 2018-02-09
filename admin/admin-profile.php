<?php 

include('header.php');
include('sidebar.php');


$sql = "select * from multiusers_admin";
$rows = $con->query($sql);



?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"> 
      <h1>
      ADMIN PROFILE
      </h1>
      <ol class="breadcrumb">
         <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Admin Profile</li>
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
            <div class="col-md-6">
               <div class="panel panel-info">
                  <div class="panel-heading">Profile Info </div>
                  <div class="panel-body">
                      <?php while($row = $rows->fetch_assoc()): 
                      $pwd = $row['admin_password'];

                      ?>
                     <form class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">                
                        <div class="form-group">
                           <div class="col-md-4 col-sm-4 col-sx-12">
                              <label for="name" class="control-label">Email </label><span id="sp">:</span>
                           </div>
                           <div class="col-md-6 col-sm-6 col-sx-12">
                              <input type="email" class="form-control" name="tleamil" value="<?php echo $row['admin_email']; ?>" disabled>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4 col-sm-4 col-sx-12">
                              <label for="name" class="control-label">User Name </label><span id="sp">:</span>
                           </div>
                           <div class="col-md-6 col-sm-6 col-sx-12">
                              <input type="text" class="form-control" name="tluname" value="<?php echo $row['admin_username']; ?>" disabled>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4 col-sm-4 col-sx-12">
                              <label for="name" class="control-label">Password </label><span id="sp">:</span>
                           </div>
                           <div class="col-md-6 col-sm-6 col-sx-12">
                              <input type="password" class="form-control" name="tlpass" 
                              value="<?php echo $pwd; ?>" disabled>
                           </div>
                        </div>
                        <br>
                     </form>
                     <?php endwhile; ?> 
                  </div>
               </div>
            </div>
         
            <!-- panel1 end -->
            <div class="col-md-6">
               <form class="form-horizontal" method="POST" action="#" role="form" enctype="multipart/form-data">
               <div class="panel panel-info">
                  <div class="panel-heading">Update Profile Info </div>
                     <div class="panel-body">               
                        <div class="form-group">
                           <div class="col-md-4 col-sm-4 col-sx-12">
                              <label for="name" class="control-label">Email </label><span id="sp">:</span>
                           </div>
                           <div class="col-md-6 col-sm-6 col-sx-12">
                              <input type="email" class="form-control" name="tleamil">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4 col-sm-4 col-sx-12">
                              <label for="name" class="control-label">User Name </label><span id="sp">:</span>
                           </div>
                           <div class="col-md-6 col-sm-6 col-sx-12">
                              <input type="text" class="form-control" name="tluname">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-4 col-sm-4 col-sx-12">
                              <label for="name" class="control-label">Password </label><span id="sp">:</span>
                           </div>
                           <div class="col-md-6 col-sm-6 col-sx-12">
                              <input type="text" class="form-control" name="tlpass">
                           </div>
                        </div>
                     </div>
                     <div class="box-footer text-center">                          
                           <button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspUpdate Info</button>
                              &nbsp
                           <button type="reset" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>&nbspCancel</button>   
                     </div>               
               </div>
                     </form>

            </div>
         </div>
      </div>              
   </section>
</div>
<?php include("footer.php");?>