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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  </body>
</html>