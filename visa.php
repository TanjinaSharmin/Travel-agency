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
		
		.b3{
		background-color:Coral;
		color:Gray;
		}
	    
		.b4:hover{
		background-color:Coral;
		color:Gray;
		}
		
		
		
		
     

		.b5:hover{
		background-color:Coral;
		color:Gray;
		}
		
		.dropdown .b6 {
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


.cardindia {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 35%;
  border-radius: 5px;
  margin-left:10px;
  float:left;
  pointer:curser;
  
}

.cardindia:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
}

.cardindiadetails  {
  padding: 15px 35px;
  float:left;
  
}

.cardindiadetails a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
}


.cardsaudi {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 35%;
  border-radius: 5px;
  margin-left:30px;
  margin-right:10px;
  float:right;
  pointer:curser;
}

.cardsaudi:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
  
}

.cardsaudidetails{
  padding: 15px 35px;
  float:right;
  
}

.cardsaudi a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
margin-right:30px;

}


.cardnepal {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 35%;
  border-radius: 5px;
  margin-left:10px;
  float:left;
  pointer:curser;
  margin-top:20px;
  
}

.cardnepal:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
}

.cardnepaldetails  {
  padding: 15px 35px;
  float:left;
  
}

.cardnepaldetails a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
}


.cardmaldive {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 35%;
  border-radius: 5px;
  margin-left:30px;
  margin-right:10px;
  float:right;
  pointer:curser;
  margin-top:20px;
}

.cardmaldive:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
  
}

.cardmaldivedetails {
  padding: 15px 35px;
  float:right;
  
}

.cardmaldivedetails a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
margin-right:30px;

}



body{
background-color:Wheat;
}
.bookbutton{
background-color:Maroon;
padding:10px 5px;
color:white;
text-decoration:none;
border:none;
color:Wheat;
border-radius:5px;
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
			   <form class="form1" action="contact.php">
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
				
				
				
				
				
				
	
				<div class="cardindia">
					<img src="images/india.jpg" alt="india" width="100%">
				<div class="cardindiadetails">
				<a><b>India<b></a>
				<br>
				<br>
				<a><b>BDT.1850<b></a>
				<br>
				<br>
				<a><b>Email:alsafar111@gmail.com<b></a>
				<br>
				
				<a><b>Phone:+88-02-9563475<b></a>
				<br>
				
				<a><b>Mobile:+88-01911389033<b></a>
				<a><b>Address:House#2,Road#1/B,Block#J,
				      Baridara,Dhaka-1212<b></a>
				</div>
				</div>
				
				<br>
				<br>
			
				
				
				<div class="cardsaudi">
					<img src="images/saudi.jpg" alt="saudi" width="100%">
					<div class="cardsaudidetails">
					<a><b>Saudi<b></a>
					<br>
					<br>
					<a><b>BDT.21000<b></a>
				<br>
				<br>
				<a><b>Email:alsafar111@gmail.com<b></a>
				<br>
				
				<a><b>Phone:+88-02-9563475<b></a>
				<br>
				
				<a><b>Mobile:+88-01911389033<b></a>
				<a><b>Address:House#2,Road#1/B,Block#J,
				      Baridara,Dhaka-1212<b></a>
					</div>
					</div>
					
					<br>
					<br>
					
					
				<div class="cardnepal">
					<img src="images/nepalflag1.jpg" alt="nepal" width="100%" height="50%">
				<div class="cardnepaldetails">
				<a><b>Nepal<b></a>
				<br>
				<br>
				<a><b>BDT.2700<b></a>
				<br>
				<br>
				<a><b>Email:alsafar111@gmail.com<b></a>
				<br>
				
				<a><b>Phone:+88-02-9563475<b></a>
				<br>
				
				<a><b>Mobile:+88-01911389033<b></a>
				<a><b>Address:House#2,Road#1/B,Block#J,
				      Baridara,Dhaka-1212<b></a>
				</div>
				</div>
				<br>
				<br>
				
			
				
				
				<div class="cardmaldive">
					<img src="images/maldiveflag.jpg" alt="maldive" width="100%">
					<div class="cardmaldivedetails">
					<a><b>Maldive<b></a>
					<br>
					<br>
					<a><b>BDT.10000<b></a>
				<br>
				<br>
				<a><b>Email:alsafar111@gmail.com<b></a>
				<br>
				
				<a><b>Phone:+88-02-9563475<b></a>
				<br>
				
				<a><b>Mobile:+88-01911389033<b></a>
				<a><b>Address:House#2,Road#1/B,Block#J,
				      Baridara,Dhaka-1212<b></a>
					</div>
					</div>
					
					
					
					
			
				
				
				
				
				
				
				
				<br>
				<br>
	</body>
</html>