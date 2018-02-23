<?php
   include '../dbconfig.php';
   $edit_lab = $con->query("SELECT * FROM `labtest_lists` WHERE `test_id` = '$_REQUEST[test_id]'") or die(mysqli_error());
   $row_lab = $edit_lab->fetch_array();
?>
<form method = "POST" action = "save_labtest_update.php?test_id=<?php echo $row_lab['test_id']?>" enctype = "multipart/form-data">
   <div class  = "modal-body">
         <div class = "form-group">
            <label>Labtest ID:</label>
            <input type = "text" name = "tid" value = "<?php echo $row_lab['test_id']?>" required = "required" class = "form-control" readonly="true"/>
         </div>
         <div class = "form-group">
            <label>Test Name:</label>
            <input type = "text" name = "tname" value = "<?php echo $row_lab['test_name']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Description:</label>
            <input type = "text" name = "tdesc" value = "<?php echo $row_lab['test_desc']?>" required = "required" class = "form-control" />
         </div>
         <div class = "form-group">
            <label>Price:</label>
            <input type = "text" name = "tprice" value = "<?php echo $row_lab['test_amount']?>" required = "required" class = "form-control" />
         </div>
   <div class = "modal-footer">
              <button class = "btn btn-danger" data-dismiss = "modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button>

              <button  class = "btn btn-success" name="submit"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
            </div>
</form>  