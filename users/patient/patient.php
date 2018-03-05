<?php include("../header.php");
      include("psidebar.php");
$sql = "SELECT * FROM appointments LEFT JOIN patient_info ON appointments.pat_id=patient_info.pat_id WHERE patient_info.username='$session_name'";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard | Patient
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
        <!-- Main content -->
    </section>
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
                              <h3 class="box-title">My Appointments</h3>

                              <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                              </div>
                              <!-- /.box-tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                              <table id="example1" class="table table-bordered table-hover dataTable">
                                <thead>
                                 <tr>
                                    <th> ID </th>
                                    <th> Patient Name </th>
                                    <th> Date of Appointment </th>
                                    <th> Description </th>
                                    <th> Status </th>
                                 
                                 </tr>
                              </thead>
                              <tbody>
                                  <?php  
                                    $result = $con->query($sql);                 
                                    while($row = $result->fetch_assoc()):

                                      if ($row['status'] == "0") {

                                          $status = '<button type="button" class="btn btn-warning btn-xs">Pending</button>';
                                      } elseif ($row['status'] == "1") {
                                          $status = '<button type="button" class="btn btn-success btn-xs">Approved</button>';
                                      } else {

                                          $status = '<button type="button" class="btn btn-danger btn-xs">Rejected</button>';
                                      }
                                      ?>
                              <tr id="<?=$row['app_id'];?>">
                                <td><?=$row['app_id'];?></td>
                                <td><?=$row['pat_firstname'];?></td>
                                <td><?=$row['app_schedule'];?></td>
                                <td><?=$row['app_description'];?></td>
                                <td><?=$status;?></td>
                              </tr>
                              <?php endwhile; ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th> ID </th>
                                    <th> Patient Name </th>
                                    <th> Date of Appointment </th>
                                    <th> Description </th>
                                    <th> Status </th>
                                 </tr>
                              </tfoot>

                              </table>
                            </div>
                       <!-- /.box-body -->
                </div>
              </div>
                      <div class="col-md-4">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Notice Board</h3>

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
                Please check your appointment today.
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
            </div>
          </div>
    </section>
    </div>
	   
 
<?php include("../footer.php");?>