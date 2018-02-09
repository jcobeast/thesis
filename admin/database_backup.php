<?php include("header.php");
      include('sidebar.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        DATABASE BACKUP
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Backup </li>
      </ol>       
        <div class="content">
	   <div class="container-fluid">
       <br>
       <br>
       <br>
         <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-database" aria-hidden="true"></i>&nbspBackup Database</a></li>
              <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-refresh" aria-hidden="true"></i>&nbspRestore Database</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="table-responsive">
                <div class="box-body table-responsive no-padding">
                  <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th> Table Name </th>
                                    <th> Table Description </th>
                                    <th> Action </th>
                                 </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Doctors Account</td>
                                  <td>Contains account of doctors</td>
                                  <td><button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspBackup</button></td>
                                </tr>
                                <tr>
                                  <td>Staffs Account</td>
                                  <td>Contains account of staffs</td>
                                  <td><button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspBackup</button></td>
                                </tr>
                                <tr>
                                  <td>Patients List</td>
                                  <td>Contains all the patients data and documents</td>
                                  <td><button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspBackup</button></td>
                                </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> Table Name </th>
                                    <th> Table Description </th>
                                    <th> Action </th>
                                 </tr>
                              </tfoot>
                  </table>
                </div>
              </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">
                      <div class="box-body">
                        <div class="form-group">
                          <div class="col-md-2 col-sm-12 col-xs-12 col-md-offset-2">
                             <label class="control-label">Restore Database </label><span id="sp">:</span> 
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                             <input type="file" id="exampleInputFile" name="restore">
                          </div>
                        </div>
                      </div>
                      <div class="box-footer">
                          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <button type="submit" class="btn btn-success" name="submit" ><i class="fa fa-check" aria-hidden="true"></i>&nbspRestore</button>
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
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      


<?php include('footer.php');?>