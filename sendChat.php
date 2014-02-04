<?php
$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());

$message = $_POST['message'];
$user_id = $_POST['user_id'];
$chat_id = $_POST['chat_id'];
if (function_exists('mysql_real_escape_string')) {
      $mess = mysql_real_escape_string($message, $link);
    } elseif (function_exists('mysql_escape_string')) {
      $mess =  mysql_escape_string($message);}
	  else{
	  }

	 
$query = "INSERT INTO message".$chat_id."(chat_id,user_id,message) VALUES(".$chat_id.",".$user_id.",'".$mess."' )";
//echo $message." ".$user_id." ".$chat_id;
mysql_query($query) or die(mysql_error());

$query = "UPDATE chat SET la".$user_id."=".time()." WHERE chat_id=".$chat_id."";
mysql_query($query) or die(mysql_error());
?>