<?php
	$path = '';
	$category = 'About';
	$page = 'Grading';
	require $path.'assets/inc/header.php';
	require $path.'assets/inc/nav.php';
	
	require '../../240DbCon2185.php';
	
	if($conn){
		$sql = "SELECT content FROM individualProject2185 WHERE name = '".$page."'";
		
		$result = $conn->query($sql);
		
		//var_dump($result);
		if($result->num_rows > 0){
			while($row = $result->FETCH_ASSOC()){
				echo $row['content'];
			}
		}
		else
			echo 'No results.... you did something wrong here';
	}
	require $path.'assets/inc/footer.php';
?>