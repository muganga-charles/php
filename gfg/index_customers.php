<?php
$connect = mysqli_connect("localhost",
	"root", "", "railway_station_database");
$query ="SELECT * FROM train_stations";

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
		<h2 align="center">Train_Station</h2>

		<h3 align="center">
			Export data into CSV from Data Base
		</h3>
			
		<br /><br />
                             <form method="post" action="export.php">
			<input type="submit" name="export"
				value="CSV Export"
				class="btn btn-success" />
		</form>

		<br /><br />
	
		<div class="table-responsive" id="employee_table">
			<table class="table table-bordered">
				<tr>
					<th width="35%">Station_id</th>
					<th width="10%">Station_name</th>
					<th width="10%">Station_location</th>	
				</tr>
				<?php
				
				while($row = mysqli_fetch_array($result)) {
				?>
				
				
				<tr>
	
					<td><?php echo $row["station_id"]; ?></td>
					<td><?php echo $row["station_name"]; ?></td>
					<td><?php echo $row["slocation"]; ?></td>
				<\tr>
				<?php	
				}?>
			</table>
			<!-- Closing table tag -->
		</div>
		<!-- Closing div tag -->
	</div>
</body>

</html>
