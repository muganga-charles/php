<?php
if(isset($_POST["export1"])) {
	$connect = mysqli_connect("localhost",
		"root", "", "hotel_management_project2");
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=employees.csv');
	$output = fopen("php://output", "w");
	fputcsv($output, array('Employee_ID','Names','Date_of_birth','Hotel_id','Branch_id','Total_amount','Sex'));
	$query = "SELECT * from customers";
	$result = mysqli_query($connect, $query);
	while($row = mysqli_fetch_assoc($result)) {
		fputcsv($output, $row);
	}
	fclose($output);
}
?>
