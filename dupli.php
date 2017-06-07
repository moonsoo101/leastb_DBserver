<?php
		 $conn = mysqli_connect("localhost", "root", "leastb", "fcm");
    $ID = $_POST["post1"];
		$query = "select * from users where id='$ID'";
		$result = mysqli_query($conn, $query);
    $total_record = mysqli_num_rows($result);
    if($total_record == 1 )
      echo "ID중복";
    else
      echo "no";
		mysqli_close($conn);
?>
