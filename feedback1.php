<?php
include('commingsoon.php');
    require('security.php');
    require('practice.php');
?>
<html>
  <head>
    <title>User Side Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="theatre.css">
    </head>
    <body class="bg-img">

<div class="container">       
  
    <!-- <div class="card"> -->
      <div class="card-body" style="color: white">
        
       <div class="text-center ml-5">
        <button type="button" class="btn btn-primary  w-25" data-toggle="modal" data-target="#feedbackid"><span class="fas fa-table mr-2"></span>Table view</button>      
        <button type="button" class=" ml-5 btn btn-danger  w-25" data-toggle="modal" data-target="#deletemodal2"><span class="fas fa-trash mr-3"></span> Delete All</button>     
       </div>
       <div class="mb-5"></div>
          <?php
              
              $con = mysqli_connect('localhost','root','','project2');
              $sql = "select * from feedback";
              $result = mysqli_query($con,$sql);
          ?>
          <div class="all ml-5">
          <h1 style="color: dodgerblue">Feed back's from users</h1>
          <hr style="background: white"><hr>

          <?php 
          while($row = mysqli_fetch_object($result)) 
          { ?>

          <div class="card-body">        
            <div class="overall-rating"> 
                  <span><?php echo '<b>Name : </b>', $row->name ?></span> <br> 
                  <span><?php echo '<b>Email : </b>', $row->email ?></span> <br>
                  <span><?php echo '<b>Feedback : </b>', $row->feed_back ?></span> <br> 
                  
            </div>
          </div>      
          
          <br>
          <?php } ?>
          

      </div>
      </div>
  <!-- </div> -->
</div>
<!-- ############################################################################################################################################ -->
<!-- Delete All-->


<?php

    $con = mysqli_connect('localhost','root','','project2');                  
    if(isset($_POST['delete2']))
    {

      $sql = "TRUNCATE `project2`.`feedback`";
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


<div class="modal fade" id="deletemodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         <button type="submit" name="delete2" class="btn btn-danger btn-sm  mr-4"><span class="fas fa-trash"></span> Delete</button>
         <button type="submit" name="" class="btn btn-secondary btn-sm" data-dismiss="modal" >Close</button>
         </div>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ########################################################################################################################################### -->

    <div class="modal fade" id="feedbackid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Remove Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form action="" method="POST">
          <div class="modal-body">

          <?php 

              $con = mysqli_connect("localhost","root","","project2");
              $query = "SELECT * FROM feedback";
              $result = mysqli_query($con,$query);

          ?>
              <div class="card-body text-center m-auto w-50" style="background: lightgray; border-radius: 10px ">
                <h2 class="">Feedback</h2>
              </div><br>
              <div class="container card-body" style=" border-radius: 7px;">
                  <div name="div_search_form1">
                    <div class="form-group d-flex justify-content-center" >

                  
                      <table id="datatableid" class="table table-hover table-responsive-sm " style=" border: 4px solid gray">

                      <thead class="table-dark">
                          <tr class="text-center" >
                          <th class="tbl2">S.NO</th>
                          <th class="tbl2">ID</th>
                          <th class="tbl2">NAME</th>
                          <th class="tbl2">EMAIL</th>
                          <th class="tbl2">FEEDBACK</th>                     
                          </tr>
                      </thead>

                          <?php
                          $no = 1;
                          while($row = mysqli_fetch_assoc($result))
                          { ?>
                            
                          <tr class="text-center" >
                          <td class="tbl2" style="padding-top: 35px;"><?php echo $no ;?></td>
                          <td class="tbl2" style="padding-top: 35px;"><?php echo $row['id'] ?></td>
                          <td class="tbl2" style="padding-top: 35px;"><?php echo $row['name'] ?></td>
                          <td class="tbl2" style="padding-top: 35px;"><?php echo $row['email']; ?></td>
                          <td class="tbl2" style="padding-top: 35px;"><?php echo $row['feed_back'];?></td>

                          </tr>
                          <?php 
                          $no++;
                          } ?>
                      </table>
                  </div>
              </div>
                              
                              
                      <br>
                      <div class="modal-footer">           
                      <button type="submit" name="" class="btn btn-secondary btn-sm" data-dismiss="modal" >Close</button>
                      </div>
                    
                    </form>
                  </div>
                </div>
              </div>

<!-- ########################################################################################################################################### -->




      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


   <script>

      $(document).ready(function() {
          $('#datatableid').DataTable(  {

          } );
          
      } );

    </script>


  


  </body>
</html>