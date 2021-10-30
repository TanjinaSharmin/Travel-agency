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
  color:Gray;
  border:none;
  background-color: Coral;
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


.cardmaldive1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin-left:10px;
  float:left;
  pointer:curser;
  
}

.cardmaldive1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
}

.cardmaldive1details  {
  padding: 15px 35px;
  float:left;
  
}

.cardmaldive1details a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
}


.cardmaldive2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin-left:30px;
  margin-right:10px;
  float:right;
  pointer:curser;
}

.cardmaldive2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
  
}

.cardmaldive2details{
  padding: 15px 35px;
  float:right;
  
}

.cardmaldive2details a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
margin-right:30px;

}


.cardmaldive3 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin-left:10px;
  float:left;
  pointer:curser;
  margin-top:20px;
  
}

.cardmaldive3:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
}

.cardmaldive3details  {
  padding: 15px 35px;
  float:left;
  
}

.cardmaldive3details a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
}


.cardmaldive4 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin-left:30px;
  margin-right:10px;
  float:right;
  pointer:curser;
  margin-top:20px;
}

.cardmaldive4:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
  
}

.cardmaldive4details {
  padding: 15px 35px;
  float:right;
  
}

.cardmaldive4details a{
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
				
				
				
				
				
				
	<div class="cardshow">
				<div class="cardmaldive1">
					<img src="images/maldive1.jpg" alt="bangladesh" width="100%">
				<div class="cardmaldive1details">
				<a href="#"><b>Male</b></a>
				<br>
				<a>4-5 days</a>
				<br>
				<a><b>BDT.35,000</b></a>
				<br>
				<form  action="singup.php">
		       <button class="bookbutton" onclick="openPage('Singup')"><b>Book now</b></button>
			   </form>
				</div>
				</div>
			
				
				
				<div class="cardmaldive2">
					<img src="images/maldive7.jpg" alt="umrah" width="100%">
					<div class="cardmaldive2details">
					<a href="#"><b>Maafushi Island</b></a>
					<br>
					<a>4-5 days</a>
					<br>
				<a><b>BDT.35,000</b></a>
				<br>
				<form  action="singup.php">
		       <button class="bookbutton" onclick="openPage('Singup')"><b>Book now</b></button>
			   </form>
					</div>
					</div>
					</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<div class="cardshow">
				<div class="cardmaldive3">
					<img src="images/maldive4.jpg" alt="india" width="100%" height="50%">
				<div class="cardmaldive3details">
				<a href="#"><b>HP Reef</b></a>
				<br>
				<a>4-5 days</a>
				<br>
				<a><b>BDT.35,000</b></a>
				<br>
				<form  action="singup.php">
		       <button class="bookbutton" onclick="openPage('Singup')"><b>Book now</b></button>
			   </form>
				</div>
				</div>
			
				
				
				<div class="cardmaldive4">
					<img src="images/maldive5.jpg" alt="nepal" width="100%">
					<div class="cardmaldive4details">
					<a href="#"><b>Vaadhoo Island </b></a>
					<br>
					<a>4-5 days</a>
					<br>
				<a><b>BDT.35,000</b></a>
				<br>
				<form  action="singup.php">
		       <button class="bookbutton" onclick="openPage('Singup')"><b>Book now</b></button>
			   </form>
					</div>
					</div>
					</div>
					
					
					
			
				
				
				
				
				
				
				
				<br>
				<br>
	</body>
</html>