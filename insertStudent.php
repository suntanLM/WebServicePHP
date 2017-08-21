<?php

    //connect to db
    require_once("db_connect.php");
	mysqli_query($conn,"SET NAMES utf8");
	
	
	// array for JSON response
	$response = array();
  
  
    $name  = $_GET['name'];
    $class  =  $_GET['class'];

	
	
    // mysql inserting a new row
    $sql = "INSERT INTO SinhVien(NAME, CLASS) VALUES('$name', '$class')";
    $result =  $conn->query($sql);

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "Them moi sinh vien thanh cong.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Co loi! Them moi sinh vien khongthanh cong.";
        
        // echoing JSON response
        echo json_encode($response);
    }
 
?>