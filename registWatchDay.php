<?php
		$id = $_POST["post1"];
		$year = $_POST["post2"];
		$month = $_POST["post3"];
		$day = $_POST["post4"];
		$con = mysqli_connect("localhost", "root", "leastb", "fcm");
		$query = "SELECT * FROM watchday WHERE id='$id' and year = $year and month = $month and day = $day;";
		$result = mysqli_query($con, $query);
    $total_record = mysqli_num_rows($result);
    if($total_record	<	1 )
		{
		$query = "INSERT INTO watchday (id, year, month, day) VALUES ('$id', $year, $month, $day);";
		mysqli_query($con, $query);
		}
		else
		echo "dup";
		mysqli_close($con);
?>
