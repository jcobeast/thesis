<?php  

include '../dbconfig.php';
$id = $_GET['id'];

 if(isset($id))  
 {  
      $output = '';
      $query = "SELECT * FROM staff_info WHERE staff_id = '$id'";  
      $result = $con->query($query);   
      while($row = $result->fetch_array()) 
      {  
           $output .= '<form class="form-horizontal" role="form" method="post" action="save_staff_update.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">ID </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="sid" value="'.$row["staff_id"].'" readonly="true"/>
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Username </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="suser" value="'.$row["username"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Firstname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="sfname" value="'.$row["staff_firstname"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Lastname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="slname" value="'.$row["staff_lastname"].'">
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Middlename </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="smname" value="'.$row["staff_middlename"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Contact No. </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="scont" value="'.$row["staff_contnum"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Description </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="desc" value="'.$row["staff_desc"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-sx-12">
                          <button type="submit" name="submit" class="btn btn-success pull-right"><i class="fa fa-check" aria-hidden="true"></i>&nbspSave changes</button>
                        </div>
                     </div>
                  </form>';  
      }  
      echo $output;  
 }  
 ?>