<!-- ########################################################################################################################################### -->
<!-- theatre_setting Insetion -->
<?php
  
    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['add']))
    {
        $theatre_name = $_POST['theatre_name'];
        $seat_group = $_POST['seat_group'];        
        $total_seats = $_POST['total_seats'];
        
          $query = "INSERT INTO theatre_setting(theatre_name, seat_group, total_seats)                  
          VALUES ('$theatre_name','$seat_group','$total_seats')";

          $run_insert = mysqli_query($db,$query);   

          if($run_insert)
            {
                echo "<script> alert('Data Successfully Added'); </script>";
            }
          else
            {
              echo '<script type=""text/javascript">alert("Error detucted")</script>';
            }             
      }
?>
<br>



<!--###############################################################################################################################################-->
<!-- add_theatre Insetion  -->



<?php

    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['new']))
    {
        $theatre_name = $_POST['theatre_name'];
        $sqlname = "select * from add_theatre where theatre_name = '$theatre_name'";
        $sqlerr = mysqli_query($db, $sqlname);
        
        if(mysqli_num_rows($sqlerr) > 0)
        {
            echo "<script> alert('This Theatre Name is alredy taken'); </script>";
        }
           else
            {
              $query = "INSERT INTO add_theatre(theatre_name) VALUES ('$theatre_name')";
              $run_insert = mysqli_query($db,$query);   

              if($run_insert)
                {
                    echo "<script> alert('Theatre Name Successfully Added'); </script>";
                }
              else
                {
                  echo '<script type=""text/javascript">alert("Error Detucted")</script>';
              } 
          }            
      }
?>
<br>



<!--###############################################################################################################################################-->
<!-- Tittle -->


<html>
  <head>
    <title>Theatre Setting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <style>
        table.dataTable 
        {
            border: 2px solid lightgray;
            border-radius: 7px;
        }
    </style>

  </head>
  <body >




<!--###############################################################################################################################################-->
<!-- for add theatre data -->




<div class="modal fade" id="theatre_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST">
      <div class="modal-body">
        
        <?php 
        
           $mysqli = mysqli_connect('localhost','root','','project2') or die();  
           $resultset = $mysqli->query("SELECT theatre_name FROM add_theatre"); 
        
        ?>
                <div class="form-group">
                  <label>Theatr Name</label>
                   <select class="custom-select" name="theatre_name">

                      <?php while($rows = $resultset->fetch_assoc())
                        {
                          $theatre_name = $rows['theatre_name'];
                          echo "<option value = '$theatre_name' >$theatre_name </option>";
                        }
                        
                      ?>      

                    </select>            
                  
                  </div>
                  <div class="form-group ">
                    <label for="inputPassword4">Seat Group</label>
                    <input type="text" class="form-control" name="seat_group" placeholder="Enter the Seat group" required>
                  </div>
                
                 <div class="form-group">
                    <label for="inputAddress">Seats</label>
                    <input type="number" class="form-control" name="total_seats" min="1" placeholder="Number of seats" required>
                 </div>
                
                <button type="submit" name="add" class="btn btn-primary"><span class="fas fa-plus"></span> Add</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>








<!--###############################################################################################################################################-->
<!-- for edit theatre data -->







<?php

    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['edit']))
    {
        $theatre_id = $_POST['theatre_id'];
        $theatre_name = $_POST['theatre_name'];
        $seat_group = $_POST['seat_group'];        
        $total_seats = $_POST['total_seats'];
        
          $query = "UPDATE theatre_setting SET theatre_name = '$theatre_name', seat_group = '$seat_group', total_seats = '$total_seats' WHERE theatre_id = $theatre_id";

          $run_insert = mysqli_query($db,$query);   

          if($run_insert)
            {
                echo "<script> alert('Data Successfully Edited'); </script>";
            }
          else
            {
              echo '<script type=""text/javascript">alert("Error detucted")</script>';
            }        
      }
?>
<?php
 $con = mysqli_connect('localhost','root','','project2') or die();    

        // $theatre_id = $_POST['theatre_id'];
        $result = mysqli_query($con,"SELECT * FROM theatre_setting WHERE Theatre_id");

    while($row=mysqli_fetch_array($result))
    {
        $Theatre_id = $row['Theatre_id'];
        $Theatre_name = $row['Theatre_name'];
        $seat_group = $row['seat_group'];
        $total_seats = $row['total_seats'];
        
    }

?>




<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="GET">
      <div class="modal-body">


         <input type="text" class="form-control"  name="Theatre_id" id="Theatre_id" value="<?php echo $Theatre_id;  ?>"  placeholder="id">

        
        <?php 
        
           $mysqli = mysqli_connect('localhost','root','','project2') or die();  
           $resultset = $mysqli->query("SELECT Theatre_name FROM add_theatre"); 
        
        ?>
                
                  <div class="form-group">
                  <label>Theatr Name</label>
                   <select class="form-control" name="Theatre_name" id="Theatre_name" value="<?php echo $Theatre_name;  ?>">

                      <?php while($rows = $resultset->fetch_assoc())
                        {
                          $theatre_name = $rows['theatre_name'];
                          echo "<option value = '$theatre_name' >$theatre_name </option>";
                        }
                        
                      ?>      

                    </select>          
                      
                  </div>
                  <div class="form-group ">
                    <label for="inputPassword4">Seat Group</label>
                    <input type="text" class="form-control" name="seat_group" id="seat_group" value="<?php echo $seat_group; ?>" placeholder="Enter the Seat group" required>
                  </div>
                
                 <div class="form-group">
                    <label for="inputAddress">Seats</label>
                    <input type="number" class="form-control" name="total_seats" min="1" id="total_seats" value="<?php echo $total_seats; ?>" placeholder="Number of seats" required>
                 </div>
                
                <button type="submit" name="edit" class="btn btn-primary"> <span class="fas fa-edit"></span> Edit</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php 
// } ?>








<!-- ############################################################################################################################################### -->
<!-- theatre Name edit Option -->





<?php
    
    $db = mysqli_connect('localhost','root','','project2');    
    if(isset($_POST ['edit2']))
    {
        $Theatre_id = $_POST['Theatre_id'];
        $Theatre_name = $_POST['Theatre_name'];
        
        $query = "UPDATE add_theatre SET Theatre_name = '$Theatre_name' WHERE Theatre_id = $Theatre_id";
        $run_insert = mysqli_query($db,$query); 
        
          if($run_insert)
            {
              echo "<script> alert('Data Successfully Edited'); </script>";
            }
          else
            {
              echo '<script >alert("Error detucted")</script>';
            }             
      }
?>
<!-- ############################################################################################################################################### -->

<?php
 $con = mysqli_connect('localhost','root','','project2') or die();    

        // $theatre_id = $_POST['theatre_id'];
        $result = mysqli_query($con,"SELECT * FROM add_theatre WHERE $Theatre_id");

    while($data=mysqli_fetch_array($result))
    {
        $Theatre_id = $data['Theatre_id'];
        $Theatre_name = $data['Theatre_name'];
    }

?>

<div class="modal fade" id="editmodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST">
      <div class="modal-body">

              <input type="hidden" class="form-control" name="Theatre_id" id="Theatre_id">
                        
              <div class="form-group ">
                <label for="inputName4">Theatre Name</label>
                <input type="text" class="form-control" name="Theatre_name" id="Theatre_name" value="<?php echo $Theatre_name ?>"placeholder="Enter the Theatre Name" required>
              </div>
            
            <button type="submit" name="edit2"  class="btn btn-primary" > <span class="fas fa-edit"></span> Edit</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>






<!--###############################################################################################################################################-->
<!-- for delete theatre data -->





<?php

    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['delete']))
    {
        $theatre_id = $_POST['theatre_id'];
             
            $query = "DELETE FROM theatre_setting WHERE theatre_id = '$theatre_id'";

            $run_insert = mysqli_query($db,$query);   
            if($run_insert)
              {
                echo "<script> alert('Successfully Deleted'); </script>";
              }
            else
             {
                echo '<script type=""text/javascript">alert("Error")</script>';
             }
              
          
    }
?>
<!-- ############################################################################################################################################### -->


<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <form method="POST">
            <div class="modal-body">  

                <input type="hidden" class="form-control"  name="theatre_id" id="delete_id" placeholder="Enter the Seat group" required><br>
                <h4>Do you want to delete the data...!!!</h4><br>            
                    

            </div>
            <div class="modal-footer">
            <button type="submit" name="delete" class="btn btn-danger"> <span class="fas fa-trash"></span> Delete</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>








<!-- ############################################################################################################################################### -->
<!-- theatre name deletion -->



<?php

    $db = mysqli_connect('localhost','root','','project2') or die();    
    if(isset($_POST['delete2']))
    {
            $theatre_id = $_POST['delete_ids'];
  
            $query = "DELETE FROM add_theatre WHERE Theatre_id = '$theatre_id'";

            $run_insert = mysqli_query($db,$query);   
            if($run_insert)
              {               
                  echo "<script> alert('Successfully Deleted'); </script>";
              }       
            else
             {
                echo '<script>alert("Error")</script>';
             }
                  
    }
?>

<!-- ############################################################################################################################################### -->




<div class="modal fade" id="deletemodal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="post">
      <div class="modal-body">

                  <input type="hidden" class="form-control" name="delete_ids" id="delete_ids">
                  <input type="hidden" class="form-control" name="delete_name" id="delete_name">
                  <h4>Do you want to delete the data ...!!!</h4><br>
                
                <button type="submit" name="delete2" class="btn btn-danger" > <span class="fas fa-trash"></span> Delete</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>







<!--###############################################################################################################################################-->
<!-- for add theatres & diplay Theatrename -->









<div class="modal fade" id="theatre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Your Data Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       

       

      <form method="POST">
      <div class="modal-body">
        
                
                  <div class="form-group ">
                    <label for="inputEmail4">Theatr Name</label>
                    <input type="text" class="form-control " name="theatre_name" id="hides"  placeholder="Enter the Theatre Name" required>
                  </div>
                <button type="submit" name="new" class="btn btn-primary col-md-4 mb-3"><span class="fas fa-plus"></span> Add</button>
                <button type="button" class="btn btn-success mb-3 ml-3" onclick=" pdf()" ><span class="fas fa-save mr-2"></span> Download </button>

                <?php
    
                  $con = mysqli_connect('localhost','root','','project2');
                  $sql = "select * from add_theatre";
                  $result = mysqli_query($con,$sql);
                ?>
                
                <h4 class="text-center mb-3"><b>Theatre Names</b></h4>
                               
                <table id="datatableid2" class="table table-responsive-sm ">
                  <thead>
                      <tr class="text-center" >
                      <th class="tbl2">S.NO</th>
                      <th class="tbl2">ID</th>
                      <th class="tbl2">THEATRE</th>
                      <th class="tbl2">ACTIONS</th>   
                            
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
                    <td class="d-flex justify-content-center">  
                    <button type="button" name="edit2" class="btn btn-primary btn-sm mr-2 editbtnnew" data-dismiss="modal" data-toggle="modal" data-target="#editmodal2" ><span class="fas fa-edit"> Edit</button>                   
                    <button type="button" name="delete2" class="btn btn-danger btn-sm deletebtnnew" data-dismiss="modal"><span class="fas fa-trash"></span> Delete</button> </td>   
                               
                    </tr>
                                  
                </tr>
                <?php
                $no++;
                } ?>
            </table>
                       
            
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
      </form>
    </div>
  </div>
</div>




         
<!--###############################################################################################################################################-->

<!--###############################################################################################################################################-->

<!--###############################################################################################################################################-->

<!-- Fetch data for table -->





    <div class="container col-md-10 " style="margin-right: 55px;">
        <div class="jumbotron col-md-12 ml-5">
            
             <div class="card text-center m-auto w-50">
                <h2 class="my-3">Theatre Setting</h2>
             </div>

             <div class="m-aut0 my-3"></div>
             
         <div class="card "  style="border-radius: 10px">
            <div class="card_body" style="background: gray; border-radius: 10px ">
            <button type="button" class="btn btn-primary mb-3 mt-3 ml-3" data-toggle="modal" data-target="#theatre"> <span class="fas fa-plus "></span> Add / Update New theatre</button>
            <button type="button" class="btn btn-primary mb-3 mt-3 ml-3" data-toggle="modal" data-target="#theatre_data"><span class="fas fa-plus"></span>  Add Theatre Data</button>
            <button type="button" class="btn btn-success mb-3 mt-3 ml-3" onclick=" pdf1()" ><span class="fas fa-save mr-2"></span> Download </button>
            <button type="button" class="btn btn-success mb-3 mt-3 ml-3" onclick=" window.print()" ><span class="fas fa-save mr-2"></span> Full Page Print </button>
            </div>
         </div>
         <div class="card mt-2"  style="border-radius: 10px">
             <div class="card-body">
            
              <?php
    
                $con = mysqli_connect('localhost','root','','project2');
                $sql = "select * from theatre_setting";
                $result = mysqli_query($con,$sql);
              ?>
     
     <div id="tab">
     <div class="search_container">     
       <div class="form-group w-100 d-flex justify-content-center">
            <table id="datatableid" class="table table-hover table-responsive-sm w-100">
            <thead>
                <tr class="text-center" >
                <th class="tbl2">S.NO</th>
                <th class="tbl2">ID</th>
                <th class="tbl2">THEATRE</th>
                <th class="tbl2">PLACE</th>                
                <th class="tbl2">SEATS</th>            
                <th class="tbl2">ACTIONS</th>              
                </tr>
            </thead>

                <?php 
                 $no = 1;
                while($row = mysqli_fetch_object($result)) 
                 { ?>
                  <tbody>
                <tr class="text-center">
                <td class="tbl2"><?php echo $no ; ?></td>
                <td class="tbl2"><?php echo $row->Theatre_id  ?></td>
                <td class="tbl2"><?php echo $row->Theatre_name ?></td>
                <td class="tbl2"><?php echo $row->seat_group ?></td>
                <td class="tbl2"><?php echo $row->total_seats?></td>
                
                  
                <td class="d-flex justify-content-center">  
                <button type="button" name="edit" class="btn btn-primary btn-sm mr-3 editbtn"  data-toggle="modal" data-target="#editmodal"> <span class="fas fa-edit"></span> Edit</button>
                <button type="button" name="delete" class="btn btn-danger btn-sm deletebtn"> <span class="fas fa-trash"></span> Delete</button> </td>   
                            
                </tr>
                
                <?php 
                 $no++;
                 } ?>
                </tbody>
            </table>
          </div>
          </div>






<!-- ########################################################################################################################## -->





      
             </div>
         </div>
    </div>
</div>
</div>
</div>

<style>


    div.dataTables_wrapper div.dataTables_filter input {
        margin-left: .5em;
        display: inline-block;
        width: 150px !important;
        border-radius: 5px;
    }

    div#datatableid_wrapper {
        width: 90% !important;
    }

</style>






<!--###############################################################################################################################################-->      







    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>

<!--###############################################################################################################################################-->
<!-- Script for table-->




    <!-- <script >

      $(document).ready( function () 
      {
       $('#datatableid').DataTable();
       
       } );

    </script> -->

        <script>
              
          //   $(document).ready(function() {
          //     $('#datatableid').DataTable( {
          //       dom: 'Bfrtip',
          //       buttons: ['copy','excel', 'pdf', 'print'],
          //       "lengthMenu":[ [10,25,50,-1],[10,25,50,"All"] ]
          //   } );
          // } );

$(document).ready(function() {
    $('#datatableid').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 5 ]
                }
            },
            'colvis'
        ]
    } );
} );
        </script>
<!--#################################################################################################################################-->
<!-- Script for table-->


    <script >

      $(document).ready( function () 
      {
       $('#datatableid2').DataTable();
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


    <!-- <script>
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
                
                $('#theatre_id').val(data[1]);
                $('#theatre_name').val(data[2]);
                $('#seat_group').val(data[3]);
                $('#total_seats').val(data[4]);
                      
               });
        });

    </script> -->



<!--#################################################################################################################################-->
<!-- Script for Delete new-->


<script>
        $(document).ready(function ()
        {
            $('.deletebtnnew').on('click', function ()
            {
                $('#deletemodal2').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function()
                {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#delete_ids').val(data[1]);
                $('#delete_name').val(data[2]);
               });
        });

    </script>



<!--#################################################################################################################################-->
<!-- Script for Edit new-->


<!-- <script>
        $(document).ready(function ()
        {
            $('.editbtnnew').on('click', function ()
            {
                $('#editmodal2').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function()
                {
                    return $(this).text();
                }).get();

                console.log(data);
                
                $('#Theatre_id').val(data[1]);
                $('#Theatre_name').val(data[2]);
                
                      
               });
        });

    </script> -->


    <!-- <script>
        function pdf()
        {
          var doc = document.getElementById('datatableid');
          var page = window.open("","","width: 800,height: 800");
          page.document.write(doc.outerHTML);
          page.document.close();
          page.focus();
          page.print();
          page.close();
          page.close();
        }
    </script> -->

    <script>
        function pdf1()
        {
          var doc = document.getElementById('datatableid2');
          var page = window.open("","","width: 800,height: 800");
          page.document.write(doc.innerHTML);
          page.document.close();
          page.focus();
          page.print();
          page.close();
          page.close();
        }
    </script>


    


<!--#################################################################################################################################-->


  </body>
</html>
