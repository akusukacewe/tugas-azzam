<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body style="background-color:#578FCA;">
    <nav class="bg-warning navbar bg-body-tertiary" >
  <div class="bg-warning container-fluid">
    <a class="bg-warning navbar-brand" href="#">
      <img src="https://static.vecteezy.com/system/resources/previews/004/909/777/non_2x/coding-logo-design-template-vector.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Member Coding
    </a>
  </div>
</nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <h1>Halo Selamat Datang</h1>
    <div style="text-align:center; padding:15%;">

      <p  style="font-size:30px; font-weight:bold;">
       
       <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       
      </p>
      <a class="link-warning link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="logout.php">Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>