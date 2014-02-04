<?php
$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());
$id = $_GET['chat_id'];
$user_id = $_GET['user_id'];
$query = "TRUNCATE message".$id."";
mysql_query($query) or die(mysql_error());
//$query = "UPDATE chat SET num_users=0 WHERE chat_id=".$id."";

$query2 ="UPDATE chat SET num_users=0 WHERE chat_id=".$id."";
mysql_query($query2) or die(mysql_error());
mysql_query("UPDATE chat SET la1=0,la2=0,status=0 WHERE chat_id=".$id."") or die(mysql_error());
?>