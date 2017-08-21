<?php

	//connect to db
    require_once("db_connect.php");
	mysqli_query($conn,"SET NAMES utf8");
	
	// array for JSON response
	$response = array();
  
    $id  = $_GET['id'];
	$name  = $_GET['name'];
	$class  = $_GET['class'];

	
    // mysql inserting a new row
	
	$sql = "UPDATE `SinhVien` SET NAME = '$name', CLASS = '$class' WHERE ID=$id";
    $result =  $conn->query($sql);

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Sua thong tin sinh vien thanh cong.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Co loi! Sua thong tin sinh vien khong thanh cong.";
        
        // echoing JSON response
        echo json_encode($response);
    }
 
?>