<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("stdatten",$con);
	$sql="create table login(username varchar(15) NOT NULL,password varchar(10) NOT NULL)";
	mysql_query($sql,$con);
	$sql="insert into login (username,password) values ('ramya','nemani')";
	mysql_query($sql,$con);
	$sql="create table regist(sname varchar(50) NOT NULL,gname varchar(50)NOT NULL,gender varchar(8) NOT NULL,dob date NOT NULL,mobileno varchar(10) NOT NULL,prmobile varchar(10) NOT NULL,address varchar(50)NOT NULL,emailid varchar(25)NOT NULL,branch varchar(10) NOT NULL,semester varchar(5) NOT NULL,shift varchar(5) NOT NULL,adm int(5) NOT NULL UNIQUE,pin varchar(12) NOT NULL UNIQUE PRIMARY KEY ,adharno varchar(12) NOT NULL UNIQUE)";
	mysql_query($sql,$con);
	$sql="create table january(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table february(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table march(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);	
	$sql="create table april(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table may(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table june(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table july(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con); 
	$sql="create table august(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table september(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table october(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table november(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	$sql="create table december(pin varchar(12) NOT NULL UNIQUE PRIMARY KEY,year varchar(5) NOT NULL,workingdays int(3)NOT NULL,presentdays int(3) NOT NULL,total int(3) NOT NULL)";
	mysql_query($sql,$con);
	if(!$sql)
	{
		echo "error";
	}
?>