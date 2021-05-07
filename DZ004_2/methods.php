<?php

//GET
function get_students()
	{
	global $connection;
	$query="SELECT * FROM students";
	
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
	{
		$response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}

//CREATE
function insert_student()
	{
		global $connection;

		$data = json_decode(file_get_contents('php://input'), true);
		$roll_num		=$data["roll_num"];
		$first_name			=$data["first_name"];
		$last_name			=$data["last_name"];
		$department_id			=$data["department_id "];
		$phone				=$data["phone"];
		$admission_date			=$data["admission_date"];
		$cet_marks			=$data["cet_marks"];
		
		
		echo $query="INSERT INTO students VALUES (NULL, '".$roll_num."','".$first_name."','".$last_name."','".$extension."','".$phone."','".$admission_date."','".$cet_marks."')";
		if(mysqli_query($connection, $query))
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Student je dodan u bazu podataka.'
			);
		}
		else
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Došlo je do greške pri dodavanju novog studenta.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

//Update
function update_student($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$first_name			=$data["first_name"];
		$last_name			=$data["last_name"];
		$extension			=$data["extension"];
		$phone				=$data["phone"];
		$admission_date			=$data["admission_date"];
		$cet_marks			=$data["cet_marks"];
		
		
		$query="UPDATE students SET first_name='".$first_name."', last_name='".$last_name."', extension='".$extension."', phone='".$phone."', admission_date='".$admission_date."', cet_marks='".$cet_marks."' WHERE empoyeeNumber=".$id;
		
		$result=mysqli_query($connection, $query);
		$broj_redaka = mysqli_affected_rows($connection);;
		
		if($result)
		{
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Student je uspješno ažuriran.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Ažuracija nije uspjela.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

//DELETE
function delete_student($id)
	{
	global $connection;
	$query="DELETE FROM students WHERE roll_num=".$id;
	if($result = mysqli_query($connection, $query))
	{
		$response=array(
			'status' => 1,
			'status_message' =>'Student je uspejsno izbrisan.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Brisanje studenta nije uspjelo!'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}


?>