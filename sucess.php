
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    var div = $("div");  
    div.animate({left: '100px'}, "slow");
    div.animate({fontSize: '3em'}, "slow");
  });
});
</script> 
<style>
.message{
	color:Maroon;
}
.but{
	
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
.but:hover{
background-color:Coral;
color:Gray;
}
	

body{
	background-color:Wheat;
	margin-top:60px;
}
</style>
</head>
<body>
<center>

<button class="but" ><b>Click!!<b></button>


<div style="height:100px;width:200px;position:absolute;" class="message"><b>Successfully Booked!!!<b></div>
</center>

</body>
</html>
