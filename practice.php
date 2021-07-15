<?php
// include('commingsoon.php');
  if(isset($_POST['logout']))
  {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<head>
    
    <title>Movie_booking</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" ></script>

<!-- ############################################################################################################################################# -->
<!-- Script -->

<script>

function printContent(el)
{
  var restorepage = document.body.outerHTML;
  var printcontent = document.getElementById(el).outerHTML;
  document.body.outerHTML = printcontent;
  window.print();
  document.body.outerHTML = restorePage;
}

</script>
<!-- ############################################################################################################################################# -->
<!-- Style -->

    <style>

    *
    {
      font-size: 98%;
    }    
    .navbar
    {
        margin-left: 220px;
    }
    .accordion
    {
        margin-top: -72px;
    }

    </style>

</head>
<body>

<!-- ############################################################################################################################################3 -->
<!-- Logout Page -->


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
                <button class="btn btn-danger btn-sm"name="logout">Yes please...!!!</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </form>
          </div>
          </form>
        </div>
      </div>
    </div>

<!-- ############################################################################################################################################3 -->
<!-- dropdown btn -->
     
                  <nav class="navbar navbar-expand bg-dark navbar-dark"style="justify-content: flex-end;">
                    <ul class="navbar-nav">

                      <div class="dropdown">                              

                        <button class="btn btn-outline-primary dropdown-toggle btn-sm my-2" type="button" id="dropdownbtn" data-toggle="dropdown" aria-expand="false" style="width: 210px;border: 2px solid dodgerblue;color: white;">
                        <img src="edit.jpg" class="mr-4" alt=""style="height: 30px; width: 30px;border-radius: 5px">Admin : <i class="mr-4">  </i>
                        <!-- <i class="fas fa-user mr-2 ml-1" ></i> -->
                             <?php echo $_SESSION['username']; ?><i class="mr-3"></i>
                        </button>

                        <div class="dropdown-menu bg-info" aria-labelledby="dropdownbtn" style="margin-left: 53px">

                          <a class="nav-link dropdown-item btn-sm" href="#" data-toggle="modal" data-target="#account" style="color: black"><span class="fas fa-upload mr-2"></span> Account Info</a>
                          <a class="nav-link dropdown-item btn-sm" href="feedback1.php" style="color:black"><span class="fas fa-inbox mr-2"></span> FeedBack</a>
                          
                          <hr>

                          <!-- <a class="nav-link dropdown-item btn-sm" href="#" style="color: black"><span class="fas fa-cog mr-2"></span> More</a> -->
                          <a class="nav-link dropdown-item btn-sm" href="#" data-toggle="modal" data-target="#logout" style="color: black"><span class="fas fa-sign-out-alt"></span> Logout</a>
                          
                        </div>

                      </div>
                        
                    </nav>
                    </ul>

            <div>
                <nav class="sb-sidenav sb-sidenav-responsive accordion sb-sidenav-dark" id="sidenavAccordion" style="position: absolute;position: fixed; width: 220px; height: 110%">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
                            <div class="sb-sidenav-menu-heading"></div>
<!-- ############################################################################################################################################3 -->
<!-- Main dashboard -->     
                            <img src="logos2.png" class="mr-4 mb-2 mt-1" alt=""style="height: 35px; width: 170px; border-radius: 5px; position: fixed;margin-left: 10px;">
                            <div class="nav-link active"><h5>Dashboard</h5></div>                            

                            <a class="nav-link ml-3" href="theatre_setting.php"><i class="fas fa-cog mr-2"></i> Theatre Setting</a>
                            <a class="nav-link ml-3" href="movie_selection.php"><i class="fas fa-save mr-2"></i> Movie Booking</a>
                            <a class="nav-link ml-3" href="Search.php"><i class="fas fa-list mr-2"></i> Booking Details</a>
                            <a class="nav-link ml-3" href="history.php"><i class="fas fa-box mr-2"></i> Booking History</a>
                            <!-- <a class="nav-link ml-3" href="feedback1.php"><i class="fas fa-inbox mr-2"></i>FeedBack</a> -->
                            <a class="line active"></a>

<!-- ############################################################################################################################################3 -->
<!-- Download dashboard -->

                            <div class="nav-link active"><i class="fas fa-download mr-2 mb-2"></i><h6>Download</h6></div>

                            <a class="nav-link collapsed ml-3" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                             <i class="fas fa-print mr-2"></i>
                              Print
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse ml-2" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#theatre1"><i class="fas fa-table mr-1"></i>Theatre's list</a>
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#theatre_setting1"><i class="fas fa-table mr-1"></i>Theatre's data list</a>
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#movie_updation1"><i class="fas fa-table mr-1"></i>Movies list</a>
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#booking_details1"><i class="fas fa-table mr-1"></i>Booking's list</a>
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#history1"><i class="fas fa-table mr-1"></i>All History's list</a>
                                </nav>
                            </div>


<!-- ############################################################################################################################################3 -->
<!-- preview dashboard -->

                            <div class="nav-link active"><i class="fas fa-eye mr-2 mb-2"></i><h6>Preview</h6></div>

                            <a class="nav-link collapsed ml-3" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                             <i class="fas fa-file mr-2"></i>
                              Pages
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse ml-2" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user_side_booking1.php"><i class="fas fa-eye mr-1"></i>Preview</a>
                                </nav>
                            </div>
                        </div>
                    </div>                      
                </div>
        </div>

<!-- ############################################################################################################################################## -->
<!-- Account Updation -->

 <?php
          
          $con = mysqli_connect('localhost','root','','project2') or die();

          if(isset($_POST['update2']))
          {
              $id = $_POST['id'];
              $name = $_POST['name'];
              $email = $_POST['email'];
              $gender = $_POST['gender'];
              $age = $_POST['age'];
              $blood = $_POST['blood'];
              $mobile = $_POST['mobile']; 
              $address = $_POST['address'];  
              
              $query = "UPDATE admin SET name = '$name',email = '$email', gender = '$gender',age = '$age',blood = '$blood',mobile = '$mobile',address = '$address' WHERE id = '$id'";
              $num = mysqli_query($con,$query);
                  
                 if($num)
                  {                             
                      echo "<script> alert('Data Successfully Edited'); </script>";
                  }
                      else
                      {
                          echo "<script> alert('Something went wrong'); </script>";
                      }
                  }
                              

      ?>

<div class="modal fade" id="accountinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
         <form method="POST" enctype="multipart/form-data">
           <div class="container justify-content-center d-flex" style="padding-top: 30px;">
            <div class="card text-center col-md-10" id="card">
                <div class="card-body text-center">
                
                <?php
                  $con = mysqli_connect('localhost','root','','project2');
                  $sql = "select * from admin";
                  $result = mysqli_query($con,$sql);
                ?>

                  <?php
                    while($row = mysqli_fetch_object($result)) 
                      { ?>

                           <input type="hidden" name="id" placeholder="id" value="<?php echo $row->id ?>" class="form-control" required>
                        
                        <div class="form-group">
                           <input type="text" name="name" placeholder="FullName" value = "<?php echo $row->name ?>" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" value = "<?php echo $row->email ?>" class="form-control" required>
                        </div>

                     <div class="form-row mt-3">
                        <div class="form-group col-md-4">
                            <select class="custom-select" name="gender" id="gender" required>
                            <option value="<?php echo $row->gender ?>"><?php echo $row->gender ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>                                
                            
                            </select> 
                        </div>

                        <div class="form-group col-md-4">
                            <input type="number"  name="age" placeholder="Your Age" value = "<?php echo $row->age ?>" class="form-control " required> 
                        </div> 

                        <div class="form-group col-md-4">
                            <input type="text"  name="blood" placeholder="Blood Type" value = "<?php echo $row->blood ?>" class="form-control " required>  
                        </div>
                     </div>

                      <div class="form-group">
                            <input type="number" name="mobile" placeholder="Mobile No" value = "<?php echo $row->mobile ?>" class="form-control" required>
                      </div>
                      <div class="form-group ">
                          <textarea type="text" name="address" placeholder="Address" class="form-control" cols="30" rows="5" required><?php echo $row->address ?></textarea>
                      </div>
                      <div class="form-group ">
                            <!-- <input type="file" name="image" class="form-control" style="border: 1px solid lightgray">   -->
                      </div>
                    <button type="submit" name="update2" id="reset" class="btn btn-primary btn-sm my-2 w-25"><span class="fas fa-upload"></span> Update</button>
                 <?php } ?>
                </div>
            </div>  
        </div>
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary mr-3" data-toggle="modal" data-target="#account" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ############################################################################################################################################## -->
<!-- Account Updation -->

<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Account Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
          
          $con = mysqli_connect('localhost','root','','project2') or die(); 
          $sql = "select * from admin";
          $result = mysqli_query($con,$sql);                          

      ?>
      
      <div class="modal-body">
        <form method="POST" >       
              
            <?php 
            while($row = mysqli_fetch_object($result)) { ?>

            <div class="card-body">        
              <div class="overall-rating"> 
                    <span><?php echo '<b class="info" >Name  </b><b style="margin-right: 50px;margin-left: 60px">:</b>', $row->name ?></span> <br> 
                    <span><?php echo '<b class="info" >Email  </b><b style="margin-right: 50px;margin-left: 63px">:</b>', $row->email ?></span> <br>
                    <span><?php echo '<b class="info" >Gender  </b><b style="margin-right: 50px;margin-left: 51px">:</b>', $row->gender ?></span> <br>
                    <span><?php echo '<b class="info" >Age  </b><b style="margin-right: 50px;margin-left: 72px">:</b>', $row->age ?></span> <br> 
                    <span><?php echo '<b class="info" >Blood Type  </b><b style="margin-right: 50px;margin-left: 27px">:</b>', $row->blood ?></span> <br>
                    <span><?php echo '<b class="info" >Mobile  </b><b style="margin-right: 50px;margin-left: 53px">:</b>', $row->mobile ?></span> <br>
                    <span><?php echo '<b class="info" >Address  </b><b style="margin-right: 50px;margin-left: 47px">:</b>', $row->address ?></span> <br>
              </div>
            </div>      
          
          <br>

          <?php } ?>

      </div>
      
      <div class="modal-footer">
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#accountinfo" data-dismiss="modal"><span class="fas fa-upload mr-2"></span> Update Info</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

      </form>
    </div>
  </div>
</div>


<!-- ############################################################################################################################################## -->


<div class="modal fade" id="theatre1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Table Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      
      <form method="POST">
      <div class="modal-body">
        
                <?php
    
                  $con = mysqli_connect('localhost','root','','project2');
                  $sql = "select * from add_theatre";
                  $result = mysqli_query($con,$sql);
                ?>
                <button class="btn btn-primary my-2 mx-2" onclick="printContent('tables1')"><span class="fas fa-print"></span> Print </button>
                <div id="tables1" name="tables1">
                <h4 class="text-center mb-3"><b>Theatre Names</b></h4>
                               
                <table id="datatableid1" class="table table-responsive-sm table-hover " style="border: 4px solid gray">
                  <thead class="table-dark">
                      <tr class="text-center" >
                      <th class="tbl2">S.NO</th>
                      <th class="tbl2">ID</th>
                      <th class="tbl2">THEATRE</th>
                            
                      </tr>
                  </thead>

                  <?php 
                  
                  $no = 1;
                  while($row = mysqli_fetch_object($result))
                
                  { ?>
                  
                    <tr class="text-center" >
                    <td class="tbl2"><?php echo $no ;?></td>
                    <td class="tbl2"><?php echo $row->Theatre_id  ?></td>
                    <td class="tbl2"><?php echo $row->Theatre_name ?></td>
                    
                                  
                </tr>
                <?php
                $no++;
                } ?>
            </table>
            </div>           
            
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################# -->
<!-- ############################################################################################################################################## -->

<div class="modal fade" id="theatre_setting1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Table Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST">
      <div class="modal-body">
        
          <?php

            $con = mysqli_connect('localhost','root','','project2');
            $sql = "select * from theatre_setting";
            $result = mysqli_query($con,$sql);
          ?>
            <button class="btn btn-primary my-2 mx-2" onclick="printContent('datatableid6')"> <span class='fas fa-print'></span> Print </button>
            <table id="datatableid6" class="table table-hover table-responsive-sm" style="border: 4px solid gray;">
            <thead class="table-dark">
                <tr class="text-center" >
                <th class="tbl2">S.NO</th>
                <th class="tbl2">ID</th>
                <th class="tbl2">THEATRE</th>
                <th class="tbl2">PLACE</th>                
                <th class="tbl2">SEATS</th>            
                             
                </tr>
            </thead>

                <?php 
                 $no = 1;
                while($row = mysqli_fetch_object($result)) 
                 { ?>
                  
                  <tr class="text-center">
                    <td class="tbl2"><?php echo $no ; ?></td>
                    <td class="tbl2"><?php echo $row->Theatre_id  ?></td>
                    <td class="tbl2"><?php echo $row->Theatre_name ?></td>
                    <td class="tbl2"><?php echo $row->seat_group ?></td>
                    <td class="tbl2"><?php echo $row->total_seats?></td>
                  
                  </tr>
                
                <?php 
                 $no++;
                 } ?>
                
            </table>
                       
            
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ############################################################################################################################################# -->
<!-- ############################################################################################################################################## -->


<div class="modal fade" id="booking_details1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Table Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form method="POST">
            <div class="modal-body">  

            <?php
              $con = mysqli_connect('localhost','root','','project2');
              $sql = "select * from user_booking";
              $result = mysqli_query($con,$sql);
            ?>
            <button class="btn btn-primary my-2 mx-2" onclick="printContent('datatableid4')"> <span class='fas fa-print'></span> Print </button>
            <table id="datatableid4" class="table table-hover table-responsive-sm" style="border: 4px solid gray">
            <thead class="table-dark">
                <tr class="tbl text-center">
                  <th class="tbl2">S.NO</th>
                  <th type="tbl2" class="tbl2">ID</th>
                  <th class="tbl2">FULLNAME</th>
                  <th class="tbl2">MOVIE</th>
                  <th class="tbl2">DETAILS</th>
                  </tr>
            </thead>
         
         <?php 

            $no = 1;

            while($row = mysqli_fetch_object($result)) 
         { ?>
          
         <tr class="tbl1 ">
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $no ;  ?></td>
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->id  ?></td>
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->fullname ?></td>
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->movie_name ?></td>
            
            <td class="tbl2">
            
                <?php echo "<b>Email Id : </b>",$row->email ?><br>
                <?php echo "<b>Mobile No : </b>",$row->mobile ?><br>
                <?php echo "<b>Theatre Name : </b>",$row->Theatre_name ?><br>
                <?php echo "<b>Date : </b>",$row->date ?><br>
                <?php echo "<b>Time : </b>",$row->time ?><br>
                <?php echo "<b>Seat Group : </b>",$row->seat_group ?><br>
                <?php echo "<b>Qty : </b>",$row->qty ?>
            
            </tr>
         <?php 
           
           $no++ ;

         } ?>
         </table>      
                    

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ############################################################################################################################################# -->


<!-- ############################################################################################################################################## -->


<div class="modal fade" id="history1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Table Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form method="POST">
            <div class="modal-body">  

            <?php
              $con = mysqli_connect('localhost','root','','project2');
              $sql = "select * from history";
              $result = mysqli_query($con,$sql);
            ?>
            
            <button class="btn btn-primary my-2 mx-2" onclick="printContent('datatableid5')"> <span class='fas fa-print'></span> Print </button>
            <table id="datatableid5" class="table table-hover table-responsive-sm" style="border: 4px solid gray">
            <thead class="table-dark">
                <tr class="tbl text-center">
                  <th class="tbl2">S.NO</th>
                  <th type="tbl2" class="tbl2">ID</th>
                  <th class="tbl2">FULLNAME</th>
                  <th class="tbl2">MOVIE</th>
                  <th class="tbl2">DETAILS</th>
                  </tr>
            </thead>
         
         <?php 

            $no = 1;

            while($row = mysqli_fetch_object($result)) 
         { ?>
          
         <tr class="tbl1 ">
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $no ;  ?></td>
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->id  ?></td>
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->fullname ?></td>
            <td class="tbl2 text-center" style="padding-top: 70px;"><?php echo $row->movie_name ?></td>
            
            <td class="tbl2">
            
                <?php echo "<b>Email Id : </b>",$row->email ?><br>
                <?php echo "<b>Mobile No : </b>",$row->mobile ?><br>
                <?php echo "<b>Theatre Name : </b>",$row->Theatre_name ?><br>
                <?php echo "<b>Date : </b>",$row->date ?><br>
                <?php echo "<b>Time : </b>",$row->time ?><br>
                <?php echo "<b>Seat Group : </b>",$row->seat_group ?><br>
                <?php echo "<b>Qty : </b>",$row->qty ?>
            
            </tr>
         <?php 
           
           $no++ ;

         } ?>
         </table>      
                    

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ############################################################################################################################################# -->
<!-- ############################################################################################################################################## -->

<div class="modal fade" id="movie_updation1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title ml-5" id="exampleModalLabel">Table Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <!-- <form method="POST">
      <div class="modal-body"> -->
        
               <?php
    
                    $con = mysqli_connect('localhost','root','','project2');                  
                    $sql = "select * from movie_booking";
                    $result = mysqli_query($con,$sql);
              ?>
     
     
     <div class="container my-5" style=" border-radius: 7px;">
        <div name="div_search_form1 ">
        
          <button class="btn btn-primary my-2 mx-2" onclick="printContent('datatableid3')"> <span class='fas fa-print'></span> Print </button>
          <div class="form-group d-flex justify-content-center" >
            
            <table id="datatableid3" class="table table-hover table-responsive-sm" style=" border: 4px solid gray;">
            <thead class="table-dark">
            
                <tr class="text-center" >
                <th class="tbl2">S.NO</th>
                <th class="tbl2">ID</th>
                <th class="tbl2">MOVIE</th>
                <th class="tbl2">DURATION</th>                
                <th class="tbl2">DESCRIPTION</th> 
                <th class="tbl2">START</th>
                <th class="tbl2">END</th>               
                <th class="tbl2">STATUS</th>
                
                              
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
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['duration']; ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['description'];?></td>
                
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['start_date'] ?></td>
                <td class="tbl2" style="padding-top: 35px;"><?php echo $row['end_date'] ?></td>
                      

                <td class="tbl2" style="padding-top: 35px;">
              
                <?php 
                if(strtotime(date('Y-m-d')) < strtotime($row ['start_date'])): 
                echo '<b>Pending</b>';             

                elseif(strtotime(date('Y-m-d')) > strtotime($row ['start_date']) &&  strtotime(date('Y-m-d')) < strtotime($row['end_date'])): 
                echo '<b>Shows</b>'; 
						 	  
                else: echo '<b>Show Ended</b>';
						 	  
				        endif; ?>

                </td> 
                               
                </tr>
                <?php 
                $no++;
                } ?>
            </table>
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
      </form>
    </div>
  </div>
  </div>
</div>
</div>
<!-- ############################################################################################################################################# -->

</body>
</html>