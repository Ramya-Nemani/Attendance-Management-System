<?php
$con=mysql_connect("localhost","root","");
$db=mysql_query("create database stdatten",$con);
if($db)
{
	echo"database created";
}
else
{
	echo"error".mysql_error();
}
require("create.php");
?>