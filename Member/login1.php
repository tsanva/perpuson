<!DOCTYPE html>
<?php
session_start();
include("function/functions.php");
include("includes/db.php");
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Daftar/Masuk</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="login/css/style.css">
     <link rel="stylesheet" href="assets/css/styles.css">
    

  
</head>

<body style="margin-top:0px">

<div class="container-fluid">
    <div class="row"></div></div>
    
    
<nav class="navbar navbar-fixed-top" role="navigation">
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
                    <li><a href="index.php">Home</a></li>
                </ul>
            </div>
    </div>
    </nav>

  
<div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
            <a href="#" class="logo">Perpus.On</a>

            <div class="heading">
               <h2>Hi!, Silahkan masuk terlebih dahulu</h2>
               <p>Perpustakaan Digital Berbasis Web</p>
            </div>

            <div class="success-msg">
               <p>Selamat! Anda terdaftar dalam Perpustakaan</p>
               <a href="#" class="profile">Profil Anda</a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice ">
               <form class="login-form" action="login1.php" method="post">
                  <div class="form-group">
                     <label for="loginemail">Email Address</label>
                     <input type="email" name="loginemail" id="loginemail" required>
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>

                  <div class="CTA">
                     <input type="submit" name="login" value="Masuk">
                     <a href="#" class="switch">Belum mempunyai akun</a>
                  </div>
                   <a href="checkout.php?forgot_pass">Lupa password</a>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice switched">
               <form action="login1.php" class="signup-form"  method="post">

                  <div class="form-group">
                     <label for="name">Nama Panjang</label>
                     <input type="text" name="username" id="name" class="name" required>
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" name="emailAdress" id="email" class="email" required>
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="phone">No Telfon - <small>Optional</small></label>
                     <input type="text" name="phone" id="phone">
                  </div>
                  

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password"  class="pass" required>
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Konfirmasi Password</label>
                     <input type="password" name="passwordCon" id="passwordCon"  class="passConfirm" required>
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Daftar" name="signup" id="submit">
                     <a href="#" class="switch">Sudah punya akun</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>

</div>

 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src="login/js/index.js"></script>

    
    
    <?php if(isset($_POST['signup'])){
        $ip = getIpAdd();
        $c_name = $_POST['username'];
        $c_email = $_POST['emailAdress'];
        $c_phone = $_POST['phone'];
        $c_pass = $_POST['password'];
        $c_pass2 = 
        $query = "INSERT INTO customer (`cust_ip`, `name`, `email`, `password`, `phone`) VALUES ('$ip','$c_name','$c_email','$c_pass','$c_phone')";
        $checkpass = 
        $result = mysqli_query($conn, $query);
        if($result){
            echo "<script>alert('Pendaftaran Berhasil')</script>";
        }
        $get_items="SELECT * FROM `cart` WHERE `ip_add`='$ip'";
        $run=mysqli_query($conn, $get_items);
        $check_cart = mysqli_num_rows($run);
        if($check_cart==0){
            $_SESSION['email']=$c_email;
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            $_SESSION['email']=$c_email;
            echo "<script>window.open('login1.php','_self')</script>";
            
            
        }
        
    }
    //sign in
            if(isset($_POST['login'])){
                $email= $_POST['loginemail'];
                $pass = $_POST['loginPassword'];
                $sel_c="select * from customer where password='$pass' AND email='$email'";
                $run_c=mysqli_query($conn,$sel_c);
                $check_customer=mysqli_num_rows($run_c);
                if($check_customer==0)
                {
                    echo "<script>alert('Email atau Password salah!')</script>";
                }
          //       $ip = getIpAdd();
          //          $get_items="SELECT * FROM `cart` WHERE `ip_add`='$ip'";
          //          $run=mysqli_query($conn, $get_items);
          //          $check_cart = mysqli_num_rows($run);
          //          if($check_customer>0 AND $check_cart>0){
          //              
                         $_SESSION['email']=$email;
                           echo "<script>alert('Berhasil Masuk!')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
          //          }
        //             if($check_customer>0 AND $check_cart==0){
        //                     $_SESSION['email']=$email;
        //                   echo "<script>alert('Gagal m')</script>";
        //                 echo "<script>window.open('checkout.php','_self')</script>";
            
            
        // }
            
    
        }?>
</body>
</html>
