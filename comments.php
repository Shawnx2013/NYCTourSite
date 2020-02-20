<?php
	$path = '';
	$category = 'About';
	$page = 'Comments';
	require $path.'assets/inc/header.php';
	require $path.'assets/inc/nav.php';
	
	//setting up the connection
	include '../../240DbCon2185.php';
	
	function sanitizeName($str, $len=30){
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES);
		return substr($str, 0, $len);
	}
	
	function sanitizeComment($str){
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES);
		return $str;
	}
	
	//put comments to the db
	if($conn){
		//db connected?
		
		//if there's someting sent
		if( !empty($_POST['submit']) ){
			if ( !empty($_POST['username']) && !empty($_POST['comment']) ){
				
				//sanitize
				$name = sanitizeName($_POST['username']);
				$comm = sanitizeName($_POST['comment']);
				echo $name;
				echo $comm;
				
				//prepared statements
				$stmt = $conn->prepare("INSERT INTO comments (name,comment) values (?,?)");
				$stmt->bind_param("ss", $name, $comm );
				$stmt->execute();
				$stmt->close();
			}
		}	
			//loading comments from the db
			$res=$conn->query('SELECT name, comment FROM comments ORDER BY id DESC');
			if($res){
				while($thisRow = mysqli_fetch_array($res, MYSQLI_ASSOC)){
					$records[]=$thisRow;
				}
				
			}
		//load page from database
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
		
		//<div id="comments">
		//var_dump($records);
		// //list all the comments
		echo '<div id="comments">';
		foreach($records as $curr){
			echo '<h3>Name: ' . $curr['name'] . '</h3>';
			echo '<p> Comment: ' . $curr['comment'] . '</p>';
		}
		echo '</div>';
	}
?>
		
<?php
	require $path.'assets/inc/footer.php';
?>