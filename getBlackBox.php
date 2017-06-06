<?php
	$id = $_POST["post1"];
	$year = $_POST["post2"];
	$month = $_POST["post3"];
	$day = $_POST["post4"];
	$id = 'leastb';
	$WDindex;
	// $year = 2017;
	// $month = 6;
	// $day = 6;
	$con = mysqli_connect("localhost", "root", "leastb", "fcm");
	mysqli_set_charset($con,"utf8");
	if (mysqli_connect_errno($con))
	{
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = "select WDindex from watchday where id ='$id' and year = $year and month = $month and day = $day;";
	$res = mysqli_query($con,$query);
	$result = array();
	$row = mysqli_fetch_array($res);
		$WDindex = $row['WDindex'];
		$query = "select imgname, isaccident from image where watchdayID = $WDindex;";
$res = mysqli_query($con,$query);
while($row = mysqli_fetch_array($res)){
	array_push($result, array('imgName'=>$row[0],'isAccident'=>$row[1]));
}
	echo json_encode(array("result"=>$result));
	mysqli_close($con);
?>
