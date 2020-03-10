<html>
	<style>
		#table{
			margin:30px;
		}
	</style>
	<title>Manufacturer info</title>
	<body style="background-color:black">
			<?php include "cheader.php" ?><br>
		<div id="table">
			<?php

				//connectio to server
						include "connection.php"; 	
					
						$query="SELECT * FROM manufacture WHERE M_Name ='".$_GET['M_Name']."'";
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
										<td>".$row['M_ID']."</td>
										<td>".$row['M_Name']."</td>
										<td>".$row['M_Phno']."</td>
										<td>".$row['M_Email']."</td>
										<td>".$row['M_ADDRESS']."</td>
									</tr>";
						
					
						echo	"</table>";
			?>	
		</div>	
	</body>
</html>				