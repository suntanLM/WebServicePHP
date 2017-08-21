<?php
require_once("db_connect.php");
mysqli_query($conn,"SET NAMES utf8");

$query = mysqli_query($conn, "SELECT * FROM SinhVien");

while ($row = mysqli_fetch_assoc($query)) {
	$studentArray[] = $row;
}

echo json_encode($studentArray);

mysqli_close($conn);

?>