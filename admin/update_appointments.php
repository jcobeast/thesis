<?php
   include '../dbconfig.php';
   $edit_app = $con->query("SELECT appointments.app_id,appointments.pat_id,appointments.app_description,appointments.app_schedule, patient_info.pat_firstname FROM appointments LEFT JOIN patient_info ON appointments.pat_id=patient_info.pat_id WHERE appointments.app_id='$_REQUEST[app_id]'") or die(mysqli_error());
   $row_app= $edit_app->fetch_array();
   
?>
<form method = "POST" action = "save_appointment_update.php?app_id=<?php echo $row_app['app_id']?>" enctype = "multipart/form-data">
   <div class  = "modal-body">
         <div class = "form-group">
            <label>App ID:</label>
            <input type = "text" name = "aid" value = "<?php echo $row_app['app_id']?>" required = "required" class = "form-control" readonly="true"/>
         </div>
         <div class = "form-group">
            <label>Patient Name:</label>
            <input type = "text" name = "appname" value = "<?php echo $row_app['pat_firstname']?>" required = "required" class = "form-control" readonly="true"/>
         </div>
         <div class = "form-group">
            <label>Appointment Description:</label>
            <input type = "text" name = "appdesc" value = "<?php echo $row_app['app_description']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Schedule:</label>
            <div class="input-group date">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input type="text" class="form-control pull-right" name="appsched" id="datepicker" value="<?php echo $row_app['app_schedule']?>">
                           </div>
         </div>
   <div class = "modal-footer">
              <button class = "btn btn-danger" data-dismiss = "modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button>

              <button  class = "btn btn-success" name="submit"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
            </div>
</form>  

<?php include 'datepicker.php'; ?>