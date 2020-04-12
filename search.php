<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<table cellpadding="4px" cellspacing="5px">
		<tr>
		<th> Name</th>
		<th> Guardian</th>
		<th> Pin No.</th>
		<th> Mobile</th>
		<th> Parent Mobile</th>
		<th>E-Mail ID</th>
		</tr>
		<?php
				$search=$_POST['search'];
				$search=stripcslashes($search);
				$con=mysqli_connect("localhost","root","");
				if(!$con)
				{
					die("could not connect:".mysqli_error());
				}
				if(!(isset($_POST['go'])))
				{
					echo"error at submission occured";
				}
				else
				{
					$search=mysqli_real_escape_string($con,$search);
					$res=mysqli_select_db($con,"stdatten");
					if(!$res)
					{
						echo"error".mysqli_error();
					}
					$sql="select * from regist where pin='$search' or sname='$search' ";
					$result=mysqli_query($con,$sql);
					if(!$result)
					{
						die("error".mysqli_error());
					}
					while($row=mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo"<td>".$row['sname']."</td>";
						echo"<td>".$row['gname']."</td>";
						echo"<td>".$row['pin']."</td>";
						echo"<td>".$row['mobileno']."</td>";
						echo"<td>".$row['prmobile']."</td>";
						echo"<td>".$row['emailid']."</td>";
						echo"</tr>";
					}
				}
			?>
		</table>
		<a href="mainmenu.htm" style="color:purple;  font-size:28px; margin-bottom:10cm; padding:6px; margin-left:1250px "> Back </a>
	</body>
</html>