<?php

$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());

$id;
$query = "SELECT  chat_id FROM chat WHERE num_users=1";
$result =mysql_query($query);
if(mysql_num_rows($result)!=0)
{
//$n = mysql_num_rows($result);
$row = mysql_fetch_array($result);
$id = $row['chat_id'];
//mysql_query("UPDATE chat SET  WHERE chat_id =".$id."") or die(mysql_error());
$m = 2*10;
$query = "UPDATE chat SET status=2,num_users = 2,la2=".time().",la1=".time()." WHERE chat_id=".$id."";
mysql_query($query);;
}
else
{
$query = "SELECT  chat_id FROM chat WHERE num_users=0";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$id = $row['chat_id'];
//mysql_query("UPDATE chat SET  WHERE chat_id =".$id."");
$m = 1*10;
//$query = "UPDATE chat SET la1=".time()." WHERE chat_id=".$id."";
mysql_query("UPDATE chat SET num_users=1,la1=".time().",status=1 WHERE chat_id=".$id."");
//finduser();
}
mysql_close($link);
echo ($id+$m);
//mysql_query("INSERT INTO message".$id."(chat_id,user_id,message) VALUES(1,1,'kartikeya')") or die(mysql_error());
?>