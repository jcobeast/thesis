
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

var ByCategory = {
    A: ["San Jose City", "Cabanatuan City", "Munoz City", "Others"],
    B: ["Bulacan", "Malolos", "Bocaue", "Others"],
    C: ["Tarlac", "Camuiling", "Gerona", "Lapaz", "Others"]
}

    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in ByCategory[value]) {
                catOptions += "<option>" + ByCategory[value][categoryId] + "</option>";
            }
            document.getElementById("category").innerHTML = catOptions;
        }
    }


/// patient info delete and update
$(document).ready(function(){  
      $('.patupdate').click(function(){
           var id = $(this).parents("tr").attr("id"); 
           $.ajax({  
                url:"update_patient.php",  
                method:"GET",  
                data:{id:id},  
                success:function(data){  
                     window.location.href = 'update_patient.php';
                }  
           });  
      }); 

// patient delete function
      $(".patdelete").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'delete_patient.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    window.location.href = 'list_of_patients.php?error=true';  
               }
            });
        }
    }); 
 });
////end//////////

// doctor function
// update function

 $(document).ready(function(){  
      $('.view_data').click(function(){
           var id = $(this).parents("tr").attr("id"); 
           $.ajax({  
                url:"update_doctor.php",  
                method:"GET",  
                data:{id:id},  
                success:function(data){  
                     $('#doctor_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      }); 

// delete function
      $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'delete_doctor.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    window.location.href = 'list_of_doctors.php?error=true';  
               }
            });
        }
    }); 
 }); 
/////////////////////////
/////staff function

  $(document).ready(function(){  
      $('.update').click(function(){
           var id = $(this).parents("tr").attr("id"); 
           $.ajax({  
                url:"update_staff.php",  
                method:"GET",  
                data:{id:id},  
                success:function(data){  
                     $('#staff_detail').html(data);  
                     $('#dataModal').modal("show");
                     console.log('Update Sucess'); 
                }  
           });  
      }); 

// delete function
      $(".delete").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'delete_staff.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
                  console.log('Error Deleting'); 
               },
               success: function(data) {
                    $("#"+id).remove();
                    window.location.href = 'list_of_staffs.php?error=true';
                    console.log('Delete Sucess');   
               }
            });
        }
    }); 
 }); 
</script>


</body>
</html>



