<?php
    
    $con = mysqli_connect('localhost','root','','project2');
    
    
    if(isset($_POST['search']))
          {
                    
            $search = $_POST['search'];
            $sql = "select * from id where booking like '%$search%'";
          }
          else
           {     
            $sql = "select * from booking";
            $search = "";
           }
           $result = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
  <html>
     <head>
     <title>Search Image</title>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     <body>
       <center>
       <div name="div_search_form2">
         <form class="tbl_movie_book_fetch">
            <header class="hf"> <b>  Details Search Here </b></header>

                
                <label align="left" class="lbl">MovieName</label>
                <input type="text" name="search" class="txtboxes" placeholder="Search By Name" value="<?php echo $search; ?>" required>
                
                <button class="btn1" >Search</button>
            
            <br></br>
         <table class="table table-dark">
         <tr align="center" class="tbl1">
         <th class="tbl2">Id</th>
         <th class="tbl2">Movie </th>
         <th class="tbl2">Movie Name</th>
         <th class="tbl2">details</th>
        
         
         </tr>

         <?php while($row = mysqli_fetch_array($result))
         { ?>

         <tr class="tbl1">
         <td class="tbl2"><?php echo $row['id'] ?></td>
         <td class="tbl2"> <?php echo '<img src="data:image;base64,'.base64_encode ($row['image']). '" alt="Image" style="height ++++66++936: 100px ; weight : 100px"  >'; ?> </td>
         <td class="tbl2"><?php echo $row['fullname'] ?></td>
         
         <td class="tbl2"><?php echo $row['details'] ?></td>
         
         </tr>
         <?php
         } 
         ?>
         </table>
         </center>
        </div>
         </div>
         </form>
     </body>
  </html>

            