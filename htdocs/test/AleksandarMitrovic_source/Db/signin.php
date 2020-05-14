<?php 
$use = "";
    include('config/db_connect.php');
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    } 



if(isset($_POST['Login']) || isset($_POST['Sign-up'])){

	 	if(empty($_POST['Username'])){
	 		echo '<span style="color:#FF0000;text-align:right;">
	 		<center>The "Username" field has not been filled</center></span> <br />';

	 	} else{ 
            echo '<span style="color:#7CFC00;text-align:center;">
            <center>The "Usename" field has  been filled</center></span> <br />';
	 		//echo $_GET['Title'];
	 	}
	 	if(empty($_POST['Password'])){
	 		echo '<span style="color:#FF0000;text-align:center;">
	 		<center>The "Password" field has not been filled</center></span> <br />';
	 	} else{
            echo '<span style="color:#7CFC00;text-align:center;">
            <center>The "Password" field has  been filled</center></span> <br />';
	 		//echo $_GET['Stage_name'];
            
	 	}

     }
if(isset($_POST['Login'])){
    //session_start();
    //$_SESSION['User'] = $_POST['Username']; 
    //echo $_SESSION['User'];
    //864000 # seconds in a day
    //
    $u = $_POST['Username']; $p=$_POST['Password'];
    //$sql = "INSERT INTO user_info(USERNAME,PASSWORD) VALUES('$u','$p')";
    $select = "SELECT USERNAME, PASSWORD FROM user_info WHERE USERNAME='$u', PASSWORD='$p'";
    $result= mysqli_query($conn, $select);

    $set_id = "SELECT * FROM user_info WHERE USERNAME='$u'";
    $id_result =  mysqli_query($conn, $set_id);
    $id_r =  mysqli_fetch_assoc($id_result);
    $theid  = $id_r['USER_ID'];
     //echo '<span style="color:#FF0000;text-align:right;"> ' .$theid  .' </span>';
    if(mysqli_num_rows($result)!=0){
         echo'<span style="color:#FF0000;text-align:right;"> Login not Validated </span>';
    }
     else{
        setcookie('User', $_POST['Username'], time() + 864000);
        setcookie('UID', $theid, time() +864000);
        unset($_POST['USERNAME']); unset($_POST['PASSWORD']);

        header('Location: index.php');
     }
     //$sql = "SELECT * FROM song_info WHERE SONG_ID=$id";
//
     //   $result = mysqli_query($conn,$sql);
//
     //   $song = mysqli_fetch_assoc($result);
     //   mysqli_free_result($result);
     //   mysqli_close($conn);
     //   $link = $song['LINK'];
    //setcookie('User', $_POST['Username'], time() + 864000);
    //header('Location: index.php');
}
if(isset($_POST['Sign-up'])){
    $u = $_POST['Username']; $p=$_POST['Password'];
    $sql = "INSERT INTO user_info(USERNAME,PASSWORD) VALUES('$u','$p')";
    $select = "SELECT USERNAME, PASSWORD FROM user_info WHERE USERNAME='$u', PASSWORD='$p'";
    $set_id = "SELECT * FROM user_info WHERE USERNAME='$u'";
    $id_result =  mysqli_query($conn, $set_id);
    $id_r =  mysqli_fetch_assoc($id_result);
    $theid  = $id_r['USER_ID'];

     $result= mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
         echo'<span style="color:#FF0000;text-align:right;"> RECORD ALREADY EXISTS </span>';
    }
     else{
        if(mysqli_query($conn,$sql)){
            setcookie('UID', $theid, time() +864000);
            setcookie('User', $_POST['Username'], time() + 864000);
            unset($_POST['USERNAME']); unset($_POST['PASSWORD']);
            header('Location: index.php');
        }else{
             echo '<span style="color:#FF0000;">query error: '.mysqli_error($conn) . '</span>';
        }

     }
}
if(isset($_POST['Log-out'])){
    //session_start();
    //$_SESSION['User'] = $_POST['Username']; 
    //echo $_SESSION['User'];
    //864000 # seconds in a day
    setcookie('User', 'Guest');
    setcookie('UID', 0);
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login/Sign-up</title>
</head>
<body>
	<?php include('template/header.php');  ?>

    <section class="conatiner white-text">
    	<h4 class = "center"></h4>
    	<form action= "signin.php" method= "POST" value = <?php  ?>>
    		<label>Username*:</label>
    		<input type="text" name="Username">

    		<label>Password*:</label>
    		<input type="Password" name="Password">

    		<div class = "center">
    			<input type="submit" name="Login" value="Login" class = " btn brand_btn z-depth-0">
                <input type="submit" name="Sign-up" value="Sign-up" class = " btn brand_btn z-depth-0">

                <?php if($User == 'Guest') { ?>
                
                <?php }else{ ?>
                    <input type="submit" name="Log-out" value="Log-out" class = " btn brand_btn z-depth-0"> <?php } ?>



    		</div>
    	
    	</form>
    </section>

    <?php include('template/footer.php');  ?>

</body>
</html>