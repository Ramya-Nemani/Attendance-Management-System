<?php
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];

	$username=stripcslashes($username);
	$password=stripcslashes($password);

	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"stdatten");

	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);

	$result=mysqli_query($con,"select * from login where username='$username' and password='$password' ") 
	            or die("failed to query database");
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


	if($row['username']==$username && $row['password']==$password)
	{
		header("mainmenu.htm");
	}
	else
	{
		echo"Sorry incorect username or password...";
		exit();
	}
?>
<html>
	<head>
		<title>MainMenu</title>
		<script type="text/javascript">
			function active()
			{
			var sbar=document.getElementById('sbar')

			if(sbar.value=='Search..')
			{
			sbar.value=' ' 
			sbar.placeholder='Search..'
			}
			}
			function inactive()
			{
			var sbar=document.getElementById('sbar')

			if(sbar.value==' ')
			{
			sbar.value='Search..'
			sbar.placeholder=' ' 
			}
			}
		</script>
		<style>
			body
			{
				background:#FFFAF0;
				background-image:url(tsp.jpg);
				background-size:150px 150px;
				background-repeat:no-repeat;
				background-position:630px 90px;
			}
			#tit
			{
				color:#DC143C;
				font-family:"monotype corsiva";
				font-size:64px;
				margin-left:480px;
				margin-bottom:180px;
			}
			#tim
			{
				color:#0000ff;
				font-size:24pt;
				font-family:"brush script mt";
				margin-top:130px;
				margin-left:30px;
			}
			#contians ul
			{
				list-style:none;
			}
			#contians ul li
			{
				background-color:#fff0f5;
				width:210px;
				border:1px solid;
				height:40px;
				line-height:50px;
				text-align:center;
				padding:6px;
				spacing:69px;
				float:left;
				font-size:23px;
				font-family:"ar julian";
				margin-left:120px;
				transition:all 120.0s;
				cursor:pointer;
				position:relative;
				border-radius: 8px;
			}
			#contians ul li:hover
			{
				background-color:#fffff0;
			}
			#contians ul ul
			{
				display:none;
				margin-right:355px;
			}
			#contians ul li:hover>ul
			{
				display:inline-block;
				padding-right:25px;
				opacity:15;
			}
			#btn1
			{
				margin-left:10px;
				font-size:24px;
			}
			 #sbar
			{
				border:1px solid #000000;
				border-right:none;
				font-size:16px;
				padding:10px;
				outline:none;
				width:250px;
				-webkit-border-top-left-radius:10px;
				-webkit-border-bottom-left-radius:10px;
				-moz-border-radius-topleft:10px;
				-moz-border-radius-bottomleft:10px;
				border-top-left-radius:10px;
				border-bottom-left-radius:10px;
				margin-left:1000px;
				margin-top:10px;
			}

			#sbtn
			{
				border:1px solid #000000;
				font-size:16px;
				padding:10px;
				background:palegoldenrod;
				font-weight:bold;
				cursor:pointer;
				outline:none;
				-webkit-border-top-right-radius:10px;
				-webkit-border-bottom-right-radius:10px;
				-moz-border-radius-topright:10px;
				-moz-border-radius-bottomright:10px;
				border-top-right-radius:10px;
				border-bottom-right-radius:10px;
			}

			#sbtn:hover
			{
				background:#f6e049;
			}
			#contains ul:hover
			{
				background:#fff0f5;
			}
			#contains ul
			{
				list-style:none;
				display:none;
			}
			#contains ul li
			{
				background-color:#fff0f5;
				width:150px;
				border:1px solid ;
				height:50px;
				line-height:50px;
				text-align:center;
			}
		</style>
	</head>
	<body>
		<p>
			<a href="pmenu.php" id="btn1">LogOut</a>
			<u  id="tit">
				Main Menu
			</u>
			<body>
				<form action="search.php" method="post">
					<input type="text"  id="sbar" name="search"  maxlength="25" value="" placeholder="" ><input type="submit" id="sbtn"  name="go" value="Search!">
				</form>
			</body>
		</p>
		<p id="tim">
			Hello...!! 
			Welcome to SMART Attendence Management System...!!!
		</p>
		<div id="contians">
			<ul>
				<li><a href="regist.php">Registration Form</a></li>
				<li>
					Attendence Status
					<ul>
						<li><a href="editatten.php">Edit Attendence</a></li>
						<li><a href="viewatten.htm">View Attendence	</a></li>
					</ul>
				</li>
				<li><a href="about.htm">About</a></li>
			</ul>
		</div>
	</body>
</html>
