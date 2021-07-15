<?php 
    include('security.php');
    include('navbar.php'); 
?>

<html>
  <head>
      <title>Print_page</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  </head>
  <body>
     

<div class="container col-md-10 justify-content-center d-flex"style="margin-right: 55px; margin-top: 330px" >
         <div class="jumbotron ml-5 col-md-12 my-5" style="left: 25px;">
             <div class="card text-center w-100 m-auto" style="border-radius: 10px ">
                <div class="card-body my-5">
                    <button type="button" class="btn btn-primary mr-4 ml-4" data-toggle="modal" data-target="#theatre1" ><span class="fas fa-eye"> Theatres </button>                   
                    <button type="button" class="btn btn-primary mr-4 ml-4 " data-toggle="modal" data-target="#theatre_setting" ><span class="fas fa-eye"> Theatres Setting</button>
                    <button type="button" class="btn btn-primary mr-4 ml-4" data-toggle="modal" data-target="#movie_updation" ><span class="fas fa-eye"> Movie_updation </button>
                    <button type="button" class="btn btn-primary mr-4 ml-4" data-toggle="modal" data-target="#booking_details" ><span class="fas fa-eye"> Booking_details </button>
                    <button type="button" class="btn btn-primary mr-4 ml-4" data-toggle="modal" data-target="#history" ><span class="fas fa-eye"> History </button>               
                </div>    
            </div>
        </div>
     </div>




<!-- ############################################################################################################################################## -->

<div class="modal fade" id="theatre1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST">
      <div class="modal-body">
        
                <?php
    
                  $con = mysqli_connect('localhost','root','','project2');
                  $sql = "select * from add_theatre";
                  $result = mysqli_query($con,$sql);
                ?>
                
                <h4 class="text-center mb-3"><b>Theatre Names</b></h4>
                               
                <table id="datatableid1" class="table table-responsive-sm table-hover " style="border: 4px solid gray">
                  <thead>
                      <tr class="text-center" >
                      <th class="tbl2">S.NO</th>
                      <th class="tbl2">ID</th>
                      <th class="tbl2">THEATRE</th>
                            
                      </tr>
                  </thead>

                  <?php 
                  
                  $no = 1;
                  while($row = mysqli_fetch_object($result))
                
                  { ?>
                  
                    <tr class="text-center" >
                    <td class="tbl2"><?php echo $no ;?></td>
                    <td class="tbl2"><?php echo $row->Theatre_id  ?></td>
                    <td class="tbl2"><?php echo $row->Theatre_name ?></td>
                    
                                  
                </tr>
                <?php
                $no++;
                } ?>
            </table>
                       
            
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################# -->

<!-- ############################################################################################################################################## -->

<div class="modal fade" id="theatre_setting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST">
      <div class="modal-body">
        
                <?php
    
                  $con = mysqli_connect('localhost','root','','project2');
                  $sql = "select * from theatre_setting";
                  $result = mysqli_query($con,$sql);
                ?>
                
                 <table id="datatableid2" class="table table-hover table-responsive-sm" style="border: 4px solid gray;">
            <thead>
                <tr class="text-center" >
                <th class="tbl2">S.NO</th>
                <th class="tbl2">ID</th>
                <th class="tbl2">THEATRE</th>
                <th class="tbl2">PLACE</th>                
                <th class="tbl2">SEATS</th>            
                             
                </tr>
            </thead>

                <?php 
                 $no = 1;
                while($row = mysqli_fetch_object($result)) 
                 { ?>
                  
                  <tr class="text-center">
                    <td class="tbl2"><?php echo $no ; ?></td>
                    <td class="tbl2"><?php echo $row->Theatre_id  ?></td>
                    <td class="tbl2"><?php echo $row->Theatre_name ?></td>
                    <td class="tbl2"><?php echo $row->seat_group ?></td>
                    <td class="tbl2"><?php echo $row->total_seats?></td>
                  
                  </tr>
                
                <?php 
                 $no++;
                 } ?>
                
            </table>
                       
            
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################# -->

<!-- ############################################################################################################################################## -->


<div class="modal fade" id="booking_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form method="POST">
            <div class="modal-body">  

            <?php
              $con = mysqli_connect('localhost','root','','project2');
              $sql = "select * from user_booking";
              $result = mysqli_query($con,$sql);
            ?>

            <table id="datatableid4" class="table table-hover table-responsive-sm" style="border: 4px solid gray">
            <thead >
                <tr class="tbl text-center">
                  <th class="tbl2">S.NO</th>
                  <th type="tbl2" class="tbl2">ID</th>
                  <th class="tbl2">FULLNAME</th>
                  <th class="tbl2">MOVIE</th>
                  <th class="tbl2">DETAILS</th>
                  </tr>
            </thead>
         
         <?php 

            $no = 1;

            while($row = mysqli_fetch_object($result)) 
         { ?>
          
         <tr class="tbl1 ">
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
            
            </tr>
         <?php 
           
           $no++ ;

         } ?>
         </table>      
                    

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################## -->


<div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form method="POST">
            <div class="modal-body">  

            <?php
              $con = mysqli_connect('localhost','root','','project2');
              $sql = "select * from history";
              $result = mysqli_query($con,$sql);
            ?>

            <table id="datatableid5" class="table table-hover table-responsive-sm" style="border: 4px solid gray">
            <thead >
                <tr class="tbl text-center">
                  <th class="tbl2">S.NO</th>
                  <th type="tbl2" class="tbl2">ID</th>
                  <th class="tbl2">FULLNAME</th>
                  <th class="tbl2">MOVIE</th>
                  <th class="tbl2">DETAILS</th>
                  </tr>
            </thead>
         
         <?php 

            $no = 1;

            while($row = mysqli_fetch_object($result)) 
         { ?>
          
         <tr class="tbl1 ">
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
            
            </tr>
         <?php 
           
           $no++ ;

         } ?>
         </table>      
                    

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ############################################################################################################################################## -->

<div class="modal fade" id="movie_updation1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST">
      <div class="modal-body">
        
               <?php
    
                    $con = mysqli_connect('localhost','root','','project2');                  
                    $sql = "select * from movie_booking";
                    $result = mysqli_query($con,$sql);
              ?>
     
     
     <div class="container " style=" border-radius: 7px;">
        <div name="div_search_form1">
          <div class="form-group d-flex justify-content-center" >
            <table id="datatableid3" class="table table-hover table-responsive-sm" style=" border: 4px solid gray;">
            <thead>
            
                <tr class="text-center" >
                <th class="tbl2">S.NO</th>
                <th class="tbl2">ID</th>
                <th class="tbl2">MOVIE</th>
                <th class="tbl2">DURATION</th>                
                <th class="tbl2">DESCRIPTION</th> 
                <th class="tbl2">START</th>
                <th class="tbl2">END</th>               
                <th class="tbl2">STATUS</th>
                              
                </tr>
            </thead>

                <?php
                $no = 1;
                while($row = mysqli_fetch_assoc($result))
                { ?>
                  
                <tr class="text-center" >
                <td class="tbl2" style="padding-top: 35px;"><?php echo $no ;?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['booking_id'] ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['movie_name'] ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['duration']; ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['description'];?></td>
                
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['start_date'] ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['end_date'] ?></td>
                      

                <td class="tbl2" style="padding-top: 35px;">
              
                <?php 
                if(strtotime(date('Y-m-d')) < strtotime($row ['start_date'])): 
                echo "Comming Soon";             

                elseif(strtotime(date('Y-m-d')) > strtotime($row ['start_date']) &&  strtotime(date('Y-m-d')) < strtotime($row['end_date'])): 
                echo "Showing"; 
						 	  
                else: echo "Show Ended";
						 	  
				        endif; ?>

                </td> 

                               
                </tr>
                <?php 
                $no++;
                } ?>
            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################# -->


<!-- ############################################################################################################################################# -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>

<!-- ############################################################################################################################################ -->
<script>

      $(document).ready(function() {
          $('#datatableid1').DataTable(  {

              "info":     false,

              dom: 'lBfrtip',
              buttons: ['print','pdf','colvis']
          } );
          
      } );

</script>


<script>

      $(document).ready(function() {
          $('#datatableid2').DataTable(  {

              "info":     false,

              dom: 'lBfrtip',
              buttons: ['print','pdf','colvis']
          } );
          
      } );

</script>


<script>

      $(document).ready(function() {
          $('#datatableid3').DataTable(  {

              "info":     false,

              dom: 'lBfrtip',
              buttons: ['print','pdf','colvis']
          } );
          
      } );

</script>


<script>

      $(document).ready(function() {
          $('#datatableid4').DataTable(  {

              "info":     false,

              dom: 'lBfrtip',
              buttons: ['print','pdf','colvis']
          } );
          
      } );

</script>


<script>

      $(document).ready(function() {
          $('#datatableid5').DataTable(  {

              "info":     false,

              dom: 'lBfrtip',
              buttons: ['print','pdf','colvis']
          } );
          
      } );

</script>


  
  
  
  </body>
</html>