
<footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>Copyright &copy; 2017 </strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

<!-- jQuery 2.2.3 -->
<script src="../../admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../admin/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="../../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../admin/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- SlimScroll 1.3.0 -->
<script src="../../admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="../../admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
<!-- Sparkline -->
<script src="../../admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- page script -->
<script src="../../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../admin/plugins/datepicker/bootstrap-datepicker.js"></script>




<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

      $('#date').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd' 
    });
       $('#date1').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd' 
    });

     $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'  
      }).datepicker("setDate", new Date()); 
   

     $('#datepicker1').datepicker({
      autoclose: true,
     format: 'yyyy-mm-dd' 
    }).datepicker("setDate", new Date());

     $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd' 
    }).datepicker("setDate", new Date());

     $('#datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd' 
    }).datepicker("setDate", new Date());


      $('#datepickerdisable1').datepicker({
      autoclose: true,
     format: 'yyyy-mm-dd',
     daysOfWeekDisabled: [0,6] 
    }).datepicker();

      $('#datepickerdisable2').datepicker({
      autoclose: true,
     format: 'yyyy-mm-dd',
     daysOfWeekDisabled: [0,6] 
    }).datepicker();

     $('#datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd' 
    }).datepicker();

 //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    }); 
  

</script>

</body>
</html>
