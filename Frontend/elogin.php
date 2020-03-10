<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="index.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="home.php" >
				<img src="logo.jpeg" width="70" height="70" class="d-inline-block align-top" alt="">
		</a>
		<a class="nav-heading"> THE NOOB.com
		</a>
	</nav>
	
	<body style="background-color:Black;">
			
	<div id="slider">	

			<div class="w3-content w3-section" style="max-width:800px">
			  <img class="mySlides" src="logoslider.jpg" style="width:1160px">
			  <img class="mySlides" src="slider2.png" style="width:1160px">
			  <img class="mySlides" src="slider3.jpg" style="width:1160px">
			</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 2000); // Change image every 2 seconds
			}
			</script>
	</div>
	
		<img id="logo" src="logo.jpeg" width="352.5px" align="left" HSPACE=”300” />	
		
		<div class="login">
			<br>
			<h2><u>EMPLOYEE LOG IN</u></h2>
			<br>
			<script>
				var attempt = 3; // Variable to count number of attempts.
				// Below function Executes on click of login button.
				function validate(){
				var username = document.getElementById("username").value;
				var password = document.getElementById("password").value;
				if ( username == "12345" && password == "0000"){
				alert ("Login successfully");
				window.location = "ehome.php"; // Redirecting to other page.
				return false;
				}
				else{
				attempt --;// Decrementing by one.
				alert("You have left "+attempt+" attempt;");
				// Disabling fields after 3 attempts.
				if( attempt == 0){
				document.getElementById("username").disabled = true;
				document.getElementById("password").disabled = true;
				document.getElementById("submit").disabled = true;
				return false;
				}
				}
				}
			</script>
				<form id="form_id" method="post" name="myform">
				<label>&nbsp User Name :&nbsp</label>
				<input type="text" name="username" id="username"/>
				<label>&nbsp Password : &nbsp &nbsp</label>
				<input type="password" name="password" id="password"/>
				<input type="button" value="Login" id="submit" onclick="validate()"  method="post"/>
			</form>
		</div> 
		
		
	</body>
</html>