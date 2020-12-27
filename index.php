<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
	<?php  include 'main_header.php';  ?>

	
	<section id="services">
		<div class="container">
			<marquee direction="scroll" style="font-size: 20px;">Welcome!!! <i class="far fa-heart"></i> Calculate Income TAX easily in minute....</marquee>
			<!---<h1>Our Services</h1>--->
			
			<div class="row services">
				<div class="col-md-6 col-12 text-center">
					<div class="icon">
						<i class="fas fa-piggy-bank"></i>
					</div>
					<h3>Worried about Income TAX?</h3>
					<p>The above calculator is only to enable public to have a quick and an easy access to basic tax calculation and does not purport to give correct tax calculation in all circumstances. It is advised that for filing of returns the exact calculation may be made as per the provisions contained in the relevant Acts, Rules etc.</p>
				</div>
				<div class="col-md-6 col-12 text-left">
					<div class="card bg-transparent" style="border: 2px solid #fff;">
					    <div class="card-body">
					        <form  method="POST">
					        <div class="form-group">
					        	<label for="user">Username:</label>
					          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username">
						
					</div>
					        </div>
					        <div class="form-group">
					          <label for="pwd">Password:</label>
					          <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					        <button type="submit" class="btn btn-primary my-3" name="submit" id="ab1">Submit</button>


					        <h6 style="color: white;">Not registered yet? &nbsp &nbsp &nbsp<a href="signup.php">Register Here</a></h6>
					        
					      </form> 

					    </div>
					  </div>  
				</div>
			</div>
		</div>
	</section>

	<section class="my-5" id="about">
		<div class="my-5">
			
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<img src="images/nbrlogo.jpg" class="img-fluid">
				</div>

				<div class="col-lg-6 col-md-6 col-12">
					<h2 class="display-4">National Board of Revenue.</h2>
					<p>The National Board of Revenue (NBR) (Bengali: জাতীয় রাজস্ব বোর্ড) is the central authority for tax administration in Bangladesh. It is under the Internal Resource Division of Ministry of Finance. NBR is the authority for tax policies and tax laws in Bangladesh.[1][2] NBR collects almost 97% of tax revenue and almsot 85% of total revenue for the Government of Bangladesh</p>
					<a href="http://nbr.gov.bd/" class="btn btn-success">Visit Here</a>
				</div>
			</div>
		</div>

	</section>


	<!--------Services---------->
	<section id="services">
		<div class="container">
			<h1>Information</h1>
			<div class="row services">
				<div class="col-md-3 text-center">
					
					<h3>Income tax</h3>
					<p>The history of income tax in this country dates back to 1860 when it was introduced in this country by the British rulers under the title Income Tax Act, 1860. Since then various changes have taken place.</p>
				</div>
				<div class="col-md-3 text-center">
					
					<h3>Value Added Tax</h3>
					<p>The standard rate of VAT is 15% levied on transaction value of most of the imports and supplies of goods and services.</p>
				</div>
				<div class="col-md-3 text-center">
					
					<h3>Tax holidays</h3>
					<p>The tax holiday (until 2024) for companies engaged in “information technology enabled services” also remains intact, although Finance Bill 2017 includes specifically defines these services.</p>
				</div>
				<div class="col-md-3 text-center">
					
					<h3>NBR</h3>
					<p>The National Board of Revenue (NBR) is the central authority for tax administration in Bangladesh. Administratively, it is the attached department to the Internal Resources Division (IRD) of the Ministry of Finance (MoF)</p>
				</div>
			</div>
		</div>
	</section>



	<!----------------Get In Touch--------------->
	<section id="contact">
		<div class="conatiner">
			<h1 class="text-center">Get in Touch</h1>
			<div class="row">
				<div class="col-md-5">
					<form class="contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Phone Number">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Your Email ID">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
						</div>
						<button type="submt" class="btn btn-primary">Send Message</button>
					</form>
				</div>
				<div class="col-md-5 contact-info">
					<div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i> Ashulia, Dhaka</div>
				
					<div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+880 123456789</div>
				
					<div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i> daffodil@diu.edu.bd</div>

					<div class="follow"><level><b>Get Social:</b></level>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section> 




	<section id="bg" class="my-5" >
		<div class="container">
			<h1 class="text-center">Estimate your tax refund</h1>
			<p>Quickly estimate your 2019 tax refund amount with TaxCaster, the convenient tax return calculator that’s always up-to-date on the latest tax laws. This interactive, free tax calculator provides accurate insight into how much you may get back this year or what you may owe before you file.

</p>
		</div>
	</section>




	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Recommendation</h2>
		</div>

		<div class="w-50 m-auto" >
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" autocomplete="off" placeholder="Name" class="form-control" required>
					<div class="invalid-feedback">Please Fill out this field</div>
				</div>

				<div class="form-group">
					<label>Email Id</label>
					<input type="text" name="email" autocomplete="off" placeholder="Email" class="form-control" required>
					<div class="invalid-feedback">Please Fill out this field</div>
				</div>

				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" autocomplete="off" placeholder="+088..." class="form-control" required> 
					<div class="invalid-feedback">Please Fill out this field</div>
				</div>

				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comments"></textarea>
				</div>

				<div class="form-group form-check">
      				<label class="form-check-label">
        				<input class="form-check-input" type="checkbox" name="remember"> Remember me
      				</label>
    			</div>

				<button type="submit" class="btn btn-primary my-3" >Submit</button>

			</form>		
		</div>
	</section>



	<?php  include 'footer.php';  ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


    <script src="js/smooth-scroll.js"></script>
	<script>
	var scroll = new SmoothScroll('a[href*="#"]');
	</script>

</body>


<?php include 'panel.php' ?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


</html>