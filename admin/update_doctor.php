<?php  

include '../dbconfig.php';
 if(isset($_POST["id"]))  
 {  
      $output = '';
      $query = "SELECT * FROM doctor_info WHERE doc_id = '".$_POST["id"]."'";  
      $result = $con->query($query);   
      while($row = $result->fetch_array()) 
      {  
           $output .= '<form class="form-horizontal" role="form" method="post" action="save_doc_info.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Username </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="duser" value="'.$row["username"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Firstname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dfname" value="'.$row["doc_firstname"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Lastname </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dlname" value="'.$row["doc_lastname"].'">
                        </div>
                     </div>
                      <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Middlename </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dmname" value="'.$row["doc_middlename"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Email </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="email" class="form-control" name="demail" value="'.$row["email"].'">
                        </div>
                     </div>
         
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Password </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="password" class="form-control" name="dpass" value="'.$row["password"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Contact No. </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="dcont" value="'.$row["doc_contnum"].'">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-sx-12">
                           <label class="control-label">Description </label><span id="sp">:</span>
                        </div>
                        <div class="col-md-9 col-sm-9 col-sx-12">
                           <input type="text" class="form-control" name="desc" value="'.$row["doc_desc"].'">
                        </div>
                     </div>
                     <br>
                  </div>
                  </form>';  
      }  
      echo $output;  
 }  
 ?>