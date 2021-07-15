<?php  

 
     $connect = mysqli_connect("localhost","root","","project2") ;
     $output = '';
     $sql = "SELECT * FROM theatre_setting WHERE Theatre_name = '".$_POST["Theatre_name"]."' ORDER BY seat_group";
     $result = mysqli_query($connect,$sql);
     $output = '<option value = "">Select... </option>';

     while($row = mysqli_fetch_array($result)) 
    //  dei array assoc ahh maathu da
    {
        $output .='<option value="'.$row["Theatre_name"].'">'.$row["seat_group"].'</option>';
    }    
    echo $output;
 

?>