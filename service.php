<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="service_style.css" type="text/css"/>
        <title>Tax Calculator</title>


        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="iistyle.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    
    
    <body>
    	

        <div>

        	<?php include 'header.php' ?>

        	<div class="container m-auto w-50">
        		
           
                
                <div class="main-content">
                    
		
                    <div class="form">
                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<h2>Fill the Form.....</h2>
                <br/>
                <br/>

<label>Gender:</label><input type="radio" id="male" required="1" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female" required="1">
<label for="female">Female</label><br><br>
<label>Age:</label><input type="radio" required="1" id="below" name="age" value="below">
<label for="male">Below65</label>
<input type="radio" id="above" required="1" name="age" value="above">
<label for="female">Above 65 or 65</label><br><br>



<label>Salary:</label><input type="number" name="salary" required="1"><br><br>
<label>Interest on securities:</label><input type="number" required="0" name="security"><br><br>
<label>Income from house property:</label><input type="number" required="1" name="house"><br><br>
<label>Agricultural Income:</label><input type="number" required="1" name="agri"><br><br>
<label>Income from business or profession:</label><input type="number" required="1" name="business"><br><br>
<label>Capital gains:</label><input type="number" required="1" name="Capital"><br><br>
<label>Income from other sources:</label><input type="number" required="1" name="other"><br><br>
<input type="submit" value="Submit">
<input type="submit" value="Cencel">
</form>
 <br>
             
     </div>		


 
 <?php
 
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
		
			$gender = $_REQUEST['gender'];
			$age = $_REQUEST['age'];
			
			$salary = $_REQUEST['salary'];
		$security = $_REQUEST['security'];
 $house= $_REQUEST['house'];
 $agri= $_REQUEST['agri'];
 $business= $_REQUEST['business'];
$Capital = $_REQUEST['Capital'];
 $other= $_REQUEST['other'];
 
 $total=$salary+$security+$house+$agri+ $business+$Capital+$other;
echo "Total amount on have to pay tax is : ";
		echo $total;
                echo"Tk";
                echo"</br>";
	echo"<br/>";
        echo "Total tax : ";
	if(empty($gender)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($age)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($salary)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($security)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($house)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($agri)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($business)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($Capital)){
		echo"<span style='color:red'>*required</span>";	
	}
	elseif(empty($other)){
		echo"<span style='color:red'>*required</span>";	
	}

	
		if(	$gender == 'male' and $age =='below'){
		
		if($total<=250000){
		$tax=0;
		echo $tax; 
		}
		elseif($total>250000 and $total<=400000 ){
		echo $tax = $total * 0.10;	
		}
		elseif($total>400000 and $total<=500000 ){
		echo $tax = $total * 0.15;	
		}
		elseif($total>500000 and $total<=600000 ){
		echo $tax = $total * 0.20;	
		}
		elseif($total>600000 and $total<=3000000 ){
		echo $tax = $total * 0.25;	
		}
		else{
		echo $tax = $total * 0.30;	
		}
		
	}
	
	else{
		
		if($total<=300000){
		$tax=0;
		echo $tax; 
		}
		elseif($total>300000 and $total<=400000 ){
		echo $tax = $total * 0.10;	
		}
		elseif($total>400000 and $total<=500000 ){
		echo $tax = $total * 0.15;	
		}
		elseif($total>500000 and $total<=600000 ){
		echo $tax = $total * 0.20;	
		}
		elseif($total>600000 and $total<=3000000 ){
		echo $tax = $total * 0.25;	
		}
		else{
		echo $tax = $total * 0.30;	
		}
		
	}
	
	echo"    Tk";
	}
			
 ?>

                                 
                     
                
                </div>
                
                
         
            
            
            
            
            
            
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
    
</html>