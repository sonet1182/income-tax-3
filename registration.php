<?php 


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'connect');


if (isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];

	$q="select * from loginform where firstname = '$firstname' && lastname = '$lastname' && email = '$email' && password = '$password'  && phone = '$phone' ";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		?>

		<script>
			alert("Duplicate Data!!!");
		</script>

		<?php
	}
	else{
		$qy = "insert into loginform(firstname, lastname, phone, email, password, fullname) values('$firstname', '$lastname', '$phone', '$email', '$password', '$firstname $lastname') ";
		mysqli_query($con, $qy);
	?>

	<script>
		alert("Data Inserted Succesfully!!!");
	</script>

	<?php
}




}



?>