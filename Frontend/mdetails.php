<html>
<head>
		<link rel="stylesheet" href="details.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
	<title>Manufacturer Details</title>
	<body style="background-color:black;">
			<?php include "eheader.php";
				
		 
			?>
				<h1 class="h1">MANUFACTURERS</h1><br><br>
			<?php	
				 include "connection.php"; 
				 //run query
				$query="select * from manufacture";
				mysqli_query($conn, $query) or die('Error querying database.');

				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($result);

				//printing table
				
					echo	"<table class='table table-dark' style='width:100%'>
								<tr>
									<th></th>
									<th></th>
									<th style='font-size:20px'>ID</th>
									<th style='font-size:20px'>Name</th>
									<th style='font-size:20px'>Colour</th>
									<th style='font-size:20px'>Size</th>
									<th style='font-size:20px'>Seller</th>
								</tr>";
					while ($row = mysqli_fetch_array($result))
					{  
						echo	 "<tr>
									<td></td>
									<td></td>
									<td>".$row['M_ID']."</td>
									<td>".$row['M_Name']."</td>	
									<td>".$row['M_ADDRESS']."</td>
									<td>".$row['M_Email']."</td>
									<td>".$row['M_Phno']."</td>
								  </tr>";
					}
					
					echo	"</table>";

			?>
	</div>		
	</body>
</html>