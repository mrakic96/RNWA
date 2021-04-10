<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 70%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;
color: black;
}
td{ color: green;}
</style>
</head>
<?php
/*
$s = $_REQUEST["s"];
$hint = "";
*/
		
$con = mysqli_connect("localhost","root","");

if($con && isset($_POST['query'])) {

$result = mysqli_select_db($con, "collage_database") or die("Došlo je do problema prilikom odabira baze...");
//query upit
$sql="SELECT * FROM students where first_name LIKE '{$_POST['query']}%' OR last_name LIKE '{$_POST['query']}%'";

$result2 = mysqli_query($con, $sql) or die("Došlo je do problema prilikom querrya...");
$n=mysqli_num_rows($result2);
if ($n > 0){
	echo "<table>
	<tr>
	<th>Ime</th>
	<th>Prezime</th>
	<th>Id odjela</th>
	<th>Mobitel</th>
</tr>";
	while ($myrow=mysqli_fetch_row($result2)){
			echo "<tr>";
			 echo "<td>" . $myrow[1] . "</td>";
			 echo "<td>" . $myrow[2] . "</td>";
			 echo "<td>" . $myrow[3] . "</td>";
			 echo "<td>" . $myrow[4] . "</td>";
			echo "</tr>";
		}
	echo "</table>";
	}	
}
else {
echo "<br>Konekcija nije uspostavljena<br>";
}

	



//echo $hint === "" ? "Nema prijedloga" : $hint;

?>
</body>
</html>