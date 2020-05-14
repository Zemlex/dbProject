<?php 
	//session_start();
	//if($_SERVER['QUERY_STRING'] =='noname'){
	//	unset($_SESSION['User']);
	//}
	//$Use//r = $_SESSION['User'] ?? 'Guest';
	//get cookie
	$User = $_COOKIE['User'] ?? 'Guest';
	$UID = $_COOKIE['UID'] ?? 0;
	//TODO: PREVENT DUPLICATES(done), STORE USER INFO(password and username done), ALLOW CREATE/DELETION OF PLAYLISTS, 
	//MAYBE: ONLY SONG CREATOR CAN YEET A SONG, SEARCH/SORT(create a variable for order by)
?>

<head>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
    		textarea:focus, input:focus {
    		color: #fff;
			}

			input, select, textarea{
    		color: #fff;
			}
    	.brand{
    	
    		background: #000 ;
    	}
    	.brand_btn{
    		border-style: solid;
    		border-width: .5px;
    		border-color:#fff ;
    		background: #000;
    	}
    	.brand-text{
    		color: #fff ;
    	}
    	form{
    		max-width: 460px;
    		margin: 20px auto;
    		padding: 20px; 
    	}
    	.table{
    		border-style: solid;
    		border-width: .5px;
    		border-color:#fff ;
    		background: #000;

    	}

    </style>
</head>
	<body class="black">
		<nav class = "black z-depth-0">
			<div class = "container">
				<a href="#" class = "brand-logo brand-text"> Not-Spotify</a>

				<ul id="nav-mobile" class = "right hide-on-small-down">
					<li class = "brand ">Hello <?php echo $User . $UID; ?></li>
					<li><a href="add.php" class="btn brand z-depth"> add a song</a></li>
					<li><a href="index.php" class="btn brand z-depth"> Home</a></li>
					<li><a href="signin.php" class="btn brand z-depth"> Logup/signin</a></li>
					<li><a href="playlists.php" class="btn brand z-depth"> Playlists</a></li>

					
				</ul>
			</div>

		</nav>