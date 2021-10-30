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


.cardumrah1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin-left:10px;
  float:left;
  pointer:curser;
  
}

.cardumrah1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
}

.cardumrah1details  {
  padding: 15px 35px;
  float:left;
  
}

.cardumrah1details a{
text-decoration:none;
border:none;
font-family:arial;
font-size:120%
text-align:center;
color:Maroon;
}



.cardumrah2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  margin-left:30px;
  margin-right:10px;
  float:right;
  pointer:curser;
}

.cardumrah2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 10px 10px 0 0;
  
}

.cardumrah2details {
  padding: 15px 35px;
  float:right;
  
}

.cardumrah2details a{
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
				<br>
				<br>
				
				
				
				
				<div class="cardumrah1">
					<img src="images/Pic-1.jpg" alt="umrah1" width="100%">
				<div class="cardumrah1details">
				<a href="#"><b>Umrah</b></a>
				<br>
				<a>7 days</a>
				<br>
				<a><b>BDT.84,000</b></a>
				<br>
				<form  action="singup.php">
		       <button class="bookbutton" onclick="openPage('Singup')"><b>Book now</b></button>
			   </form>
				</div>
				</div>
				
				
				
				<div class="cardumrah2">
					<img src="images/file-20200304-66064-18m5nlp.jpg" alt="umrah2" width="100%">
				<div class="cardumrah2details">
				<a href="#"><b>Umrah</b></a>
				<br>
				<a>15 days</a>
				<br>
				<a><b>BDT.90,000</b></a>
				<br>
				<form  action="singup.php">
		       <button class="bookbutton" onclick="openPage('Singup')"><b>Book now</b></button>
			   </form>
				</div>
				</div>
				
				
		</body>
	</html>
		
				
				
				