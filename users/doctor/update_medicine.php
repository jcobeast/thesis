<?php
   include '../dbconfig.php';
   $edit_med = $con->query("SELECT * FROM `medicines` WHERE `med_id` = '$_REQUEST[med_id]'") or die(mysqli_error());
   $row_med = $edit_med->fetch_array();
?>
<form method = "POST" action = "save_medicine_update.php?med_id=<?php echo $row_med['med_id']?>" enctype = "multipart/form-data">
   <div class  = "modal-body">
         <div class = "form-group">
            <label>Labtest ID:</label>
            <input type = "text" name = "mid" value = "<?php echo $row_med['med_id']?>" required = "required" class = "form-control" readonly="true"/>
         </div>
         <div class = "form-group">
            <label>Medicine Name:</label>
            <input type = "text" name = "medname" value = "<?php echo $row_med['med_name']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Description:</label>
            <input type = "text" name = "meddesc" value = "<?php echo $row_med['med_desc']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Quantity:</label>
            <input type="number" name="mquantity" class="form-control" min="0" max="100" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Price:</label>
            <input type = "text" name = "medprice" value = "<?php echo $row_med['med_price']?>" required = "required" class = "form-control" />
         </div>
   <div class = "modal-footer">
              <button class = "btn btn-danger" data-dismiss = "modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button>

              <button  class = "btn btn-success" name="submit"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
            </div>
</form>  