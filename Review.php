<?php 
require('user_navbar.php');
require('commingsoon.php');
 ?>
<!-- ######################################################################################################################################## -->

<div class="container">
    <!-- <div class="card"> -->
      <div class="card-body" style="color: white">
        
       <div class="d-flex justify-content-center" style="margin-left: 80%">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackmodal"><span class="fas fa-upload mr-2"></span> Post your thoughts</button>
       </div>
       <div class="mb-5"></div>
          <?php
              
              $con = mysqli_connect('localhost','root','','project2');
              $sql = "select * from review_page";
              $result = mysqli_query($con,$sql);
          ?>

          <h1 style="color: dodgerblue">Rating Area 
          <!-- <span style="color: transparent">---------------------------------</span> -->
           <!-- <span>Rating : 20/5</span>  -->

          </h1>
          <hr>
          
          <?php 
          while($row = mysqli_fetch_object($result)) 
          { ?>

          <div class="card-body">        
            <div class="overall-rating"> 
                  <span><?php echo '<b>Name : </b>', $row->name ?></span> <br> 
                  <span><?php echo '<b>Email : </b>', $row->email ?></span> <br>
                  <span><?php echo '<b>Rating : </b>', $row->rating ?></span> <br> 
                  <span><?php echo '<b>Reason : </b>', $row->reason ?></span> 
            </div>
          </div>      
          
          <br>

          <?php } ?>

      </div>
  <!-- </div> -->
</div>

<div class="modal fade" id="feedbackmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give your honest thoughts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">

      <?php
                        
                $db = mysqli_connect('localhost','root','','project2');    

                if(isset($_POST['Register']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];        
                    $rating = $_POST['rating'];
                    $reason = $_POST['reason'];
                            
                    $query = "INSERT INTO review_page (name, email, rating, reason) VALUES ('$name','$email','$rating','$reason')";

                    $run_insert = mysqli_query($db,$query);

                    if($run_insert)
                    {
                        echo '<script type=""text/javascript">alert("Your Rating is been Recorded Thankyou...")</script>';
                    }
                    else
                    {
                        echo '<script type=""text/javascript">alert("Error")</script>';
                    }
                    
                }
            ?><br>
            <!DOCTYPE html>
            <html>
                <head>
                <title>Movie Ticket Booking</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
                

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                </head>
                
                <body >     


                    
                    <div class="container">
                    
                        <form method="POST" class="col-md-12">
                                    
                        <label class="mt-2">Name</label>
                        <input type="text" name="name" class="form-control " placeholder="Enter The name" required>

                        <label class="mt-2">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter The Email" required>

                        <label class="mt-2">Rating</label>
                        <input type="number" name="rating" class="form-control" min="1" max="5" placeholder="Rate between 1 to 5 [1 means low 5 means high]" required>

                        <label >Reason</label>
                        <textarea type="text" name="reason" class="form-control" placeholder="Enter The Reason" required></textarea>

                        <div class="form-row">

                        <div class="card-body text-right">                        
                        <button type="submit" name="Register" class="btn btn-success w-25"><i class="fas fa-upload mr-2"></i> Post</button>
                        <button type="submit" name="" class="btn btn-secondary ml-4 w-25" data-dismiss="modal" >Close</button>
                        </div>
                        </form>
                </div>
                  
      </div>
      </form>
    </div>
  </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


     </body>
  </html>