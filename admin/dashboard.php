<?php 
include("header.php");
include("sidebar.php");
?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         DASHBOARD
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li class="active">Dashboard</li>
      </ol>
    </section>
      <!-- Main content -->
    <section class="content">
         <!-- Small boxes (Stat box) -->
         <div class="row">
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-aqua">
                  <div class="inner">
                      <?php 
                        $tm    = "SELECT * FROM patient_info";
                        $tmresult = $con->query($tm);
                        $tmcount  = mysqli_num_rows($tmresult);
                        ?>
                     <h3><?php echo $tmcount;?></h3>
                     <p>Patients</p>
                  </div>
                  <div class="icon">
                     <i class="ion-ios-people"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-green">
                  <div class="inner">
                     <?php 
                        $gm    = "SELECT * FROM staff_info";
                        $gmresult = $con->query($gm);
                        $gmcount  = mysqli_num_rows($gmresult);
                        ?>
                     <h3><?php echo $gmcount;?></h3>
                     <p>Staffs </p>
                  </div>
                  <div class="icon">
                     <i class="ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-yellow">
                  <div class="inner">
                   <?php 
                        $tr  = "SELECT * FROM doctor_info";
                        $trresult = $con->query($tr);
                        $trcount  = mysqli_num_rows($trresult);
                        ?>
                     <h3><?php echo $trcount;?></h3>
                     <p>Doctor </p>
                  </div>
                  <div class="icon">
                     <i class="ion-person-stalker"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
               <!-- small box -->
               <div class="small-box bg-red">
                  <div class="inner">
                     <?php 
                        $co    = "SELECT * FROM multiusers_admin";
                        $coresult = $con->query($co);
                        $cocount  = mysqli_num_rows($coresult);
                        ?>
                     <h3><?php echo $cocount;?></h3>
                     <p>Administrator </p>
                  </div>
                  <div class="icon">
                     <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
               </div>
            </div>
            <!-- ./col -->
         </div>
         <!-- /.row -->
         <!-- Main row -->

          <div class="row">
            <div class="container-fluid">
              <div class="col-md-8">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Appointment Status</h3>

                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                              </div>
                              <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <table id="example1" class="table table-bordered table-hover dataTable">
                                <thead>
                                  <tr>
                                    <th>Patient ID</th>
                                    <th>Patient Email</th>
                                    <th>Patient Username</th>
                                    <th>Patient Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                        <?php 
                                        $co    = "SELECT * FROM patient_info";
                                        $coresult = $con->query($co);
                                        $row  = mysqli_num_rows($coresult);
                                        ?>

                                        <?php while($row = $coresult->fetch_assoc()): ?>
                                    <td><?php echo $row['pat_id']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><span class="label label-success">Approved</span></td>
                                  </tr>
                                        <?php endwhile; ?>
                                </tbody>


                              </table>
                            </div>
                       <!-- /.box-body -->
                </div>
              </div>
                      <div class="col-md-4">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Notifications</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-bell"></i> Good day!</h4>
                You have new appointment.
              </div>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-exclamation-circle"></i> Oops!</h4>
                Need backup database.
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
              <div class="col-md-4"> 
                <div class="box box-success">
                  <div class="box-header">
                    <h3 class="box-title">Date Now</h3>
                    <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                              </div>
                  </div>
                  <div class="box-body">
                    <!-- Date -->
                    <div class="form-group">
                      <label>Date:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label>Schedule Today:</label>

                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="reservation">
                      </div>
                      <!-- /.input group -->
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>        
              </div>
            </div>
          </div>
    </section>

</div>
            <!-- /.content -->
<?php include("footer.php");?>