<html>
<head>
		<link rel="stylesheet" href="details.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
	<title>Product Details</title>
	<body style="background-color:black;">
			<?php include "eheader.php";
				
		 
			?>
				<h1 class="h1">PRODUCTS</h1><br><br>
			<?php	
				 include "connection.php"; 
				 //run query
				$query="select * from product p Join seller s Join manufacture m on p.S_ID=s.S_ID AND s.M_ID=m.M_ID ";
				mysqli_query($conn, $query) or die('Error querying database.');

				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_array($result);

				//printing table
				
					echo	"<table class='table table-dark' style='width:100%'>
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th style='font-size:20px'>ID</th>
									<th style='font-size:20px'>Name</th>
									<th style='font-size:20px'>Colour</th>
									<th style='font-size:20px'>Size</th>
									<th style='font-size:20px'>Price</th>
									<th style='font-size:20px'>Seller</th>
									<th style='font-size:20px'>Manufacturer</th>
								</tr>";
					while ($row = mysqli_fetch_array($result))
					{  
						echo	 "<tr>
									<td></td>
									<td></td>
									<td><img id='img' src='" .$row['pic']. "' width='100' height='50' alt='centered image'</td>
									<td>".$row['P_ID']."</td>
									<td>".$row['P_Name']."</td>	
									<td>".$row['P_Colour']."</td>
									<td>".$row['P_Size']."</td>
									<td>".$row['Price']."</td>
									<td><a id='link' href='seller.php?S_Name=".$row['S_Name']."'><u>".$row['S_Name']."</u></a></td>
									<td><a id='link' href='manufacturer.php?M_Name=".$row['M_Name']."'><u>".$row['M_Name']."</u></a></td>
								  </tr>";
					}
					
					echo	"</table>";

			?>
	</div>		
	</body>
</html>