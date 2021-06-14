<?php
// Connect to database
	include("../connection.php");
	include("../methods.php");
	$db = new dbObj();
	$connection =  $db->getConnstring();
 
	$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
			case 'GET':
			if (validateLogin()) {
				if(!empty($_GET["id"])) {

					$id=intval($_GET["id"]);
					get_students($id);

				} else {

					get_students();
				}
			}
			
			break;
			
			case 'POST':
			if (validateLogin()){
				insert_student();
			}
			break;	
			
			case 'PUT':
			if (validateLogin()){
				if (isset($_GET["id"])){
				$id=intval($_GET["id"]);
				update_student($id);				
				} else {

					header('Content-Type: application/json');
					echo json_encode("Error while calling method and parametars");
					
				}	
			}
						
			break;				
			case 'DELETE':
			if (validateLogin()){
				$id=intval($_GET["id"]);
				delete_student($id);
			}
			break;
			
			default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}
?>