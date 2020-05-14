<?php 
	//MySQLi
	//connect to database
	$conn = mysqli_connect('localhost','aleks','Aleksasa1813','not-spotify');
	//check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	} 
	//mysqli_free_result($result);
	//mysqli_close($conn);
	
?>