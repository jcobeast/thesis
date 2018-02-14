
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?></strong> All rights
    reserved.
</footer>

  <!-- Control Sidebar -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/moment/min/moment.min.js"></script>

<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>


<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>


<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- page script -->
<script>
  $(function () {

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

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
    
  $('#datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd' 
    }).datepicker();
 //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    }); 

function showAlert(){
  alert("Save Changes? Click ok to save.");
}

</script>

</body>
</html>
