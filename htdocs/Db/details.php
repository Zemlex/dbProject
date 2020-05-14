<?php 
include('config/db_connect.php');
//check get request id parameter
	if(isset($_POST['delete'])){
		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
		$sql = "DELETE FROM song_info WHERE SONG_ID=$id_to_delete";
		if(mysqli_query($conn, $sql)){
			header('Location: index.php');

		}else{
			echo 'query error: ' . mysqli_error($conn);
		}

	}
	if(isset($_GET['SONG_ID'])){
		$id = mysqli_real_escape_string($conn,$_GET['SONG_ID']);

		$sql = "SELECT * FROM song_info WHERE SONG_ID=$id";

		$result = mysqli_query($conn,$sql);

		$song = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		mysqli_close($conn);
		$link = $song['LINK'];

		}
 ?>
 <!DOCTYPE html>
 <html>
 <?php include('template/header.php');  ?>

 	<div class="brand-text center">
 		<?php if($song): ?>
 			<h4><?php echo $song['SONG_TITLE'] ?></h4>
 			<p>Written by : <?php echo $song['STAGE_NAME'] ?></p>
 			<p>AKA : <?php echo $song['REAL_NAME'] ?></p>
 			<p>Album : <?php echo $song['ALB_TITLE'] ?></p>
 			<p>Album Year: <?php echo $song['YEAR'] ?></p>
 			<p>Genre: <?php echo $song['GENRE'] ?></p>
 			<p>Duration: <?php echo $song['DURATION'] ?></p>
 			<p>Link: <a href="<?php echo $Link; ?>"><?php echo $song['LINK'] ?></a></p>
 			<p>uploaded to not-spotify by: <?php echo $song['CREATOR'] ?></p>
 			<!-- deletee form -->
 			<form action="details.php" method="POST">
 				<input type="hidden" name="id_to_delete" value="<?php echo $song['SONG_ID']; ?>">
 				<input type="submit" name="delete" value="Delete" class="btn brand_btn">
 			</form>
 		<?php else: ?>
 			<h5>no song with that id given</h5>
 		<?php endif; ?>
 	</div>

 <?php include('template/footer.php');  ?>

 </html>