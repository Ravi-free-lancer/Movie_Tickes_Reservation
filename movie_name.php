<?php  
        $mysqli = mysqli_connect('localhost','root','','project2') or die();  
        $resultset = $mysqli->query("SELECT * FROM movie_booking WHERE booking_id")->fetch_array();
            
        echo '<option value="">Choose...</option>';
        
                for($i = 1 ; $i <=  date("Ymd",strtotime($resultset['end_date'])) - date('Ymd');$i++ )
                {
                    if(date('Ymd') >= date("Ymd",strtotime($resultset['start_date'])))
                    {
                        echo "<option value='".date('Y-m-d',strtotime(date('Y-m-d').' +'.$i.' days'))."'>".date('M-d-Y',strtotime(date('Y-m-d').' +'.$i.' days'))."</option>";
                    }
                }
?>      
   

 