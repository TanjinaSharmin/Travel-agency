<?php include('server2.php') ?>


<html>




<head>
	<style>
	
	.button{
		background-color:Maroon;
		border:none;
		text-decoration:none;
        color: Wheat;
        padding: 16px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
		width:15%;
		margin-left:70px;
		font-family:arial;
		   }
		.b1:hover{
		background-color:Coral;
		color:Gray;
		}
		
		.b2:hover{
		background-color:Coral;
		color:Gray;
		}
		
		.b3:hover{
		background-color:Coral;
		color:Gray;
		}
	    
		.b4{
		background-color:Maroon;
		color:Wheat;
		}
		
		
		
		
     

		.b5:hover{
		background-color:Coral;
		color:Gray;
		}
		
		
		.dropdown .b6		{
  font-size: 16px;  
  text-decoration:none;
  padding: 16px 62px;
  color:Wheat;
  border:none;
  background-color: Maroon;
  font-family: arial;
  margin-left:15px;
  cursor:pointer;
  
  
}
  .dropdown:hover .b6{
   background-color:Coral;
   color:Gray;
		}
		.dropdown-content a {
  background-color:black;
  color: white;
  text-decoration:none;
  padding: 16px 26px;
  display:block;
  text-align: left;
  font-family:arial;
}
	
		.head2{
		text-align:center;
		color:Wheat;
		}
		p{
		text-align:center;
		color:Wheat;
		}
		.form1{
		display:inline;
}
        .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a:hover {
  background-color: LightSteelBlue;
}
	
	
	body{
		background-color:BurlyWood;
		color:Maroon;
	}
	
	.butt{
text-decoration:none;
background-color:Maroon;
color:Wheat;;
padding:20px;
border:none;
pointer:cursor;
width:10%;
font-family:arial;
font-size:15px;
width:20%;
border-radius:10px;

}
.butt:hover{
background-color:Coral;
color:Gray;
}

.f{

padding:20px;
width:50%;
border: 1px solid #ccc;
border-radius: 10px;
}
	
	
	
	
	
	
	
	</style>
	
	
</head>





<body>




 <br>
			<br>
			<br>
			<br>
			

			<form  class="form1" action="home.php">
		       <button class=" button b1" onclick="openPage('Home')"><b>Home</b></button>
			   </form>
			   <form action="about.php" class="form1">
			 
               <button class=" button b2" onclick="openPage('About')"><b>About</b></button>
			   </form>
			   <form class="form1" action="visa.php">
               <button class=" button b3" onclick="openPage('Contact')"><b>Visa Processing</b></button>
			   
			   </form>
			   <form class="form1" action="singup.php">
			    
			   
                <button class =" button b4" onclick="openPage('SingUp')"><b>SingUp</b></button>
				
				</form>
				
				
				<form class="form1" action="package.php">
				<div class="dropdown">
				<button class="b6" onclick="openPage('Package')"><b>Package</b></button>
				<div class="dropdown-content">
				
				<a href="package1.php">Bangladesh</a>
				<a href="package2.php">Saudi Arabia(Umrah)</a>
				<a href="package3.php">India</a>
				<a href="package4.php">Nepal</a>
				<a href="package5.php">Maldives</a>
				</div>
				</div>
				
				
				</form>
				<br>
				<br>
				
				
<center>

<form action="" method="post">
<?php include('errors.php'); ?>


<h2>Billing Address</h2>
<br>

<label><b>Name:</b></label> <input type="text" name="name" class="f"  value="<?php echo $name; ?>"><br>
<br>
<label><b>Email:</b></label> <input type="text" name="email" class="f"  value="<?php echo $email; ?>"><br>
<br>
<label><b>Address:</b></label> <input type="text" name="address" class="f"><br>
<br>

<label><b>District:</b></label> <input type="text" name="district" class="f"><br>
<br>


<br>

<h2>Payment</h2>
<br>

<label><b>Accepted Cards</b></label><br>
<br>


<a href=""><img src="images/visa.png" width=35 height=25></a>
<a href=""><img src="images/paypal.png" width=35 height=25></a>
<a href=""><img src="images/master.png" width=35 height=25></a>
<a href=""><img src="images/discover.png" width=35 height=25></a>



<br>
<br>
<label><b>Name on card: </b></label><input type="text" name="cardname" class="f"><br>
<br>
<label><b>Credit card number:</b></label><input type="password" name="cardnumber" class="f" style="margin-right:40px;"><br>
<br>
<label><b>Exp Month:</b></label><input type="text" name="expm" class="f" style="margin-left:20px;"><br>
<br>
<label><b>Exp Year:</b></label><input type="number" name="expy" class="f" style="margin-left:30px;"><br>
<br>
<br>

<input type="submit" value="Pay" name="pay" class="butt">



</center>

</form>









</body>




</html>