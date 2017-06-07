<?php
		 $conn = mysqli_connect("localhost", "root", "leastb", "fcm");
    $ID = $_POST["post1"];
		$pass = $_POST["post2"];
		$query = "insert into users(id, pass) values('$ID', '$pass');";
		$result = mysqli_query($conn, $query);
    if($result)
      echo "회원가입을 완료했습니다.";
    else
      echo "no";
		mysqli_close($conn);
?>
