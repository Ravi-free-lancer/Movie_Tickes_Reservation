<!-- ############################################################################################################################################## -->
<?php
    
      $con = mysqli_connect('localhost','root','','project2');                  
      $sql = "select * from movie_booking";
      $result = mysqli_query($con,$sql);
?>

<?php
include('commingsoon.php');
require('security.php');
  // require('navbar.php');
    require('practice.php');
    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['book']))
    {
        $movie_name = $_POST['movie_name'];
        $duration = $_POST['duration'];        
        $description = $_POST['description'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $image = $_FILES["image"]['name'];
             
                   $query = "INSERT INTO movie_booking(`movie_name`, `duration`, `description`, `start_date`, `end_date`, `image`)                  
                   VALUES ('$movie_name','$duration','$description','$start_date','$end_date','$image')";

                   $run_insert = mysqli_query($db,$query);   
                   if($run_insert)
                     {
                         move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
                         echo "<script> alert('Successfully Added'); </script>";
                     }
                  else
                    {
                       echo '<script type=""text/javascript">alert("Error Detucted")</script>';
                    }
    }
?>

<html>
  <head>
    <title>Movie Updation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="theatre.css">
       
    <style>
        table.dataTable {
        border: 2px solid lightgray;
        border-radius: 7px;
      }
    </style>

  </head>
  <body class="bg-img">


<!-- ########################################################################################################################################### -->

<div class="modal fade" id="theatre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Movie Name</label>
                    <input type="text" class="form-control" name="movie_name" id="inputName" placeholder="Enter Movie Name" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">Duration</label>
                    <input type="time" class="form-control" name="duration" id="time" placeholder="time" required>
                  </div>
                </div>         
                 
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Movie Starting Date</label>
                    <input type="date" class="form-control" name="start_date" id="Fullname" placeholder="Enter your Fullname" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">Movie End Date</label>
                    <input type="date" class="form-control" name="end_date" id="Duration" placeholder="Duration" required>
                  </div>
                </div>  
                <div class="class-group">
                <label for="inputState" class="mt-3">Select Movie Poster</label>
                     <input type="file" name="image" class="form-control1" required>                
                </div>      
                
         <br></br>
         <div class="modal-footer">
         <button type="submit" name="book" class="btn btn-primary mr-4"><span class="fas fa-plus"></span> Add</button>
         <button type="submit" name="" class="btn btn-secondary" data-dismiss="modal" >Close</button>         
         </div>
      </div>
      </form>
    </div>
  </div>
</div>


<!---------################################################################################################################################----->
<!--Edit code-->
<?php

    $db = mysqli_connect('localhost','root','','project2') or die();    
    
    if(isset($_POST['update']))
    {
        $booking_id = $_POST['booking_id'];
        $movie_name = $_POST['movie_name'];
        $duration = $_POST['duration'];        
        $description = $_POST['description'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $image = $_FILES["image"]['name'];
             
        $query1 = "SELECT * FROM movie_booking WHERE booking_id = '$booking_id' ";
        $query1_run = mysqli_query($db,$query1);

        foreach($query1_run as $image_row)
        {
          if($image == NULL)
          {
            $image_data = $image_row['image'];        
          }
          else
          {
            if($img_path = "images/".$image_row['image'])
            {
              unlink($img_path);
              $image_data = $image;
            }
            
          }
        }

                   $query = "UPDATE movie_booking SET movie_name = '$movie_name', duration = '$duration', description = '$description',
                    start_date = '$start_date', end_date = '$end_date', image = '$image' WHERE booking_id=$booking_id";

                   $run_insert = mysqli_query($db,$query);   

                   if($run_insert)
                     {
                        move_uploaded_file($_FILES["image"]["tmp_name"], "images/".$_FILES["image"]["name"]);
                        echo "<script> alert('Successfully Updated'); </script>";
                     }
                  else
                    {
                       echo '<script type=""text/javascript">alert("Error")</script>';
                    }
              
          
    }
?>


<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
                <input type="hidden" class="form-control" name="booking_id" id="booking_id" placeholder="booking_id" required>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Movie Name</label>
                    <input type="text" class="form-control" name="movie_name" id="movie_name" placeholder="Enter Movie Name" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">Duration</label>
                    <input type="time" class="form-control" name="duration" id="duration" placeholder="Duration" required>
                  </div>
                </div>         
                 
                <div class="form-group">
                    <label for="inputAddress">Description</label>
                    <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Movie Starting Date</label>
                    <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Enter your Fullname" required>
                  </div>

                  <div class="form-group col-md-6">
                  <label for="inputState">Movie End Date</label>
                    <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Duration" required>
                  </div>
                </div>        
                <div class="class-group">
                <div class="form-row">
                    <div class="form-group">
                     <label for="" class="mt-3">Select Your Movie Poster</label>
                     <input type="file" name="image" class="form-control1" required>  
                    </div>  
                    
                  </div>                    
                </div> 
                
                
         <br></br>
         <div class="modal-footer">
         <button type="submit" name="update" class="btn btn-primary"> <span class="fas fa-edit"></span> Update</button>
         <button type="submit" name="" class="btn btn-secondary mr-4" data-dismiss="modal" >Close</button>
         
         </div>
      </div>
      </form>
    </div>
  </div>
</div>


<!--######################################################################################################################################-->
<!--Delete Data-->

<?php

    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['delete']))
    {
        $booking_id = $_POST['booking_id'];
        // $image1 = $_POST['image'];
             
            $query = "DELETE FROM movie_booking WHERE booking_id = '$booking_id'";
            $run_insert = mysqli_query($db,$query);   

            if($run_insert)
              {
                // unlink("images/".$image1);
                echo "<script> alert('Successfully Deleted'); </script>";
              }
            else
              {
                  echo '<script type=""text/javascript">alert("Error")</script>';
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
                <input type="hidden" class="form-control" name="booking_id" id="delete_id" placeholder="Id" required>

                <h4>Do you want to delete the data...!!!</h4>        
                
         <br>
         <div class="modal-footer">
         <button type="submit" name="delete" class="btn btn-danger btn-sm  mr-4"><span class="fas fa-trash"></span> Delete</button>
         <button type="submit" name="" class="btn btn-secondary btn-sm" data-dismiss="modal" >Close</button>
         </div>
      </div>
      </form>
    </div>
  </div>
</div><br>

<!-- ############################################################################################################################################ -->
<!-- Delete All-->


<?php

    $con = mysqli_connect('localhost','root','','project2');                  
    if(isset($_POST['delete2']))
    {

      $sql = "TRUNCATE `project2`.`movie_booking`";
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



<!--######################################################################################################################################-->
<!--Fetch Data-->



   <div class="container col-md-10 mt-4" style="margin-right: 55px;">
        <div class="jumbotron ml-5 col-md-12">
        
             <div class="card d-flex justify-content-center w-50 m-auto" style="background: lightgray; border-radius: 10px ">
                <h2 class="my-3 text-center ">Movie Booking</h2>
             </div>
             <div class="my-3"></div>
             <form class="search_form1" method="POST">   
              <div class="modal-footer">            
                <button type="button" class="btn btn-danger w-25" data-toggle="modal" data-target="#deletemodal2"><span class="fas fa-trash mr-3"></span> Delete All</button>
              </div>
            </form>
         <div class="card"  style="border-radius: 10px">
            <div class="card-body" style="background: gray; border-radius: 10px ">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#theatre"><span class="fas fa-plus-square mr-2"></span> Add Data</button>
            <!-- <a type="button" class="btn btn-primary ml-4" href="preview.php"><i class="fas fa-eye mr-2"></i> See Preview</a> -->
            
            </div>
         </div>
         
         <div class="card mt-2"  style="border-radius: 10px">
             <div class="card-body" style="background: lightgray; border-radius: 10px ">
            
               <?php
    
                    $con = mysqli_connect('localhost','root','','project2');                  
                    $sql = "select * from movie_booking";
                    $result = mysqli_query($con,$sql);
              ?>
     
     
     <div class="container card card-body" style=" border-radius: 7px;">
        <div name="div_search_form1">
          <div class="form-group d-flex justify-content-center">
            <table id="datatableid" class="table table-hover table-responsive-sm" style=" border: 4px solid gray;">
            <thead class="table-dark">
            
                <tr class="text-center" >
                <th class="tbl2">S.NO</th>
                <th class="tbl2">ID</th>
                <th class="tbl2">MOVIE</th>
                <th class="tbl2">POSTER</th>
                <th class="tbl2">DURATION</th>                
                <th class="tbl2">DESCRIPTION</th> 
                <th class="tbl2">START</th>
                <th class="tbl2">END</th>               
                <th class="tbl2">STATUS</th>
                <th class="tbl2">ACTIONS</th>              
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
                <td ><?php echo '<img src="images/'.$row['image'].'" width="100px;" height="85px;" alt="Image">' ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['duration']; ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['description'];?></td>
                
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['start_date'] ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['end_date'] ?></td>
                      

                <td class="tbl2 " style="padding-top: 35px;">
                
                <?php 

                  if(strtotime(date('Y-m-d')) < strtotime($row ['start_date'])): 
                  echo '<b class="lable btn-sm btn-warning">Comming Soon</b>';             

                  elseif(strtotime(date('Y-m-d')) > strtotime($row ['start_date']) &&  strtotime(date('Y-m-d')) < strtotime($row['end_date'])): 
                  echo '<b class="lable btn-sm btn-success ">Shows</b>';
                  
                  else: echo '<b class="lable btn-sm btn-danger">Shows Ended</b>';
                  
                  endif; 
                  
                ?>

                </td> 

                <td class="tbl2 d-flex justify-content-center">  
                <button type="button" name="edit" class="btn btn-primary btn-sm mr-1 editbtn mt-3"><span class="fas fa-edit"></span> Edit</button>
                <button type="button" name="delete" class="btn btn-danger btn-sm deletebtn mt-3"> <span class="fas fa-trash "></span> Delete</button> </td>               
                </tr>
                <?php 
                $no++;
                } ?>
            </table>
                 </div>
             </div>
         </div>
    </div>
</div>
</div>
<br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


    <!--#################################################################################################################################-->
    <!-- Script for Table Design-->


   <script>

      $(document).ready(function() {
          $('#datatableid').DataTable(  {

          } );
          
      } );

    </script>

    


    <!--#################################################################################################################################-->
    <!-- Script for delete-->

    <script>
        $(document).ready(function ()
        {
            $('.deletebtn').on('click', function ()
            {
                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function()
                {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#delete_id').val(data[1]);
                
               });
        });
    </script>    

    <!--#################################################################################################################################-->
    <!-- Script for Edit-->
    <script>
        $(document).ready(function ()
        {
            $('.editbtn').on('click', function ()
            {
                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function()
                {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#booking_id').val(data[1]);
                $('#movie_name').val(data[2]);
                $('#image').val(data[3]);
                $('#duration').val(data[4]);
                $('#description').val(data[5]);
                $('#start_date').val(data[6]);
                $('#end_date').val(data[7]);
                
               });
        });
    </script>

    
<!--#####################################################################################################################################-->
 
  </body>
</html>

   








    