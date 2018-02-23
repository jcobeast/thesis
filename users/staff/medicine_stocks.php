<?php 
include("../header.php");
include('susidebar.php');
$sql = "SELECT * from medicines";
$result = $con->query($sql);
?>
    <div class = "modal fade" id = "edit_med" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
        <div class = "modal-dialog" role = "document">
          <div class = "modal-content">
            <div class = "modal-header">
              <button type = "button" class = "close" data-dismiss = "modal" 
              aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
              <h4 class = "modal-title" id = "myModallabel">Edit Details</h4>
            </div>
            <div id = "edit_med_query">
            
            </div>
          </div>
        </div>
      </div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        MEDICINES
      </h1>
      <ol class="breadcrumb">
        <li><a href="staff.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Medicine Stocks </li>
      </ol>
       
        <div class="content">
	   <div class="container-fluid">
           <?php if(isset($asuccess)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Added Supervisors successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($deasucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deactivated Successfully.</strong>
</div>
   <?php } ?>
            <?php if(isset($updsucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updated successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($upderr)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updated Successfully.</strong>
</div>
   <?php } ?>
           <?php if(isset($success)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($error)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted Successfully.</strong>
</div>
   <?php } ?>
   <br>

      <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-flask" aria-hidden="true"></i>&nbspMedicine Stocks</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i>&nbspAdd New Medicine</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                  <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> Medicine ID </th>
                                    <th> Medicine Name </th>
                                    <th> Medicine Description </th>
                                    <th> Quantity </th>
                                    <th> Price </th>
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                     <?php  
                                  
                                while($row = $result->fetch_assoc()): ?>
                              <tr id="<?=$row['med_id'];?>">
                                <td><?=$row['med_id'];?></td>
                                <td><?=$row['med_name'];?></td>
                                <td><?=$row['med_desc'];?></td>
                                <td><?=$row['med_quantity'];?></td>
                                <td><?=$row['med_price'];?></td>
                                <td>
                                  <center>
                                  <button type="button" class = "btn btn-primary btn-xs med_id" name = "<?php echo $row['med_id']?>" data-toggle = "modal" data-target = "#edit_med"><span class="glyphicon glyphicon-edit"></span></button>

                                  <button type="button" class="btn btn-danger btn-xs meddelete"><span class="glyphicon glyphicon-trash"></span></button>
                                  </center>
                                </td>
                              </tr>
                              <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> Medicine ID </th>
                                    <th> Medicine Name </th>
                                    <th> Medicine Description </th>
                                    <th> Quantity </th>
                                    <th> Price </th>
                                    <th> Action </th>
                                 </tr>
                              </tfoot>
                  </table>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form class="form-horizontal" role="form" method="post" action="add_medicine.php" enctype="multipart/form-data">
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Medicine name </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="mname">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label">Medicine description </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="mdesc">
                        </div>
                      </div>
                       <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label"> Quantity </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="number" class="form-control" min="1" max="100" name="mquantity">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                           <label class="control-label"> Price </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                           <input type="text" class="form-control" name="mamount">
                        </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspAdd New Medicine</button>
                            &nbsp
                            <button type="reset" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i>&nbspCancel</button>
                          </div>
                     </div>
                  </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
      


<?php include('../footer.php');?>