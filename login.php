<?php
    
    session_start();
    $message = '';
    $con = mysqli_connect('localhost','root','','project2') or die();

    if(isset($_POST['username']))
    {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  
    
        $query = "select * from admin where username='$username' AND password = '$password'";
        $result=mysqli_query($con,$query);

        $num=mysqli_num_rows($result);
        
        if ($num==1)
        {
            $_SESSION['username']= $username;
            echo "<script> alert(' Glad you are here $username');window.location='theatre_setting.php'</script>";
        }
        else
        {
            $message = '<div class ="alert alert-danger">Please Enter Correct Username & Password</div>';
        }
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Login Form</title>         
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">   
        <link rel="stylesheet" href="theatre.css">

<!-- Style -->

    <style>

    .mb-3, .my-3
        {
        margin-bottom: 1rem!important;
        width: 400px;
        }
    .l
        {
        border-radius: 250px;
        width: 447px;
        height: 287px;
        }

    </style>

<!--#################-->

    </head>
    <body  class="bg-img1">           
           
           <div>
           <form method="POST">
           
           <div class="container justify-content-center d-flex" style="padding-top: 100px;">
            <div class="jumbotron mt-5 col-md-10" style="padding-bottom: 30px;">
            <div class="card-body text-center">
                <?php echo $message ?>
            </div>

            <div class="form-row">

            <div class="form-group col-md-7" >
                 <img src="login1.jpg" alt="" class="l">
            </div>

              <div class="col-md-5">
            
                <div class="card text-center ">
                    <h2 class="my-2">Login</h2>
                </div>
                <div class="my-1"></div>
            <div class="card text-center " >
                <div class="card-body">

                <div class="form-row mt-3">
                    <div class="form-group col-md-1 ">
                        <label class=" fas fa-user-alt"></label>
                    </div>
                    <div class="form-group col-md-10">
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div>
                </div>

                <div class="form-row mt-3">
                    <div class="form-group col-md-1 ">
                        <label class="fas fa-key"></label>
                    </div>
                    <div class="form-group col-md-10">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                   <button type="submit" class="btn btn-primary btn-sm ml-4"><i class="fas fa-sign-in-alt mr-2 ml-1"></i>Login</button>
                </div>
            </div>
           
            <p class="text-center">
           Forget password...? <a href="new_password.php">Click Here</a>       
           </p>
            </div>


             </div>
        </div>
        
           
           </form>                 
               
           </div>  
           </div>                 
    </body>
</html>



    