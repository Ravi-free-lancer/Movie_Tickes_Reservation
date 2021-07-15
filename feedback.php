<?php 
require('user_navbar.php');
include('commingsoon.php');
?>
<!-- ######################################################################################################################################## -->

<div class="container">
    <div class="card">
      <div class="card-body">
      <h5>
        <p> This will help to convey your thoughts about our project </p>
        <p> Please be gentle with your feedback because it's very important source for our project </p>
        <p> This will help to convey your thoughts about our project This will help to convey your thoughts about our project </p>       
      </h5>
       <div class="d-flex justify-content-center" style="margin-left: 80%">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackmodal"><span class="fas fa-plus mr-2"></span> Your Feedback</button>
        
      </div>
      </div>
  </div>
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
                    $feed_back = $_POST['feed_back'];
                            
                    $query = "INSERT INTO feedback (name, email, feed_back) VALUES ('$name','$email','$feed_back')";

                    $run_insert = mysqli_query($db,$query);

                    if($run_insert)
                    {
                        echo '<script type=""text/javascript">alert("Your feed back is Recorded Thankyou...")</script>';
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

                        <label >Feedback</label>
                        <textarea type="text" name="feed_back" class="form-control" placeholder="Enter The feed_back" length="250" required></textarea>

                        <div class="form-row">

                        <div class="card-body text-right">                        
                        <button type="submit" name="Register" class="btn btn-success  w-25"><i class="fas fa-upload mr-2"></i> Post</button>
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