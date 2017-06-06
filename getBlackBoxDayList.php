<?php
	$id = $_POST["post1"];
	$id = 'moonsoo101';
		$con = mysqli_connect("localhost", "root", "leastb", "fcm");
 		mysqli_set_charset($con,"utf8");
 		if (mysqli_connect_errno($con))
 		{
 		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 		}
 		$query = "select year, month, day, accident from watchday where id ='$id';";
 		$res = mysqli_query($con,$query);
 		$result = array();
 		while($row = mysqli_fetch_array($res)){
 		  array_push($result, array('year'=>$row[0],'month'=>$row[1],'day'=>$row[2], 'isAccident'=>$row[3]));
 		}
 		echo json_encode(array("result"=>$result));
 		mysqli_close($con);
?>
