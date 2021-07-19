<?php
session_start();
if ($_SESSION['sistem']=="login") {
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=siswa"><i class="fa fa-dashboard fa-3x"></i>Siswa</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=ruangan"><i class="fa fa-dashboard fa-3x"></i>Ruangan</a>
                    </li>
						   <li  >
                        <a   href="index.php?halaman=guru"><i class="fa fa-dashboard fa-3x"></i>Guru</a>
                    </li>	
                      <li  >
                        <a  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i>Logout</a>
                    </li>		
		
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

            <?php 
            // jika kondisi salah satu di kerjakan maka kondisi itu lah yang akan di jalankan
            if (isset($_GET['halaman'])) {
                
                if ($_GET['halaman']=="siswa") {
                    
                    include 'siswa.php';
                }elseif ($_GET['halaman']=="tambah") {
                    
                    include 'tambah.php';
                }elseif ($_GET['halaman']=="ubah"){

                    include 'ubah.php';
                }elseif ($_GET['halaman']=="hapus"){

                    include 'hapus.php';
                }elseif ($_GET['halaman']=="ruangan") {
                    
                    include "ruangan.php";
                }elseif ($_GET['halaman']=="tambah_ruangan") {
                    
                    include 'tambah_ruangan.php';
                }elseif ($_GET['halaman']=="ubah_ruangan") {
                    
                    include 'ubah_ruangan.php';
                }elseif ($_GET['halaman']=="hapus_ruangan") {
                    
                    include 'hapus_ruangan.php';
                }elseif ($_GET['halaman']=="guru") {
                    
                    include 'guru.php';
                }elseif ($_GET['halaman']=="tambah_guru") {
                    
                    include 'tambah_guru.php';
                }elseif ($_GET['halaman']=="ubah_guru") {
                    
                    include 'ubah_guru.php';
                }elseif ($_GET['halaman']=="hapus_guru") {
                    
                    include 'hapus_guru.php';
                }elseif ($_GET['halaman']=="logout"){

                    include 'logout.php';
                }

            }
             ?>
            
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
<?php }else{

    header("location:login.php");
}


 ?>