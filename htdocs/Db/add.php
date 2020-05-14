<?php 
	//MySQLi
	//connect to database
	//$conn = mysqli_connect('localhost','aleks','Aleksasa1813','not-spotify');
	//check connection
	include('config/db_connect.php');
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	} 
	//mysqli_free_result($result);
	//mysqli_close($conn);
	


$title = "";	$stage = NULL;	$album = '';	$al_year ='';
$duration = '';	$genre = '';	$arn= '';	$link = '';
$errors = array('Title'=>'', 'Stage'=>'','Album'=>'','Album year'=>'','Duration'=>'','Genre'=>'');

	 if(isset($_GET['submit'])) {
	 	$title = $_GET['Title'];	$stage = $_GET['Stage_name'];
	 	$album = $_GET['Album'];	$al_year =$_GET['Album_year'];
	 	$duration = $_GET['Duration'];	$genre = $_GET['Genre'];
	 	$arn = $_GET['Real_name']; $link = $_GET['Link'];

	 	if(empty($_GET['Title'])&&(!preg_match('/^[a-zA-Z\s]+$/', $_GET['Title']))){
	 		$errors['Title']= '<span style="color:#FF0000;text-align:right;">
	 		<center>The "Song Title" field has not been filled</center></span> <br />';
	 		
	 	} else{ 
	 	}
	 	if(empty($_GET['Stage_name'])||(!preg_match('/^[a-zA-Z\s]+$/', $_GET['Stage_name']  ))){
	 		$errors['Stage']= '<span style="color:#FF0000;text-align:center;">
	 		<center>The "Stage Name" field has not been filled</center></span> <br />';
	 	} else{
	 	}
	 	if(empty($_GET['Album'])||(!preg_match('/^[a-zA-Z\s]+$/', $_GET['Album']) )){
	 		$errors['Album']= '<span style="color:#FF0000;text-align:center;">
	 		<center>The "Album" field has not been filled</center></span> <br />';
	 	} else{
	 	}
	 	if(empty($_GET['Album_year'] )){
	 		$errors['Album_year']= '<span style="color:#FF0000;text-align:center;">
	 		<center>The "Album Year" field has not been filled</center></span> <br />';
	 	} else{
	 	}
	 	if(empty($_GET['Duration'] )){
	 		$errors['Duration']= '<span style="color:#FF0000;text-align:center;">
	 		<center>The "Duration" field has not been filled</center></span> <br />';
	 	} else{
	 	}
	 	if(empty($_GET['Genre'] )){
	 		$errors['Genre']= '<span style="color:#FF0000;text-align:center;">
	 		<center>The "Genre" field has not been filled</center></span> <br />';

	 	} else{//if(preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $genre)){
				//$errors['Genre'] = '<span style="color:#FF0000;text-align:center;">
	 		//<center>The "Genre" field has not been filled correctly //</center></span> <br />'; }
	 	}
	 	if (array_filter($errors)){
	 		
	 	}else{
	 		$title = mysqli_real_escape_string($conn, $_GET['Title']);
			$stage = mysqli_real_escape_string($conn, $_GET['Stage_name']);
			$album = mysqli_real_escape_string($conn, $_GET['Album']);
			$al_year = mysqli_real_escape_string($conn, $_GET['Album_year']);
			$duration = mysqli_real_escape_string($conn, $_GET['Duration']);
			$genre = mysqli_real_escape_string($conn, $_GET['Genre']);
			$arn = mysqli_real_escape_string($conn, $_GET['Real_name']);
			$link = mysqli_real_escape_string($conn, $_GET['Link']);
			$creator = $_COOKIE['User'];


			// create sql
			//TODO: add a creator
			
			$sql = "INSERT INTO song_info(STAGE_NAME, REAL_NAME, ALB_TITLE, GENRE, YEAR, SONG_TITLE, DURATION, LINK, CREATOR) VALUES('$stage', '$arn', '$album', '$genre', '$al_year' ,'$title', '$duration', '$link', '$creator')";
			$select = "SELECT STAGE_NAME, REAL_NAME, ALB_TITLE, GENRE, YEAR, SONG_TITLE, DURATION, LINK, FROM song_info WHERE STAGE_NAME='$stage', REAL_NAME='$arn', ALB_TITLE='$album', GENRE='$genre', YEAR='$al_year', SONG_TITLE='$title', DURATION='$duration', LINK='$link'";
			$result= mysqli_query($conn, $select);
			if(mysqli_num_rows($result)>0){
				echo'<span style="color:#FF0000;text-align:right;"> RECORD ALREADY EXISTS </span>';
			}
			else{
				if(mysqli_query($conn,$sql)){
					header('Location: index.php');
				}else{
					echo '<span style="color:#FF0000;">query error: '.mysqli_error($conn) . '</span>';
				}

			}


			// save to db and check
			//if(mysqli_query($conn, $sql)){
				// success
			//	if(mysqli_num_rows($sql)>0){
			//		echo "RECORD ALREADY EXISTS";
			//		exit;
			//		
			//	}else{
			//		header('Location: index.php');
			//	}
			//} else {
			//	echo 'query error: '. mysqli_error($conn);
			//}
	 	}

	 }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add a song</title>
</head>
<body>

	<?php include('template/header.php');  ?>

    <section class="conatiner white-text">
    	<h4 class = "center"></h4>
    	<form action= "add.php" method= "GET">
    		<label>Song title*:</label>
    		<input type="text" name="Title" value = '<?php echo $title ?>'>
    		<div><?php echo $errors['Title']; ?></div>

    		<label>Artist Stage Name*:</label>
    		<input type="text" name="Stage_name" value = '<?php echo $stage ?>'>
    		<div><?php echo $errors['Stage']; ?></div>

    		<label>Artist Real Name:</label>
    		<input type="text" name="Real_name" value = '<?php echo $arn ?>' >

    		<label>Album Name*:</label>
    		<input type="text" name="Album" value = '<?php echo $album ?>'>
    		<div><?php echo $errors['Album']; ?></div>

    		<label>Album Year*:</label>
    		<input type="number" name="Album_year" value = '<?php echo $al_year ?>'>
    		<div><?php echo $errors['Album year']; ?></div>

    		<label>Song Duration (minutes.seconds)*:</label>
    		<input type="number" step="0.01" name="Duration" placeholder = '<?php echo $duration ?>' value = '<?php echo $duration ?>'>
    		<div><?php echo $errors['Duration']; ?></div>

    		<label>Genre (Only one genre)*:</label>
    		<input type="text" name="Genre" value = '<?php echo $genre ?>'>
    		<div><?php echo $errors['Genre']; ?></div>

    		<label>Link:</label>
    		<input type="text" name="Link"  value="<?php echo $link ?>">

    		<div class = "center">
    			<input type="submit" name="submit" value="submit" class = " btn brand_btn z-depth-0">
    		</div>
    	* indicates a required field
    	</form>
    </section>

    <?php include('template/footer.php');  ?>
</body>
</html>