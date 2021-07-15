<?php  
 
     $con = mysqli_connect("localhost","root","","project2") ;
     $output = '';
     $sql = "SELECT * FROM theatre_setting WHERE Theatre_name = '".$_POST["Theatre_name"]."' ORDER BY seat_group";
     $result = mysqli_query($con,$sql);
     $output = '<option value = "">Choose...</option>';

     while($row = mysqli_fetch_assoc($result)) 
    {
        $output .='<option value="'.$row["seat_group"].'">'.$row["seat_group"].'</option>';
    }    
    echo $output;

?>