<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['type'] == 'student') {
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "studentproject";

$data = mysqli_connect($host,$user,$password,$db);
$sql = "SELECT * FROM admission";
$result = mysqli_query($data,$sql);

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php
    include'admin_css.php';
    
    
    ?>

</head>

<body>
    
<?php

include'admin_sidebar.php';
?>


    <div class="content">
       <h1> Applied For Admission</h1>  
<table style="border:1px solid red;" >
<tr>
    <th style="padding: 20px;font-size:15px;">Name</th>
    <th style="padding: 20px;font-size:15px;">Email</th>
    <th style="padding: 20px;font-size:15px;">Phone</th>
    <th style="padding: 20px;font-size:15px;">Message</th>
</tr>

<?php

while($info=$result->fetch_assoc()){


?>

<tr style="border: 1px solid red;">
    <td style="padding: 20px;">
        <?php echo "{$info['name']}"; ?>
    </td>
    <td style="padding: 20px;"><?php echo "{$info['email']}"; ?></td>
    <td style="padding: 20px;"><?php echo "{$info['phone']}"; ?></td>
    <td style="padding: 20px;"><?php echo "{$info['message']}"; ?></td>
</tr>
<?php
}
?>

</table>


    </div>






</body>

</html>