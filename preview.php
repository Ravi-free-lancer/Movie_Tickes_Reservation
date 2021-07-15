<?php
include('commingsoon.php');
 require('security.php');
 require('admin_navbar.php'); 
?>

<html>
   <head>
    <title>Front_end</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">    

   </head>
   <body>
   
       <div class="container col-md-9">
                <div class="card-body text-center" style="color: white">
                    <label><h1 class=" text-primary my-3">WELCOME TO RK CINIMA'S</h1></label>
                </div><br>                
                <label><h1 class=" text-primary my-3">Comming Soon</h1></label>

               <div class="row mt-5">
                
                <?php
                    $con = mysqli_connect('localhost','root','','project2') or die();
                    $query = "SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN current_date and start_date order by rand() limit 10";
                    $query_run = mysqli_query($con,$query);
                    $movie = mysqli_num_rows($query_run) > 0;

                    if($movie)
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

<!-- ########################################################################################################################################### -->
<!-- Preview -->

<html>
   <head>
    <title>Front_end</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
       <div class="container col-md-9 mt-5" >
                <div class="card-body" style="color: white">
                    <h1 class=" text-primary my-3 ml-2">Movies on screen</h1>
                </div><br>
                
               <div class="row mt-5">
                
                <?php
 
                    $con = mysqli_connect('localhost','root','','project2') or die();
                    $query = "SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN start_date and end_date order by rand()";
                    $query_run = mysqli_query($con,$query);
                    $movie = mysqli_num_rows($query_run) > 0;

                    if($movie)
                    {
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <div class="col-md-4">
                                <div class="card-body" style="border-radius: 12px; color: white" >
                                    <img src="images/<?php echo $row['image']; ?>" width="250px" height="230px" class="card-img-top" alt="" style="border-radius: 9px;">
                                    <hr>
                                    <h5 class="card-title text-center"> <?php echo "Movie Name : ", $row['movie_name']; ?> </h5>
                                    <hr>
                                    <p class="card-text text-left">
                                      <?php echo "<b>Movie Duration    : </b>", $row['duration']; ?> <br>
                                      <?php echo "<b>Movie description : </b>", $row['description']; ?> <br>
                                      
                                    </p>
                                </div><br>
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