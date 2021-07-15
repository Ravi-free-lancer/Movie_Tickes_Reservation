
<html>
   <head>
    <title>Front_end</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">    

   </head>
   <?php
   include('commingsoon.php');
    require('user_navbar.php'); 
   ?>
   <body>
   
       <div class="container col-md-9">
        <!-- <div class="jumbotron text-center col-md-12"> -->
                <div class="card-body text-center" style="color: white">
                    <label><h1 class=" text-primary my-3">WELCOME TO RK CINIMA'S</h1></label>
                </div><br>                
                <label><h1 class=" text-primary my-3">Comming Soon</h1></label>

               <div class="row mt-5">
                
                <?php
                    $con = mysqli_connect('localhost','root','','project2') or die();
                    $query = "SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN current_date and start_date order by rand() limit 10";
                    $query_run = mysqli_query($con,$query);
                    $check_faculty = mysqli_num_rows($query_run) > 0;

                    if($check_faculty)
                    {
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="col-md-4">
                                <div class="card-body" style="border-radius: 12px; color: white">
                                    <img src="images/<?php echo $row['image']; ?>" width="250px" height="230px" class="card-img-top" alt="" style="border-radius: 9px;">
                                    <hr>
                                    <h5 class="card-title text-center">  Movie Name : <?php echo $row['movie_name']; ?> </h5>
                                    <hr>
                                    <p class="card-text text-left">
                                      <?php echo "<b>Movie Duration    : </b>", $row['duration']; ?> <br>
                                      <?php echo "<b>Movie description : </b>", $row['description']; ?> <br>
                                    </p>
                                    
                                </div>
                                <br>
                            </div>
                            <?php  

                        }
                    }
                    else
                    {
                        echo "Noting Found";
                    }

                ?> 

                   
               </div>
           </div>          

  
   </body>
</html>
<br>

<!-- ############################################################################################################################################ -->


<html>
   <head>
    <title>Front_end</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">    

<style>

  body
    {
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(back.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    }

</style>

   </head>
   <body>
   
       <div class="container col-md-9">
        <!-- <div class="jumbotron text-center col-md-12"> -->
                
                    <label><h1 class=" text-primary my-3">Movies On Screen</h1></label>

                <div class="card-body d-flex justify-content-center" style="color: white">
                    <button type="button" class="btn btn-outline-success w-25 mt-4" data-toggle="modal" data-target="#open" style="margin-left: 80%; color: white; border: 2px solid green">Book</button>
                </div><br>

               <div class="row mt-5">
                
                <?php
                    $con = mysqli_connect('localhost','root','','project2') or die();
                    $query = "SELECT * FROM movie_booking where '".date('Y-m-d')."' between date(start_date) and date(end_date) order by rand() limit 10";
                    $query_run = mysqli_query($con,$query);
                    $check_faculty = mysqli_num_rows($query_run) > 0;

                    if($check_faculty)
                    {
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="col-md-4">
                                <div class="card-body" style="border-radius: 12px; color: white">
                                    <img src="images/<?php echo $row['image']; ?>" width="250px" height="230px" class="card-img-top" alt="" style="border-radius: 9px;">
                                    <hr>
                                    <h5 class="card-title text-center">  Movie Name : <?php echo $row['movie_name']; ?> </h5>
                                    <hr>
                                    <p class="card-text text-left">
                                      <?php echo "<b>Movie Duration    : </b>", $row['duration']; ?> <br>
                                      <?php echo "<b>Movie description : </b>", $row['description']; ?> <br>
                                    </p>
                                    
                                </div>
                                <br>
                            </div>
                            <?php  

                        }
                    }
                    else
                    {
                        echo "Noting Found";
                    }

                ?> 

                   
               </div>
           </div>          
       <!-- </div> -->

<!-- ######################################################################################################################################## -->
<!-- booking -->

  <div class="modal fade" id="open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book your Tickets</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="" method="POST">
        <div class="modal-body">

<!-- ######################################################################################################################################## -->
<!-- Booking area -->

<?php
  
  
    $db = mysqli_connect('localhost','root','','project2');    

    if(isset($_POST['Register']))
    {
        $fullname = $_POST['fullname'];
        $mobile = $_POST['mobile'];        
        $email = $_POST['email'];
        $Theatre_name = $_POST['Theatre_name'];
        $movie_name = $_POST['movie_name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $seat_group = $_POST['seat_group'];
        $qty = $_POST['qty'];

        $query = "INSERT INTO user_booking (fullname, mobile, email, Theatre_name, movie_name, date, time, seat_group, qty) 
        VALUES ('$fullname','$mobile','$email','$Theatre_name','$movie_name','$date','$time','$seat_group','$qty')";

        $run_insert = mysqli_query($db,$query); 
    
        if($run_insert==1)
       {
           $query1 = "INSERT INTO  history (fullname, mobile, email, Theatre_name, movie_name, date, time, seat_group, qty) 
           VALUES ('$fullname','$mobile','$email','$Theatre_name','$movie_name','$date','$time','$seat_group','$qty')";

           $run_insert = mysqli_query($db,$query1);

           if($run_insert)
           {
            echo '<script>alert("Successsfull")</script>';
           }
           else
           {
            echo '<script>alert("Error")</script>';
           }

       }
       else
       {
           echo '<script>alert("Error...")</script>';
       }
        
    }
?><br>
<!DOCTYPE html>
  <html>
     <head>
     <title>Movie Ticket Booking</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" type="text/css" href=".css">


     </head>
     
     <body>     
         
        <div class="container">
          
          
                            <form method="POST" class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label class="mt-2">Name</label>
                                  <input type="text" name="fullname" class="form-control " placeholder="Enter The Username" required>
                                </div>
                               <div class="form-group col-md-6">
                                  <label class="mt-2">Contact</label>
                                  <input type="number" name="mobile" class="form-control" placeholder=" Mobile No" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter The Email" required>
                            </div>
<!--####################################################Get Theatre name##########################################################################-->

                            <div class="form-row">
                                <?php 
            
                                    $mysqli = mysqli_connect('localhost','root','','project2') or die();  
                                    $resultset = $mysqli->query("SELECT Theatre_name FROM add_theatre"); 
                                                                    
                                ?>
                                  <div class="form-group col-md-6">
                                      <label >Theater</label>
                                      <select name="Theatre_name" id="Theatre_name" class="custom-select">     
                                      <option value="">Choose Theatre Name</option>                                          
                                        <?php while($rows = $resultset->fetch_assoc())
                                            {
                                                $Theatre_name = $rows['Theatre_name'];
                                                echo "<option value = '$Theatre_name' >$Theatre_name </option>";
                                            }                                           
                                        ?>
                                      </select>
                                  </div>

 <!--####################################################Get movie name##########################################################################-->
                                
                                <?php 
            
                                    $mysqli = mysqli_connect('localhost','root','','project2') or die();  
                                    $resultset = $mysqli->query("SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN date(start_date) and date(end_date) order by rand() limit 10"); 
                                    
                                ?>

                                <div class="form-group col-md-6">
                                    <label >Movie Name</label>
                                    <select class="custom-select" name="movie_name" id="movie_name" required>
                                    <option value="">Choose Your Movie Name</option>
                                        <?php while($rows = $resultset->fetch_assoc())
                                            {
                                                $movie_name = $rows['movie_name'];
                                                echo "<option value = '$movie_name' >$movie_name </option>";
                                            }
                                            
                                        ?>      
                                        
                                    </select> 
                                </div>
                                
                            </div>

<!--####################################################Get Seat group name##########################################################################-->
 <!-- Seat Group -->

                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label >Date</label>
                                    <select class="custom-select" name="date" id="date" required>
                                    <option value="">Choose..</option>
                                        
                                    </select>
                                  </div>

<!--####################################################Get Seat group name##########################################################################-->
                            

                                <div class="form-group col-md-3">
                                <label >Seat Class</label>
                                <select class="custom-select" name="seat_group" id="seat_group" required>
                                
                                  <option value="">Seat Place</option>
                      
                                </select>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label >Time</label>
                                    <select name="time" class="custom-select"  required>
                                    <option value="">Time</option>
                                    <option style="color:black" value="09.30 AM">09.30 AM</option>
                                    <option style="color:black" value="12.30 PM">12.30 PM</option>
                                    <option style="color:black" value="03.30 PM">03.30 PM</option>
                                    <option style="color:black" value="06.30 PM">06.30 PM</option>
                                    <option style="color:black" value="09.30 PM">09.30 PM</option>
                                    </select>
                                </div>

                                
                                <div class="form-group col-md-2">
                                <label >Qty</label>
                                <input type="number" name="qty" id="qty" class="form-control" min="1" max="5" required>
                                </div>
                            </div>
                            
                            <div class="text-center" style="margin-left: 585px">
                            <button type="submit" name="" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                            <button type="submit" name="Register" class="btn btn-primary ml-3">Book</button>
                            </div>
                            
                            </form>
                    

                 </div>
             </div>
          </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
            


<!-- ############################################################################################################################################ -->


      <script >
        $(document).ready(function()
          {
              $('#Theatre_name').change(function() {
                  var Theatre_name = $(this).val();

                $.ajax
                ({               
                    url:"Theatre_name.php",
                    method:"POST",
                    data: {Theatre_name:Theatre_name},
                    dataType :"text",
                    success:function(data)
                    {
                        $('#seat_group').html(data);
                    }
                });

              });
                
          }) ;
        </script>


        <script >
        $(document).ready(function()
          {
              $('#movie_name').change(function() {
                  var movie_name = $(this).val();

                $.ajax
                ({               
                    url:"movie_name.php",
                    method:"POST",
                    data: {movie_name:movie_name},
                    dataType :"text",
                    success:function(data)
                    {
                        $('#date').html(data);
                    }
                });

              });
                
          }) ;
        </script>


     </body>
  </html>


   </body>
</html>