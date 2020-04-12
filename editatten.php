<html>
<head>
<title>Edit Attendence</title>
<style>
body
{
background:#FFFAF0;
background-image:url(tsp.jpg);
background-size:150px 150px;
background-repeat:no-repeat;
background-position:center top;
font-size:24px;
}
#tit
{
font-family:"edwardian Script mt";
color:#6495ED;
}
#lb
{
margin-left:5%;
line-height:75px;
font-size:25px; 
height:50px; 
width:150px;
}
#li
{
margin-left:10%;
line-height:75px;
font-size:25px; 
height:50px; 
width:150px;
}
#sbt
{
color:#fff;
background:#337ab7;
font-size:20px;
margin-bottom:20cm;
padding:6px;
margin-left:30%;
}
#btn
{
color:#fff;
background:#337ab7;
font-size:20px;
margin-bottom:20cm;
padding:6px;
margin-left:30%
}
#btn1
{
margin-left:1200px;
font-size:24px;
}
lb1
{
margin-left:35%;
line-height:10%;
}

</style>
</head>
<body>
<h1 id="tit">
<i style="margin-left:455px">Select <i style="margin-left:175px">Attendence</i></i>
</h1>

<div >
<form action="editatten.php" method="post">
<a href="mainmenu.htm" id="btn1">Home</a>
<br/>
<p>
<label id="lb"> Semester :  </label>
<select name="sem">
<option value="select">--Select--</option>
<option value="1y">1 st Year</option>
<option value="3y">3 rd Sem</option>
<option value="4y">4 th Sem</option>
<option value="5y">5 th Sem</option>
<option value="6y">6 th Sem</option>
</select>


<label  id="li"> Shift : </label>
<select name="shift">
<option value="select">--Select--</option>
<option value="1s">1 st Shift</option>
<option value="2s">2 nd Shift</option>
</select>

</p>

<p>
<label id="lb"> Month : </label>
<select name="mon">
<option value="select">--Select--</option>
<option value="jan">January</option>
<option value="feb">February</option>
<option value="mar">March</option>
<option value="apr">April</option>
<option value="may">May</option>
<option value="jun">June</option>
<option value="jul">July</option>
<option value="aug">August</option>
<option value="sep">September</option>
<option value="oct">October</option>
<option value="nov">November</option>
<option value="dec">December</option>
</select>

<label id="li"> Pin no.  : </label>
<input type="text" id="pin" name="pin"> 
</p>

<p>
<label id="lb">No.of Working Days : </label>
<input type="text" id="working" name="work">
<label id="li" >No. of Present Days :</label>
<input type="text" id="present" name="present">

</p>

<input type="submit" value="Submit" name="submit" id="sbt">
<input type="reset" value="Clear" name="clear" id="btn">
</form>
</div>
<?php

$sem=$_POST["sem"];
$mon=$_POST["mon"];
$shift=$_POST["shift"];
$work=$_POST["work"];
$present=$_POST["present"];
$pin=$_POST["pin"];

$sem=stripcslashes($sem);
$mon=stripcslashes($mon);
$work=stripcslashes($work);
$present=stripcslashes($present);
$pin=stripcslashes($pin);
$total=($present/$work)*100;


$con=mysqli_connect("localhost","root","");
if(!($con))
{
die("sry could not to requested database".mysqli_error());
}

if(!(isset($_POST['submit'])))
{
echo"error occured".mysqli_error();
}
else
{
$sem=mysqli_real_escape_string($con,$sem);
$mon=mysqli_real_escape_string($con,$mon);
$work=mysqli_real_escape_string($con,$work);
$present=mysqli_real_escape_string($con,$present);
$pin=mysqli_real_escape_string($con,$pin);

mysqli_select_db($con,"stdatten");

if($mon=="jan")
{
$sql=" update january set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);
}
else if($mon=="feb")
{
$sql=" update february set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="mar")
{
$sql=" update march set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="apr")
{
$sql=" update april set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="may")
{
$sql=" update may set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="jun")
{
$sql=" update june set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="jul")
{
$sql=" update july set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="aug")
{
$sql=" update august set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="sep")
{
$sql=" update september set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="oct")
{
$sql=" update october set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else if($mon=="nov")
{
$sql=" update november set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
else 
{
$sql=" update december set workingdays='$work',presentdays='$present',total='$total' where year='$sem' and pin='$pin' ";
$res=mysqli_query($con,$sql);	
}
}
?>
</body>
</html>