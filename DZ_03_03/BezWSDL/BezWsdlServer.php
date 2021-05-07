<?php 
$conn = mysqli_connect("localhost", "root", "", "collage_database") or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_GET['roll_num'])) {	
	$roll_num = $_GET['roll_num']; 
	$sql_query = "select first_name, last_name, department_id, phone, admission_date, cet_marks from students where roll_num = $roll_num";
	$response = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));	
	$rows = array();
	while($r = mysqli_fetch_assoc($response)) {
    $rows[] = $r;
	}
	print json_encode($rows);	
}
?>	
