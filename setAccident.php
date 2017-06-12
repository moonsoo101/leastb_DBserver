<?php
$filename = $_POST['filename'];
$filename = 'leastb201768-1496901622671';
// $filename = "auto";
    $con = mysqli_connect("localhost", "root", "leastb", "fcm");
  	mysqli_set_charset($con,"utf8");
  	if (mysqli_connect_errno($con))
  	{
  		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
  	$query = "update image set isaccident = 1 where imgname = '$filename';";
  	$res = mysqli_query($con,$query);
    $query = "select watchdayID from image where imgname = '$filename';";
  	$res = mysqli_query($con,$query);
    $row = mysqli_fetch_array($res);
  	$WDindex = $row['watchdayID'];
    echo $WDindex;
    $query = "update watchday set accident = 1 where WDindex = $WDindex;";
  	$res = mysqli_query($con,$query);
  	mysqli_close($con);
?>
