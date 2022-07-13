<?php
if(isset($_POST["export"])) {
	$connect = mysqli_connect("localhost",
		"root", "", "railway_station_database");
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=trainstations.csv');
	$output = fopen("php://output", "w");
	fputcsv($output, array('Station_id','Station_name','slocation'));
	$query = "SELECT * from train_stations";
	$result = mysqli_query($connect, $query);
	while($row = mysqli_fetch_assoc($result)) {
		fputcsv($output, $row);
	}
	fclose($output);
}
?>
