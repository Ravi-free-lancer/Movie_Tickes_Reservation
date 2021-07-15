<!-- ################################################################################################################################### -->
<!-- Logout Code -->
<?php
// session_start();
// include('dashboard.php');
// include('navbar1.php');
  if(isset($_POST['logout']))
  {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }
?>
<!-- ################################################################################################################################### -->

<html>
  <head>
    <title>Movie Updation</title>
  </head>


  <body style="font-family: 'Times New Roman', Times, serif;">
  

      <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

                <form method="POST">
                <div class="modal-body">  

                    
                    <h4>Do you want to Logout...!!!</h4><br>            
                        

                </div>
                <div class="modal-footer">
                <form action="" method="POST">
                <button class="btn btn-danger btn-sm " name="logout">Logout</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                </form>
          </div>
          </form>
        </div>
      </div>
    </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark"style="justify-content: flex-end; width: 100%;">
        <ul class="navbar-nav">
            
              <label class="nav-item mt-2" style="color: aliceblue;  font-variant: all-small-caps;">
                <h4 class="mr-2"> Administrator :- <?php echo $_SESSION['username']; ?>
                  <button type="button" class="btn btn-primary btn-sm ml-4" data-toggle="modal" data-target="#logout">
                <i class="fas fa-sign-out-alt mr-3 ml-1"></i>Logout</button></h4>            
              </label>
            
        </ul>
        </nav>    
  </body>
</html>

