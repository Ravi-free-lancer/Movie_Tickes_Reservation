<?php
// require('C:\xampp\xampp\htdocs\Examples\navbar.php');
require('prac.php');
    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['book']))
    {
        $movie_name = $_POST['movie_name'];
        $duration = $_POST['duration'];        
        $description = $_POST['description'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
             
                   $query = "INSERT INTO movie_booking(movie_name, duration, description, start_date, end_date)                  
                   VALUES ('$movie_name','$duration','$description','$start_date','$end_date')";

                   $run_insert = mysqli_query($db,$query);   

                   if($run_insert)
                     {
                        echo "<script> alert('Successfully Added'); </script>";
                     }
                  else
                    {
                       echo '<script type=""text/javascript">alert("Error")</script>';
                    }
              
          
    }
?><br>


<html>
  <head>
    <title>Movie Updation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body >
  

<!-- Modal -->
<div class="modal fade" id="theatre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Movie Name</label>
                    <input type="text" class="form-control" name="movie_name" id="inputName" placeholder="Enter Movie Name" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">Duration</label>
                    <input type="time" class="form-control" name="duration" id="inputName" placeholder="Duration" required>
                  </div>
                </div>         
                 
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Starting Date</label>
                    <input type="date" class="form-control" name="start_date" id="inputName" placeholder="Enter your Fullname" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">End Date</label>
                    <input type="date" class="form-control" name="end_date" id="inputName" placeholder="Duration" required>
                  </div>
                </div>        
                
         <br></br>
        <button type="submit" name="book" class="btn btn-primary">Add</button>

      </div>
      </form>
    </div>
  </div>
</div>


<!---------################################################################################################################################----->
<!--Edit-->


<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">
      <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Movie Name</label>
                    <input type="text" class="form-control" name="movie_name" id="inputName" placeholder="Enter Movie Name" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">Duration</label>
                    <input type="time" class="form-control" name="duration" id="inputName" placeholder="Duration" required>
                  </div>
                </div>         
                 
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Starting Date</label>
                    <input type="date" class="form-control" name="start_date" id="inputName" placeholder="Enter your Fullname" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">End Date</label>
                    <input type="date" class="form-control" name="end_date" id="inputName" placeholder="Duration" required>
                  </div>
                </div>        
                
         <br></br>
        <button type="submit" name="book" class="btn btn-primary">Add</button>

      </div>
      </form>
    </div>
  </div>
</div>

<!--######################################################################################################################################-->
<!--Fetch Data-->
               <?php
    
                $con = mysqli_connect('localhost','root','','project2');
                    if(isset($_POST['search']))
                    {
                                
                        $search = $_POST['search'];
                        $sql = "select * from movie_booking where movie_name like '%$search%'";
                    }
                    else
                    {     
                        $sql = "select * from movie_booking";
                        $search = "";
                    }
                    $result = mysqli_query($con,$sql);
                ?>
                
    <div class="container" >
        <div class="jumbotron" style="margin-left: 220px">
             <div class="card">
                <h2 class="mt-2 ml-2">Movie Booking</h2><br>
             </div>
         <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#theatre">Add Data</button>
            </div>
         </div>
         <div class="card">
             <div class="card-body">
             <table class="table table-dark table-responsive">
                <tr align="center" class="tbl1">
                <th class="tbl2">ID</th>
                <th class="tbl2">MOVIE NAME</th>
                <th class="tbl2">DURATION</th>
                
                <th class="tbl2">DESCRIPTION</th>
                <th class="tbl2">DATE</th>
                <th class="tbl2">EDIT</th>
                <th class="tbl2">DELETE</th>

                </tr>

                <?php while($row = mysqli_fetch_object($result)) { ?>
                
                <tr align="center" class="tbl1">
                <td class="tbl2"><?php echo $row->booking_id  ?></td>
                <td class="tbl2"><?php echo $row->movie_name ?></td>
                <td class="tbl2"><?php echo $row->duration ?></td>
                <td class="tbl2"><?php echo $row->description?></td>

                <td class="tbl2">
                
                <?php echo "<b>Start Date : </b>",$row->start_date ?><br>
                <?php echo "<b>End  Date : </b> ",$row->end_date ?><br>
                

                </td>
                <td class="tbl2">  <button type="button" name="edit" class="btn btn-primary editbtn">Edit</button>  </td>
                <td class="tbl2">  <button type="button" name="delete" class="btn btn-danger">Delete</button>  </td>
                
                </tr>
                <?php } ?>
                </table>
                </center>                 
             </div>
         </div>
    </div>
</div>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(functoin ()
        {
            $('.editbtn').on('click',function ()
            {
                $('#editmodal').modal('show');

            });
        });
    </script>

  </body>
</html>

   








    