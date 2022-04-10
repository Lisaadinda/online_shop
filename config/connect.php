<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "online_shop";

define("BASE_URL","http://localhost/online_shop/");
define("WEBNAME","Online Shop");

$koneksi = mysql_connect($host,$user,$pass,$db);
if(!mysql_select_db("online_shop",$koneksi)){
	echo "Database Tidak TErhubung...";
}

