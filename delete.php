<?php 

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'connect');

$id = $_GET['id'];

$deletequery = "delete from loginform where ID=$id";

$query = mysqli_query($con, $deletequery);


if($query) {
		?>

		<script>
			alert("Data deleted successfully!!!");
		</script>

		<?php
		header('location: list.php');
	}
	else{
		
	?>

	<script>
		alert("Data Not Deleted!!!");
	</script>

	<?php
}

 ?>