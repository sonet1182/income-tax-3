<?php

//.....Verify........

session_start();

$con = mysqli_connect('localhost','root');


$db = mysqli_select_db($con,'connect');

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from loginform where firstname='$username' and password='$password'";

  $query = mysqli_query($con,$sql);

  $row = mysqli_num_rows($query);
    if ($row == 1){
      //echo "Login Successful";
      $_SESSION['user'] = $username;
      //header('location: list.php');

      ?>

      <script>
      window.location.href="service.php";
    </script>

      <?php
    }
    else{
      ?>

      <script>
      alert("Wrong username or password!!!");
    </script>

      <?php
      //header('location:index.php');
    }
  }


?>