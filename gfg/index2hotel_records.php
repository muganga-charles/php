<?php
$connect = mysqli_connect("localhost",
	"root", "", "hotel_management_project2");
$query ="SELECT * FROM employees";

$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>

<head>
	<title> My project csv download</title>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
	</script>
	
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
</head>

<body>
	<br /><br />
	<div class="container" style="width:900px;">
		<h2 align="center">My employees table</h2>

		<h3 align="center">
			Export data into CSV from Data Base
		</h3>
			
		<br /><br />
                             <form method="post" action="export1.php">
			<input type="submit" name="export1"
				value="CSV Export"
				class="btn btn-success" />
		</form>

		<br /><br />
	
		<div class="table-responsive" id="employee_table">
			<table class="table table-bordered">
				<tr>
					<th width="10%">Employee_id</th>
					<th width="35%">Name</th>
					<th width="20%">Date_of_birtth</th>
					<th width="15%">Hotel_id</th>
					<th width="25%">Branch_id</th>
					<th width="15%">Total_amout</th>
					<th width="5%">Sex</th>
				</tr>
				<?php
				
				while($row = mysqli_fetch_array($result)) {
				?>
				
				
				<tr>
					<!-- column names in table -->
					<td><?php echo $row["employee_id"]; ?></td>
					<td><?php echo $row["names"]; ?></td>
					<td><?php echo $row["date_of_birth"]; ?></td>
					<td><?php echo $row["hotel_id"]; ?></td>
					<td><?php echo $row["branch_id"]; ?></td>
					<td><?php echo $row["total_amount"]; ?></td>
 					<td><?php echo $row["sex"]; ?></td>
				</tr>
				<?php	
				}?>
			</table>
			<!-- Closing table tag -->
		</div>
		<!-- Closing div tag -->
	</div>
</body>

</html>
