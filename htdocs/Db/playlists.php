<?php 
include('config/db_connect.php');
	$id =  $_COOKIE['UID'];
	//echo $id;
	//write query for all songs
	//$sql='SELECT * FROM playlist_info ORDER BY USER_ID';
	$sql='SELECT PL_NAME, playlist_info.DURATION, song_info.SONG_TITLE, playlist_info.USER_ID FROM playlist_info INNER JOIN song_info ON playlist_info.SONG_ID=song_info.SONG_ID';
	//MAKE QUERY AND GET RESULTS
	$result = mysqli_query($conn, $sql);
	//print_r($result);
	//fetch rows as an arryay
	$table = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//print_r($table);


	$songql = 'SELECT * from song_info';
	$sresult =mysqli_query($conn, $songql);
	$song = mysqli_fetch_all($sresult, MYSQLI_ASSOC);
	//print_r($song);
	$bruh=mysqli_data_seek($sresult,2);
	//print_r($bruh);


	//mysqli_free_result($result);
	//mysqli_close($conn);
	if(isset($_GET['YEET'])){
		echo "YEEETT|";
		$id = mysqli_real_escape_string($conn,$_GET['id']);
		$sql = "UPDATE playlist_info SET PL_NAME = '$id'";
		$result =  mysqli_query($conn,$sql);
		$pl = mysqli_fetch_assoc($result);
		// $sql = "SELECT * FROM song_info WHERE SONG_ID=$id";

		// $result = mysqli_query($conn,$sql);

		// $song = mysqli_fetch_assoc($result);
		// mysqli_free_result($result);
		// mysqli_close($conn);
		// $link = $song['LINK'];

		}

 ?>
  <!DOCTYPE html>
 <html>
 <?php include('template/header.php');  ?>
    <section class="conatiner white-text">
    	<h4 class = "center"></h4>
    	<form action= "playlists.php" method= "GET" >
<!-- 
    		<div class = "center">
    			<div class=" center align">
			<a class="brand_btn-" href='#'>more</a>-->
				<!-- <a href="edit.php?PL_ID=<?php echo $table['PL_ID'] ?>" class="btn table z-depth-0"> Create</a>
				</div> --> 
                <!--<input type="submit" name="Remove" value="Remove" class = " btn brand_btn z-depth-0"> -->


    	<!-- 	</div> --> 
    	
    	</form>
    </section>
    	<div class="container brand white-text">
		<div class="row brand">
			
	<div class="container brand white-text">
		<div class="row brand">
			
			<?php foreach ($table as $table){ if($table['USER_ID']==$id){ ?>
				<div class = "col md3 brand_btn">
					<div class="card z-depth-0 brand">
						<div class="card-hyphen center">
							<h6>Playlist name:<?php echo htmlspecialchars($table['PL_NAME']). "  |   " ?> Playlist duration:<?php echo htmlspecialchars($table['DURATION']) ."    |    "  ?> 
								<?php echo htmlspecialchars($table['SONG_TITLE'])."    |    " ?>
								
							</h6>

						</div>
						<div class=" right align">
							<!-- <a class="brand_btn-" href='#'>more</a>-->
													</div>
					</div>
				</div>

		<?php } }?>
		</div>
	</div>

 <?php include('template/footer.php');  ?>

 </html>