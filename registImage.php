<?php
$index = $_POST['post1'];
$id = $_POST['post2'];
$year = $_POST['post3'];
$month = $_POST['post4'];
$day = $_POST['post5'];
$latitude = $_POST['post6'];
$longitude = $_POST['post7'];
// $index = 1;
// $id ='leastb';
// $year = 2017;
// $month = 6;
// $day = 6;
// $latitude = '34.2';
// $longitude = '34.2';

$imgName = $id.$year.$month.$day.'-'.$index;
	$con = mysqli_connect("localhost", "root", "leastb", "fcm");
	mysqli_set_charset($con,"utf8");
	if (mysqli_connect_errno($con))
	{
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$query = "select WDindex from watchday where id ='$id' and year = $year and month = $month and day = $day;";
	$res = mysqli_query($con,$query);
	$row = mysqli_fetch_array($res);
	$WDindex = $row['WDindex'];
	echo $WDindex."  ".$imgName;
	$query = "insert into image (watchdayID, imgname, latitude, longitude) values ($WDindex, '$imgName', '$latitude', '$longitude');";
	$res = mysqli_query($con,$query);
	mysqli_close($con);
?>
