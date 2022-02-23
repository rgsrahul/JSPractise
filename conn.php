<?php
$server = "localhost";
$username ='root';
$pass = '';
$db = 'orders';
$dbconn = new mysqli($server,$username,$pass,$db);
if($dbconn->connect_error){ die("connection failed".$connect_error);}
?>