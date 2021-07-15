
<!DOCTYPE html>
<head>
    
    <title>Movie_booking</title>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    
    <style>
        html 
        {
            font-size: 90%;
        }
        .list 
        {
            font-size: larger;
        }
        .nav-link
        {
            color: aliceblue;
        }
        #nav-link1
        {
            color: lightgray;
        }
        .sidenav 
        {        
            height: 100%;
            border-radius: 2px;    
            position: fixed;
            top: 5.7rem;
            left: 5;
            width: 16rem;
            padding: 1.2rem 0;
        }
        .sidenav .list 
        {
            display: flex;
            flex-direction: column;
        }
        .sidenav .list a:hover 
        {
            border-left: 4px solid aliceblue;
            border-right: 4px solid aliceblue;
            /* background: #343a59; */
            /* color: #c7bed4; */
            transition: 0.3s ease;
            border-bottom-left-radius: 9px; 
            border-bottom-right-radius: 2px; 
            border-top-left-radius: 2px; 
            border-top-right-radius: 9px; 
        }   

    </style>


</head>
<body>

        <div class="wrapper">
         <aside class="sidenav hidden-sm hidden-md mr-5" style="background-color: #343a40; top: auto; font-family: sans-serif;">
            <div class="list mt-2" id="menu" style="margin-left: 1px">
                <div class="sb-sidenav-menu-heading" style="padding-top: 70px;"></div>
                <div class="sb-sidenav-menu-heading mb-3" style="color: white"> RK's CENIMA</div>
                <a class="nav-link mt-2" id="nav-link1" href="theatre_setting.php"><i class="fas fa-cog mr-2"></i> Theatre Setting</a>
                <a class="nav-link mt-2" id="nav-link1" href="movie_selection.php"><i class="fas fa-book mr-2"></i> Movie Booking</a>
                <a class="nav-link mt-2" id="nav-link1" href="Search.php"><i class="fas fa-list mr-2"></i> Booking Details</a>
                <a class="nav-link mt-2" id="nav-link1" href="history.php" ><i class="fas fa-box mr-2"></i> Booking History</a><br>
                <a class="nav-link mt-2" id="nav-link1" href="print_page.php" style="color: white"><i class="fas fa-print mr-2"></i> Tables</a>
                
                </nav>                                 
                </div>
           </div>                      
        </aside> 
        </div>



<!-- ############################################################################################################################################# -->

</div>

        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



</body>
</html>
