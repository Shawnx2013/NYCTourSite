<?php
	$path = '';
	$category = '';
	$page = 'Home';
	require $path.'assets/inc/header.php';
	require $path.'assets/inc/nav.php';

	//load my connection
	require '../../240DbCon2185.php';
	
	if($conn){
		//query database
		$sql = "SELECT content FROM individualProject2185 WHERE name = '".$page."'";
		
		//execute it
		$result = $conn->query($sql);
		
		//var_dump($result);
		//print out the results 
		if($result->num_rows > 0){
			while($row = $result->FETCH_ASSOC()){
				echo $row['content'];
			}
		}
		else
			echo 'No results.... you did something wrong here';
	}
	require $path.'assets/inc/imglink.php';
	require $path.'assets/inc/footer.php';
?>