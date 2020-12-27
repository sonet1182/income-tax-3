<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

    <?php Include 'header.php' ?>
	

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="button" onclick="location.href='list.php';" value="Show Here" />
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>



                                <form class="row register-form" method="POST">

                                	

                                	<?php 


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'connect');

$ids = $_GET['id'];

$showquery = "select * from loginform where ID={$ids}";

$showdata = mysqli_query($con,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['submit'])){
	$idupdate = $_GET['id'];

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];


	$query = "update loginform set ID=$idupdate, firstname='$firstname', lastname='$lastname', phone='$phone', email='$email', password='$password' where id=$idupdate";

	$result = mysqli_query($con, $query);


	if($result) {
		?>

		<script>
			alert("Data Updated Properly!!!");
		</script>

		<?php
	}
	else{
		
	?>

	<script>
		alert("Data Not Updated!!!");
	</script>

	<?php
}




}



?>




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstname" placeholder="First Name *" value="<?php echo $arrdata['firstname'] ?>" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name *" value="<?php echo $arrdata['lastname'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password *" value="" required/>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="<?php echo $arrdata['email'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="11" maxlength="11" name="phone" class="form-control" placeholder="Your Phone *" value="<?php echo $arrdata['phone'] ?>" />
                                        </div>
                                        
                                        <input type="submit" class="btnRegister"  value="Update" name="submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>


<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</html>
