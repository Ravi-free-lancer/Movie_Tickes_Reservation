<?php
include('navbar1.php');
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
    
</head>
<body>

        <div style="height: 100%; width: 220px">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link mt-5" href="#"><i class="fas fa-cog mr-2"></i> Theatre Setting</a>
                            <a class="nav-link" href="#"><i class="fas fa-book mr-2"></i> Movie Booking</a>
                            <a class="nav-link" href="#"><i class="fas fa-list mr-2"></i> Booking Details</a>
                            <a class="nav-link" href="#"><i class="fas fa-box mr-2"></i> Booking History</a>
                            <div class="sb-sidenav-menu-heading">Download</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                             <i class="fas fa-print mr-2"></i>
                              Print
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#"><i class="fas fa-print mr-1"></i>Theatre data</a>
                                    <a class="nav-link" href="#"><i class="fas fa-print mr-1"></i>Theatre Table Data</a>
                                    <a class="nav-link" href="#"><i class="fas fa-print mr-1"></i>Movie Data</a>
                                    <a class="nav-link" href="#"><i class="fas fa-print mr-1"></i>Booking Data</a>
                                    <a class="nav-link" href="#"><i class="fas fa-print mr-1"></i>All History Data</a>
                                </nav>
                            </div>
                        </div>
                    </div>                      
                </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

</body>
</html>