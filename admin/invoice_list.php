<?php 
include("header.php");
include('sidebar.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        INVOICE LIST 
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice </li>
      </ol>       
        <div class="content">
	   <div class="container-fluid">
       <br>
       <br>
       <br>
         <div class="panel panel-info">
	          <div class="panel-heading">Invoice List </div>
		         <div class="panel-body">
             <div class="table-responsive">
              <div class="box-body table-responsive no-padding">
                           <table id="example1" class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>Invoice ID </th>
                                    <th>Patient Name </th>
                                    <th>Payment Description </th>
                                    <th>Amount </th>
                                    <th>Date of Payment </th>
                                 </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>1001</td>
                                    <td>John Doe</td>
                                    <td>Checkup</td>
                                    <td>1000</td>
                                    <td><?php echo date("Y-m-d"); ?></td>
                                  </tr>
                                  <tr>
                                    <td>1002</td>
                                    <td>Jane Doe</td>
                                    <td>Checkup</td>
                                    <td>500</td>
                                    <td><?php echo date("Y-m-d"); ?></td>
                                  </tr>
                                  <tr>
                                    <td>1003</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Checkup</td>
                                    <td>1200</td>
                                    <td><?php echo date("Y-m-d"); ?></td>
                                  </tr>
                                  <tr>
                                    <td>1004</td>
                                    <td>Dolores</td>
                                    <td>Checkup</td>
                                    <td>300</td>
                                    <td><?php echo date("Y-m-d"); ?></td>
                                  </tr>
                                  <tr>
                                    <td>1005</td>
                                    <td>OC Dawgs</td>
                                    <td>Checkup</td>
                                    <td>10000</td>
                                    <td><?php echo date("Y-m-d"); ?></td>
                                  </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>Invoice ID </th>
                                    <th>Patient Name </th>
                                    <th>Payment Description </th>
                                    <th>Amount </th>
                                    <th>Date of Payment </th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      


<?php include('footer.php');?>