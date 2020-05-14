<?php 
	//MySQLi
	//connect to database
	include('config/db_connect.php');
	//write query for all songs
	$sql='SELECT * FROM song_info ORDER BY STAGE_NAME';
	//MAKE QUERY AND GET RESULTS
	$result = mysqli_query($conn, $sql);
	//fetch rows as an arryay
	$table = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);
	mysqli_close($conn);
	//$link  = $table['LINK'];

	

	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
	<?php include('template/header.php');  ?>

	<div class="container brand white-text">
		<div class="row brand">
			
			<?php foreach ($table as $table){ ?>
				<div class = "col md3 brand_btn">
					<div class="card z-depth-0 brand">
						<div class="card-hyphen center">
							<h6><?php echo htmlspecialchars($table['STAGE_NAME']). "  |   " ?><?php echo htmlspecialchars($table['SONG_TITLE']) ."    |    "  ?>
								<?php echo htmlspecialchars($table['ALB_TITLE']). "  |   " ?><?php echo htmlspecialchars($table['GENRE'])."    |    " ?>
								<a href="<?php echo $table['LINK']; ?>"><?php echo htmlspecialchars($table['LINK']). "" ?></a>
							</h6>

						</div>
						<div class=" right align">
							<!-- <a class="brand_btn-" href='#'>more</a>-->
							<a href="details.php?SONG_ID=<?php echo $table['SONG_ID'] ?>" class="btn table z-depth-0"> more</a>
						</div>
					</div>
				</div>

		<?php } ?>


		</div>
	</div>

    <?php include('template/footer.php');  ?>

</html>