<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body class="bg_img">
<center>
<div class="form_deg">
    <center class="title_deg">
        Login Form
   <h4>
    <?php
    error_reporting(0);
    session_start();
    session_destroy();
    echo $_SESSION['loginMessage'];
    ?>
   </h4>
    </center>
    <form class="login_form" action="login_check.php" method="POST">
     <div>
        <label class="label_deg" for="">Username</label>
        <input type="text" name="username">
     </div>

     <div>
        <label class="label_deg" for="">Password</label></label>
        <input type="password" name="password">
     </div>
     <div>
        <input class="btn btn-primary" type="submit" name="submit" value="Login">
     </div>



    </form>
</div>

</center>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>