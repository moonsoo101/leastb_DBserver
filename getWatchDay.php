<?php
	$ID = $_POST["post1"];
	// $ID = 'leastb';
		$con = mysqli_connect("localhost", "root", "leastb", "fcm");
 		mysqli_set_charset($con,"utf8");
 		if (mysqli_connect_errno($con))
 		{
 		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 		}
 		$query = "select WDindex, year, month, day from watchday where id ='$ID';";
 		$res = mysqli_query($con,$query);
 		$result = array();
 		while($row = mysqli_fetch_array($res)){
			$query = "select count(*) from image where watchdayID = $row[0];";
			$res1 = mysqli_query($con,$query);
			$row1 = mysqli_fetch_array($res1);
 		  array_push($result, array('WDindex'=>$row[0],'year'=>$row[1],'month'=>$row[2], 'day'=>$row[3], 'count'=>$row1[0]));
 		}
 		echo json_encode(array("result"=>$result));
 		mysqli_close($con);
?>
