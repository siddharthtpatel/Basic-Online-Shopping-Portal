<html>
	<head>
		<title>BUY</title>
		<link rel="stylesheet" href="buy.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<?php include "cheader.php";
				
		 
			?>
			<?php	
				 include "connection.php"; 
				 //run query
				$query="SELECT * FROM product WHERE P_Name ='".$_GET['P_Name']."'";
				$stud=mysqli_query($conn,$query);
				$row=mysqli_fetch_array($stud);
			?>	
			<script>
				function bought()
				{
					alert ("The order has been placed, press okay to contimue to the home page");
					window.location = "chome.php"; // Redirecting to other page.
				}
			</script>

	<body style="background-color:Black">
		<form>
		<p class="aligncenter">	
		<div class="jumbotron">			
			<label>Product : </label>
			<label> <?PHP echo"".$row['P_Name'].""; ?></label><br>
			<label>Size : </label>
			<label> <?PHP echo"".$row['P_Size'].""; ?></label><br>
			<label>Colour : </label>
			<label><?PHP echo"".$row['P_Colour'].""; ?></label><br>
			<label>Price : </label>
			<label> <?PHP echo"".$row['Price'].""; ?></label><br>
			<label>Address : </label>
			<input  size="50" value="Address"></input><br>
			<label>Mode of Payment : </label>
			<input type="radio" id="COD" value="cod" checked="true">
			<label for="COD">Cash on delivery</label><br>
			<input type="button" class="but" value="		BUY			" id="submit" onclick="bought()" method="post"/>
		</div>
		</p>
		</form>
	</body>
</html>