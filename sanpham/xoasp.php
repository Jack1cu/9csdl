<?php
		session_start();
		$id = $_GET['id'];
		$conn =	mysqli_connect("localhost", "root", "120506", "dacs2");
		$sql= "DELETE FROM sanpham where id=$id ";
		$ketqua = mysqli_query($conn, $sql);
		header("location: ../sanpham/quanlysp.php");
		
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
?>
</body>
</html>