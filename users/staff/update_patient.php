<?php
   include '../dbconfig.php';
   $edit_patient = $con->query("SELECT * FROM `patient_info` WHERE `pat_id` = '$_REQUEST[pat_id]'") or die(mysqli_error());
   $row_patient = $edit_patient->fetch_array();
?>
<form method = "POST" action = "save_patient_update.php?pat_id=<?php echo $row_patient['pat_id']?>" enctype = "multipart/form-data">
   <div class  = "modal-body">
         <div class = "form-group">
            <label>Student ID:</label>
            <input type = "text" name = "pid" value = "<?php echo $row_patient['pat_id']?>" required = "required" class = "form-control" readonly="true"/>
         </div>
         <div class = "form-group">
            <label>Username:</label>
            <input type = "text" name = "puser" value = "<?php echo $row_patient['username']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Firstname:</label>
            <input type = "text" name = "pfname" value = "<?php echo $row_patient['pat_firstname']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Middlename:</label>
            <input type = "text" name = "pmname" value = "<?php echo $row_patient['pat_middlename']?>" placeholder = "(Optional)" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Lastname:</label>
            <input type = "text" name = "plname" value = "<?php echo htmlentities($row_patient['pat_lastname'])?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Contact No.:</label>
            <input type = "text" value = "<?php echo $row_patient['pat_contnum']?>" name = "pcont" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Age:</label>
            <input type = "text" value = "<?php echo $row_patient['pat_age']?>" name = "page" required = "required" class = "form-control" />
         </div>
  
         <div class = "form-group">
            <label>Birthdate:</label>
               <div class="input-group date">
                  <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                  </div>
                     <input type="text" class="form-control pull-right" name="pbdate" value = "<?php echo $row_patient['birthdate']?>" placeholder="yyyy-mm-dd">
               </div>
         <div class = "form-group">
            <label>Guardian:</label>
            <input type = "text" value = "<?php echo $row_patient['pat_guardian']?>" name = "pgrd" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Address:</label>
            <input type = "text" value = "<?php echo $row_patient['pat_address']?>" name = "padd" required = "required" class = "form-control" />
         </div>


   <div class = "modal-footer">
              <button class = "btn btn-danger" data-dismiss = "modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button>

              <button  class = "btn btn-success" name="submit"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
            </div>
</form>  