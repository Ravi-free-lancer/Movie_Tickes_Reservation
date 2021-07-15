<?php
    
    session_start();
    $message = '';
    $con = mysqli_connect('localhost','root','','project2') or die();

    if(isset($_POST['reset']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password']; 
        $password1 = $_POST['password1'];  
        
        $query = "UPDATE admin SET password = md5('$password') ,password1 = md5('$password') WHERE username  = '$username' AND email = '$email'";
        $num = mysqli_query($con,$query);
            
            if($password != $password1)
            {
                $message = '<div class ="alert alert-danger">Password not Matching</div>';
            }
                elseif($num)
                    {                             
                        echo "<script> alert('$username your password has been succefully changed');window.location='login.php'</script>";
                    }
                        else
                        {
                            $message = '<div class ="alert alert-danger">Somethig went wrong</div>';
                        }
                    }
                        

?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>Reset or Change Password</title>         
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> 
        <link rel="stylesheet" href="theatre.css">

<!-- Style -->

    <style>

    .mb-3, .my-3
        {
        margin-bottom: 1rem!important;
        width: 500px;
        }
    </style>

<!--#################-->


    </head>
    <body class="bg-img1">  
        
        
           
           <form method="POST">
           <div class="container justify-content-center d-flex" style="padding-top: 100px;">
            <div class="jumbotron mt-5" style="padding-bottom: 30px;">
            
            <div class="">
                <div class="card text-center">
                    <h2 class="my-3">Reset Password</h2>
                </div>
                <div class="my-1"></div>
            <div class="card text-center " id="card">
                <div class="card-body">
                 <?php echo $message ?>
                    <div class="form-row mt-3">
                        <div class="form-group col-md-1 ">
                            <label class=" fas fa-user-alt"></label>
                        </div>
                        <div class="form-group col-md-11">
                            <input type="text" name="username" placeholder="Username" class="form-control" required>
                        </div>
                    </div>
                    
                                       
                    <div class="form-row mt-3">
                        <div class="form-group col-md-1 ">
                            <label class="fas fa-envelope"></label>
                        </div>
                        <div class="form-group col-md-11">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                    </div>
                     <div class="form-row mt-3">
                        <div class="form-group col-md-1 ">
                            <label class="fas fa-key"></label>
                        </div>
                        <div class="form-group col-md-5">
                            <input type="password"  name="password" placeholder="Password" class="form-control " required> 
                        </div> 
                        <div class="form-group col-md-1 ">
                            <label class="fas fa-key"></label>
                        </div>
                        <div class="form-group col-md-5">
                            <input type="password"  name="password1" placeholder="Re-enter the Password" class="form-control " required>  
                        </div>
                    </div>
                    <input type="submit"  value="Reset" name="reset" id="reset" class="btn btn-primary btn-sm my-2">
                </div>
            </div>
            
            <p class="text-center">
           Already have...<a href="login.php">Click Here</a>       
           </p>
            </div>
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



    