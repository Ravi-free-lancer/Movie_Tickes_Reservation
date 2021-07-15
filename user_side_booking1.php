<!-- ###################################################################################################################################### -->
<!-- Comming soon movies -->

<?php 
include('commingsoon.php');
  require('security.php');
  require('admin_navbar.php');
?>

<br>
<html>
  <head>
    <title>User Side Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  </head>
  
  <body class="usb">
  <div class="container">
  
        <form action="" method="POST" class="form1">

          <?php
            $con = mysqli_connect("localhost","root","","project2") ;
            $query = "SELECT * FROM movie_booking where '".date('Y-m-d')."' between CURRENT_DATE and start_date order by rand()";
            $result = mysqli_query($con,$query);
          ?>

            <label for="" class="row justify-content-left d-flex" style="color: dodgerblue;"><h1>Comming Soon Movies</h1></label>            
              <div class="row justify-content-center mb-2 mt-5">              
                <div class="col-lg-14">                
                  <div id="demo" class="carousel slide" data-ride="carousel">
                
                    <ul class="carousel-indicators">
                    
                      <?php 

                          $i = 0;
                          foreach($result as $row)
                          {
                            $actives = '';
                            if($i == 0)
                            {
                              $actives = 'active';
                            }
                            
                      ?>
                      
                      <li data-target="#demo" data-slide-to="<?php $i; ?>" class="<?php $actives; ?>"></li>
                      
                      <?php   $i++;}   ?>
                      
                      </ul>
                  
                      <div class="carousel-inner">
                      <?php 
                            $i = 0;
                            foreach($result as $row)
                            {
                              $actives = '';
                              if($i == 0)
                              {
                                $actives = 'active';                  
                              }
                                                
                        ?>
                        
                        <div class="carousel-item <?= $actives; ?>">
                          <?php echo '<img src="images/'.$row['image'].'" width="100%;" height="350;" style="border-radius: 5px;">' ; ?>
                          <div class="text-center " style="color: white"><h4><?php echo $row['movie_name'] ?><h4></h4></div>
                        </div>
                        
                        <?php  $i++;}   ?>
                </div>
                
                      <a class="carousel-control-prev " href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next " href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a><br>

                  </div>
                </div>
                
              </div >
            </div > 
            </nav>
        </div>
      </form> 
    </div>

  </body>
</html>


<!-- ###################################################################################################################################### -->
<!-- Ongoing movies -->


<html>
  <head>
    <title>User Side Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

<style>
.usb
{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(back.jpg);
  background-size: cover;
  background-repeat: no-repeat;
}
  
</style>

  </head>
  
  <body class="usb">
  <div class="container">
        <form action="" method="POST" class="form1">

          <?php
            
            $con = mysqli_connect("localhost","root","","project2") ;
            $query = "SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN start_date and end_date order by rand()";
            $result = mysqli_query($con,$query);
          ?>

            <label for="" class="row justify-content-left d-flex" style="color: dodgerblue;"><h1>Movies On Screen</h1></label>
            
              <div class="row justify-content-center mb-2 mt-5">
                <div class="col-lg-10">
                
                  <div id="demo1" class="carousel slide" data-ride="carousel">
                
                <ul class="carousel-indicators">
                
                  <?php 
                      $i = 0;
                      foreach($result as $row)
                      {
                        $actives = '';
                        if($i == 0)
                        {
                          $actives = 'active';
                        }
                        
                  ?>
                  
                  <li data-target="#demo1" data-slide-to="<?php $i; ?>" class="<?php $actives; ?>"></li>
                  
                  <?php   $i++;}   ?>
                  
                </ul>
                
                <div class="carousel-inner">
                <?php 
                      $i = 0;
                      foreach($result as $row)
                      {
                        $actives = '';
                        if($i == 0)
                        {
                          $actives = 'active';                  
                        }
                                           
                  ?>
                  
                  <div class="carousel-item <?= $actives; ?>">

                    <?php echo '<img src="images/'.$row['image'].'" width="100%;" height="400;" style="border-radius: 5px;">' ?>
                    <!-- <img  src="<?php echo $row ['image'] ?>" width="100%" height="450" > -->
                    
                    <div class="text-center " style="color: white"><h4><?php echo $row['movie_name'] ?><h4></h4></div>
                        
                  </div>
                  
                  <?php  $i++;}   ?>
                </div>
                
                      <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo1" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a><br>

                  </div>
                </div>
                
              </div >
              <!-- <div class="card "> -->
                
                  <div class="card-body text-center">
                    <a type="button" class="btn btn-primary mr-2 col-md-2 mb-2" data-toggle="modal" data-target="#open"><span class="fas fa-book"></span> Book</a> 
                  </div>
                
              <!-- </div><br> -->
            </div > 
          <!-- </div> -->

            </nav>
            </div>
            </form> 

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
            echo '<script type=""text/javascript">alert("Successsfull")</script>';
           }
           else
           {
            echo '<script type=""text/javascript">alert("Error")</script>';
           }

       }
       else
       {
           echo '<script type=""text/javascript">alert("Error...")</script>';
       }
        
    }
?><br>
<!DOCTYPE html>
  <html>
     <head>
     <title>Movie Ticket Booking</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                            <div class="form-row">
<!--####################################################Get Theatre name##########################################################################-->
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
                                    $resultset = $mysqli->query("SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN date(start_date) and date(end_date)"); 
                                    
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
                            <div class="card-body text-right">
                            <button type="submit" name="" class="btn btn-secondary w-25" data-dismiss="modal" >Close</button>
                            <button type="submit" name="Register" class="btn btn-primary ml-4 w-25"><i class="fas fa-book"></i> Book</button>
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






<!-- ######################################################################################################################################## -->

                  
          <br>
          
        </div>
        </form>
      </div>
    </div>
  </div>            


  </body>
</html>