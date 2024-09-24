<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){
   $message = $_SESSION['message'];

   echo "<script type='text/javascript'> 
   alert('$message');
   </script>";

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- navbar start -->
    <nav>
        <label class="logo" for="">W-School</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <!-- navbar end -->

    <!-- banner start -->
    <div class="banner">

        <label class="img_text">We Teach Students With Care</label>

        <img class="main_img" src="img/school 2.avif">
    </div>
    <!-- banner end -->
     <!-- welcome to school section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="img/school gate.jpg" alt="">
            </div>

            <div class="col-md-8">
                <h1>Welcome to W-School</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sint ratione. Iusto nesciunt harum illum nam labore excepturi exercitationem eligendi ratione obcaecati quia explicabo, dolor, inventore molestiae voluptate eum dignissimos! Quam ea autem quo vitae quidem suscipit aliquam repudiandae repellat ullam libero deleniti asperiores a facilis, sint minus eaque dolorem accusantium, totam animi pariatur blanditiis temporibus ipsa. Incidunt, praesentium dolorem.</p>
            </div>

        </div>
    </div>
    <!-- welcome to school section end -->

   <!-- our teacher start -->
    <center>
        <h1 class="our">Our Teacher</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="img/teacher 1.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet assumenda esse pariatur numquam consectetur magni.</p>
            </div>
            <div class="col-md-4">
              <img class="teacher" src="img/teacher 2.jpg" alt="">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo fugit ipsa quo provident pariatur assumenda ea hic id.</p>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="img/teacher 3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates enim nisi facere distinctio esse recusandae.</p>
            </div>
        </div>
    </div>
<!-- our teacher section end -->
<!-- our course start -->
<center>
        <h1 class="our">Our Course</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="img/web dev.jfif" alt="">
                <h3>Web Development</h3>
          </div>
            <div class="col-md-4">
              <img class="teacher" src="img/graphic.jfif" alt="">
              <h3>Graphic Design</h3>
           </div>
            <div class="col-md-4">
            <img class="teacher" src="img/marketing.jpg" alt="">
            <h3>Marketing</h3>
            </div>
        </div>
    </div>
    <!-- our course end -->
     <!-- Admission form start -->

     <center>
        <h1 class="adm">Admission Form</h1>
</center>

     <div align ="center" class="admission_form">

    <form action="data_check.php" method="POST">

     <div class="adm_int">
        <label class="label_text" for="">Name</label>
        <input class="input_deg" type="text" name="name">
     </div>
     <div class="adm_int">
        <label class="label_text"  for="">Email</label>
        <input class="input_deg"  type="text" name="email">
     </div>
     <div class="adm_int">
        <label class="label_text"  for="">Phone</label>
        <input class="input_deg"  type="text" name="phone">
     </div>
     <div class="adm_int">
        <label class="label_text"  for="">Message</label>
        <textarea name="message" class="input_text"></textarea>
     </div>
     <div class="adm_int">
        <input class="btn btn-primary" id="submit" type="submit" name="apply" value="Apply">
     </div>

    </form>
     </div>
     <!-- admission form end -->

     <!-- footer section  -->
      <footer>
        <h5 class="footer_text">All @copyright reserved by dani krossing </h5>
      </footer>






      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </body>

</html>