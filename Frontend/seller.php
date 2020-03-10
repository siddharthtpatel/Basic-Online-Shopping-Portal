<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Seller info</title>
	<body style="background-color:black">
			<?php include "cheader.php" ?><br>
		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM seller WHERE S_name ='".$_GET['S_Name']."'";
						$stud=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($stud);
						
				//printing table
						echo	"<table class='table table-dark'  style='width:100%' style='font-size:20px'>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Phone number</th>
									<th>Email</th>
									<th>Address</th>
								</tr>";
						
						echo	 "<tr>
										<td>".$row['S_ID']."</td>
										<td>".$row['S_Name']."</td>
										<td>".$row['S_Phno']."</td>
										<td>".$row['S_Email']."</td>
										<td>".$row['S_Address']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
		</div>	
	</body>
</html>				