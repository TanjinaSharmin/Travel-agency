<?php include('server.php') ?>
<!DOCTYPE html>

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
		background-color:Coral;
		color:Gray;
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
   }
.join{
    text-align:center;
	color:Red;
	font-family:arial;
	font-size:40px;
	}
span{
    color:Maroon;
	}
.singup{
padding:10px;
}
.singupform{
padding:20px;
width:50%;
border: 1px solid #ccc;
border-radius: 10px;
}
.buttonsingup{
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
.buttonsingup:hover{
background-color:Coral;
color:Gray;
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
				<h1 class="join">Join Alsafar<span>(وكيل سفر)</span></h1>
				<br>
				
				<center>
				<form class="singup" action="" method="post">
				<?php include('errors.php'); ?>
				
				
				<input type="text" name="username" placeholder="User name" class="singupform"  value="<?php echo $username; ?>"><br>
				<br>
				
				
				<input type="email" name="email" placeholder="Email"class="singupform" value="<?php echo $email; ?>"><br>
				<br>
				<input type="password" name="password_1" placeholder="Password"class="singupform"><br>
				<br>
				<input type="password" name="password_2" placeholder="Confirm Password"class="singupform"><br>
				<br>
				<br>
				<input type="submit" value="Singup" class="buttonsingup" name="regs">
				
				
				</form>
				</center>
				</body>
			</html>
