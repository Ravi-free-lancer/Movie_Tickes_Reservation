<html>
<head>
<title>Booking</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
    
<center>
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="" class="movie_book_lbl" > Choose an image</label>
            <input type="file" class="txtboxes" name="image" id="image" required><br>
            
            <label for="" class="movie_book_lbl"> Enter Your FullName</label>
            <input type="text" class="txtboxes" name="fullname" placeholder="Enter the FullName" required><br>

            <label for="" class="movie_book_lbl"> Details Of Customers</label>
            <input type="text" class="txtboxes" name="details" placeholder="Enter the Details" required><br></br>

            <input type="submit" class="btn1" name="upload" value="upload_image"><br>
        </form>     
    </center>
</body>
</html>
<?php
   $con = mysqli_connect("localhost","root","","project2") ;

   if(isset($_POST['upload']))
   {
   $fullname = $_POST['fullname'];
   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));   
   $details = $_POST['details'];   

       $query = "INSERT INTO booking(fullname,image,details) VALUES ('$fullname','$file','$details')";
       $run_insert = mysqli_query($con,$query);
       
       if($run_insert)
       {
           echo '<script type=""text/javascript">alert("Image has been Uploaded")</script>';
       }
       else
       {
           echo '<script type=""text/javascript">alert("Error in Uploading")</script>';
       }
   } 
?>