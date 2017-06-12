<?php
	$ID = $_POST["post1"];

		$con = mysqli_connect("localhost", "root", "leastb", "fcm");
 		mysqli_set_charset($con,"utf8");
 		if (mysqli_connect_errno($con))
 		{
 		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 		}
 		$query = "select latitude, longitude from image where watchdayID =$ID;";
 		$res = mysqli_query($con,$query);
 		$result = array();
 		while($row = mysqli_fetch_array($res)){
 		  array_push($result, array('latitude'=>$row[0],'longitude'=>$row[1]));
 		}
 		echo json_encode(array("result"=>$result));
 		mysqli_close($con);
?>
