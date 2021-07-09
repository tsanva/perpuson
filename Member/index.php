<!doctype html>
<?php include("function/functions.php");
session_start();
$email = $_SESSION["email"];
?>
<html lang="en">

<head>
    <meta charset="utf-8" />


    <title>Perpus.On</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">

    <!-- Navbar will come here  -->

    <nav class="navbar navbar-fixed-top" role="navigation" id="topnav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Navigasi</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
                <a class="navbar-brand" href="#">Perpus.On</a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php 
                    
                    
                   
                    if(!isset($_SESSION['email'])){
                        echo "<li><a href='login1.php'>Masuk</a></li>";
                    }
                    else 
                    {
                        echo "<li><a href='logout.php'>Keluar</a></li>";
                    }
                     if(isset($_SESSION['email'])){
                        $sess=$_SESSION['email'];
                        echo "<li><a>Hi ".$_SESSION['email']." !</a></li>";
                        
                    }
                    else {
                        echo "<li><a>Member</a></li>";
                    }
                    ?>

                    <li><a href="cart.php">Keranjang<span class="badge"><?php total_items(); ?></span></a></li>
                    <?php
                    if(isset($_SESSION['email'])){
                    echo "<li><a href='list_pinjam.php'>Buku Dipinjam</a></li>";
                    }
                    ?>

                </ul>
                <form action="results.php" method="get" class="navbar-form navbar-right">
                    <div class="form-group label-floating">
                        <label class="control-label">Cari Buku</label>
                        <input type="text" name="user_query" class="form-control">
                    </div>
                    <button type="submit" name="search" class="btn btn-round btn-just-icon btn-primary"><i class="material-icons">search</i><div class="ripple-container"></div></button>
                </form>


            </div>

        </div>
    </nav>



    <!-- end navbar -->
    <div class="container">
    <h2>Buku Terpopuler</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="item active">
                    <div class="col-md-12" id="bk1">
                        <img src="./assets/images/perahu.jpg">
                        <div class="c-content "><b>Perahu Kertas</b><br> by Dewi Lestari <br><br>
                        <p>Novel Perahu Kertas dimulai dengan kisah seorang anak muda bernama Keenan. Ia seorang remaja yang baru saja menyelesaikan sekolah menengah atas-nya di Belanda, tepatnya di Amsterdam.</p>
                    </div>
                </div>
            </div> 
            </div>
        </div>
    </div>
    <!--carousel end-->



    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-2 col-md-2" id="myScrollspy">
                <ul data-offset-top="225" data-spy="affix" class="nav nav-pills  nav-stacked">
                    <li role="presentation"><a href="index.php">Semua Buku</a></li>
                    <?php getcats();?>

                </ul>
            </div>
            <div class="col-lg-10 col-md-10" id="mainarea">



                <div class="container-fluid">
                    <?php cart(); ?>
                    <!-- Adding books -->
                    <div class="row">
                        <?php getbooks();?>
                        <?php get_bycat();?>


                    </div>


                </div>

            </div>
        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>
<script src="assets/js/carousel.js" type="text/javascript"></script>
<script src="assets/js/myscripts.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</html>
