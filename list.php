

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
  <?php include 'header.php' ?>

 	<div class="main-div">
 		
 		<h1 class="text-center">List of the User</h1>

 		<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Fullname</th>
      <th scope="col" colspan="2">Operation</th>
    </tr>
  </thead>
  <tbody>


  	<?php 


$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'connect');

$q="select * from loginform";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);


while ($res = mysqli_fetch_array($result)) {


 ?>

    <tr>
      <th scope="row"><?php echo $res['ID'] ?></th>
      <td><?php echo $res['firstname'] ?></td>
      <td><?php echo $res['lastname'] ?></td>
      <td><?php echo $res['phone'] ?></td>
      <td><?php echo $res['email'] ?></td>
      <td><?php echo $res['password'] ?></td>
      <td><?php echo $res['fullname'] ?></td>
      <td><a href="update.php?id=<?php echo $res['ID']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: blue"></i></a></td>
      <td><a href="delete.php?id=<?php echo $res['ID']; ?>"><i class="fa fa-trash" aria-hidden="true" style="color: red"></i></a></td>
    </tr>

    <?php 

    	}

     ?>


  </tbody>
</table>

 	</div>
 
 </body>
 </html>