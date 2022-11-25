<?php 
	$p = $_GET['p'];
	$con = mysqli_connect("localhost", "root", "", "news");
	$sql = "select * from tab where articleUrl='$p' limit 1";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_array($result))
	{
		$author = $row['author'];
	}

	echo $author;

 ?>