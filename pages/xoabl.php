<?php
		session_start();
		$id = $_GET['id'];
		$conn =	mysqli_connect("localhost", "root", "120506", "dacs2");
		$sql= "DELETE FROM binhluan where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
		header("location: ../index.php")
?>
