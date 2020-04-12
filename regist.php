<html>
	<head>
		<title>Registration form</title>
		<style>
			body
			{
				background:#FFFAF0;
				background-image:url(tsp.jpg);
				background-size:200px 200px;
				background-repeat:no-repeat;
				background-position:center top;
			}
			#tit
			{
				color:#a52a2a;
				font-family:"Monotype Corsiva";
				font-size:55pt;
			}
			#lab
			{
				margin-left:15%;
				line-height:75px;
			}
			#lb
			{
				margin-left:10%;
				line-height:75px
			}
			#li
			{
				line-height:75px;
				margin-left:40%;
			}
			#sbt
			{
				color:purple;
				border:ridge 3px;
				font-size:20px;
				margin-bottom:15cm;
				padding:6px;
				margin-left:30%;
			}
			#btn
			{
				color:purple;
				border:ridge 3px;
				font-size:20px;
				margin-bottom:15cm;
				padding:6px;
				margin-left:25%
			}
			#from
			{
				font-size:26px
			}
			#btn1
			{
				margin-left:1240px;
				font-size:24px;
			}
		</style>
	</head>
	<body>
		<p id="tit">
			<i style="margin-left:320px">Student<i style="margin-left:260px">Resgistation</i></i>
		</p>
		<form action="regist.php" method="post">
			<div id="from">
				<a href="mainmenu.htm" id="btn1">Home</a>
				<br/>
				<p>
					<label> Student Name : </label>
					<input type="text" id="" name="stdname" maxlength="20">
					<label id="lab"> Guardian Name :</label>
					<input type="text" id="" name="gdname" maxlength="20">
				</p>

				<p>
					<label> Gender : </label>
					<input type="radio" id="ml" name="gender" value="male">
					<label> MALE</label>
					<input type="radio" id="fm" name="gender" value="female">
					<label>FEMALE</label>
				</p>

				<p>
					<label> DOB :</label>
					<input type="date" id="dob" name="dob">
				    <label id="lab">Mobile No. : </label>
					<input type="text" id="mbn" name="mobile" maxlength="10">
					<label id="lb"> Parent Mobile No. : </label>
					<input type="text" id="pmbn" name="pmobile" maxlength="10">
				</p>
				<p>
					<label> Address : </label>
					<input type="text" id="addr" name="addr" cols="75" rows="12"  style="width:275px; height:75px;">
				</p>
				<p>
					<label> E-Mail ID : </label>
					<input type="email" id="email" name="email">
				</p>
				<p>
					<label>Branch : </label>
					<select name="branch" mutiple="multiple">
						<option value="select">--Select--</option>
						<option value="cme">Computer Sciences</option>
						<option value="ece">Electronics</option>
						<option value="eee">Electrical</option>
						<option value="mech">Mechanical</option>
						<option value="civil">Civil</option>
					</select>
				</p>
				<p>
					<label id="lb"> Year/Semester :</label>
					<select name="year" >
						<option value="select">--Select--</option>
						<option value="1y">1 st Year</option>
						<option value="3y">3 rd Sem</option>
						<option value="4y">4 th Sem</option>
						<option value="5y">5 th Sem</option>
						<option value="6y">6 th Sem</option>
					</select>

					<label id="li"> Shift : </label>
					<select name="shift">
						<option value="select">--Select--</option>
						<option value="1s">1 st Shift</option>
						<option value="2s">2 nd Shift</option>
					</select>
				</p>

				<p>
					<label>Admission No. : </label>
					<input type="text" id="adm" name="adm" maxlength="6">
				</p>

				<p>
					<label id="lb">Pin No. : </label>
					<input type="text" id="pin" name="pin" maxlength="12">

					<label id="li"> Aadhar No. : </label>
					<input type="text" id="aadhar" name="aadhar" maxlength="12">
				</p>
				<p>
				<input type="submit" id="sbt" name="submit" value="Submit">

				<input type="reset" name="clear" id="btn" value="Clear">
				</p>
			</div>
		</form>

			<?php

				if(isset($_POST['submit'])=="Submit")
				{
					$sname=$_POST['stdname'];
					$gname=$_POST['gdname'];
					$gender=$_POST['gender'];
					$dob=$_POST['dob'];
					$mob=$_POST['mobile'];
					$pmob=$_POST['pmobile'];
					$addr=$_POST['addr'];
					$email=$_POST['email'];
					$bran=$_POST['branch'];
					$year=$_POST['year'];
					$shift=$_POST['shift'];
					$adm=$_POST['adm'];
					$pin=$_POST['pin'];
					$aadhar=$_POST['aadhar'];

					$con=mysqli_connect("localhost","root","");
					$sql=mysqli_select_db($con,"stdatten");
					$result=mysqli_query($con,$sql);
					if($sname==''and $gname==''and $gender==''and $dob==''and $mob==''and $pmob==''and $addr==''and $email==''and $bran==''and $year==''and $shift==''and $adm==''and $pin==''and $aadhar=='')
					{
						echo"fill all the columns";
						exit();
					}
					else
					{
						$sql="INSERT INTO regist(sname,gname,gender,dob,mobileno,prmobile,address,emailid,branch,semester,shift,adm,pin,adharno)VALUES('".$sname."','".$gname."','".$gender."','".$dob."','".$mob."','".$pmob."','".$addr."','".$email."','".$bran."','".$year."','".$shift."','".$adm."','".$pin."','".$aadhar."')";
						$res=mysqli_query($con,$sql);
						if($res)
						{
							$sql="INSERT INTO january(pin,year)VALUES('".$pin."','".$year."')";
							$res=mysqli_query($con,$sql);
							if($res)
							{
								$sql="INSERT INTO february(pin,year)VALUES('".$pin."','".$year."')";
								$res=mysqli_query($con,$sql);
								if($res)
								{
									$sql="INSERT INTO march(pin,year)VALUES('".$pin."','".$year."')";
									$res=mysqli_query($con,$sql);
									if($res)
									{
										$sql="INSERT INTO april(pin,year)VALUES('".$pin."','".$year."')";
										$res=mysqli_query($con,$sql);
										if($res)
										{
											$sql="INSERT INTO may(pin,year)VALUES('".$pin."','".$year."')";
											$res=mysqli_query($con,$sql);
											if($res)
											{
												$sql="INSERT INTO june(pin,year)VALUES('".$pin."','".$year."')";
												$res=mysqli_query($con,$sql);
												if($res)
												{
													$sql="INSERT INTO july(pin,year)VALUES('".$pin."','".$year."')";
													$res=mysqli_query($con,$sql);
													if($res)
													{
														$sql="INSERT INTO august(pin,year)VALUES('".$pin."','".$year."')";
														$res=mysqli_query($con,$sql);
														if($res)
														{
															$sql="INSERT INTO september(pin,year)VALUES('".$pin."','".$year."')";
															$res=mysqli_query($con,$sql);
															if($res)
															{
																$sql="INSERT INTO october(pin,year)VALUES('".$pin."','".$year."')";
																$res=mysqli_query($con,$sql);
																if($res)
																{
																	$sql="INSERT INTO november(pin,year)VALUES('".$pin."','".$year."')";
																	$res=mysqli_query($con,$sql);
																	if($res)
																	{
																		$sql="INSERT INTO december(pin,year)VALUES('".$pin."','".$year."')";
																		$res=mysqli_query($con,$sql);
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
						else
						{
							echo"error".mysql_error();
						}
					}
				}
			?>
	</body>
</html>