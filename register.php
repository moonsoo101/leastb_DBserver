<?php

	// if(isset($_POST["Token"])){
		$ID = $_POST["post1"];
		$token = $_POST["post2"];
		//데이터베이스에 접속해서 토큰을 저장
		$conn = mysqli_connect("localhost", "root", "leastb", "fcm");
		$query = "update users set Token='$token' where id= '$ID';";
		mysqli_query($conn, $query);

		mysqli_close($conn);
	// }
?>
