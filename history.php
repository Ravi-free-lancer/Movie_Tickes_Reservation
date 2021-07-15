<?php 
include('commingsoon.php');
require('security.php');
// require('navbar.php');
require('practice.php');
?>

<!DOCTYPE html>
  <html>
     <head>
     <title>History</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">  
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <link rel="stylesheet" href="theatre.css">

     <!-- Style -->
    <style>
       
        table.dataTable {
        border: 2px solid lightgray;
        border-radius: 7px;
      }
    

      div.dataTables_wrapper div.dataTables_filter input {
          margin-left: .5em;
          display: inline-block;
          border-radius: 5px;
      }
      

    </style>
    <!-- ##### -->

     </head>
     <body class="bg-img">
<!-- ############################################################################################################################################ -->
<!-- Delete All-->


<?php

    $con = mysqli_connect('localhost','root','','project2');                  
    if(isset($_POST['delete']))
    {

      $sql = "TRUNCATE `project2`.`history`";
      $result = mysqli_query($con,$sql);
      if($result)
      {
        echo "Every Records has been deleted";
      }
      else
      {
        echo "Something went wrong";
      }

    }

?>


<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Remove Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">

                <h4>Do you want to delete all the data...!!!</h4>        
                
         <br>
         <div class="modal-footer">
         <button type="submit" name="delete" class="btn btn-danger btn-sm  mr-4"><span class="fas fa-trash"></span> Delete</button>
         <button type="submit" name="" class="btn btn-secondary btn-sm" data-dismiss="modal" >Close</button>
         </div>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################ -->


         <div class="container col-md-10 justify-content-center d-flex "style="margin-right: 55px;" >
         <div class="jumbotron ml-5 col-md-12 mt-5" style="left: 25px;">
             <div class="card text-center w-50 m-auto" style="background: lightgray; border-radius: 10px ">
                <h2 class=" my-3 ml-2">User Booking History</h2>
             </div><br>
             
         <div class="form-group">
            <form class="search_form1" method="POST">   
              <div class="modal-footer">            
                <button type="button" class="btn btn-danger w-25" data-toggle="modal" data-target="#deletemodal"><span class="fas fa-trash mr-3"></span> Delete All</button>
              </div>
            </form>
            <br>
        
         </div>
         <div class="card card-body" style="border-radius: 10px ">
         <?php   
            $con = mysqli_connect('localhost','root','','project2');
            $sql = "select * from history";
            $result = mysqli_query($con,$sql);
          ?>
         <table id="datatable" class="table table-hover table-responsive-sm" style="border: 4px solid gray;">
         <thead class="table-dark">
         <tr align="center" class="tbl">
         <th class="tbl2">S.NO</th>
         <th class="tbl2">ID</th>
         <th class="tbl2">FULLNAME</th>
         <th class="tbl2">MOVIE</th>

         <th class="tbl2">DETAILS</th>
         </tr>
         </thead>

         <?php 
         $no = 1;
         while($row = mysqli_fetch_object($result)) { ?>
          
         <tr class="tbl1">
         <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $no ;  ?></td>
         <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->id  ?></td>
         <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->fullname ?></td>
         <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->movie_name ?></td>

         <td class="tbl2">
        
         <?php echo "<b>Email Id : </b>",$row->email ?><br>
         <?php echo "<b>Mobile No : </b>",$row->mobile ?><br>
         <?php echo "<b>Theatre Name : </b>",$row->Theatre_name ?><br>
         <?php echo "<b>Date : </b>",$row->date ?><br>
         <?php echo "<b>Time : </b>",$row->time ?><br>
         <?php echo "<b>Seat Group : </b>",$row->seat_group ?><br>
         <?php echo "<b>Qty : </b>",$row->qty ?>

        </td>
         
         </tr>

         <?php $no++; } ?>

         </table>
         </div>
      </div>
    </div>
  <br>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

           <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
          

   <script>

      $(document).ready(function() {
          $('#datatable').DataTable(  {

          } );
          
      } );

    </script>


     </body>
  </html>

            