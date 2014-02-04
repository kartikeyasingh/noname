<?php
$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/plain; charset=utf-8");

$user_id = $_GET['user_id'];
$chat_id = $_GET['chat_id'];
$last = $_GET['last'];
$status = $_GET['status'];
//echo $chat_id;
//$mes = $_POST['message'];
//if(isset($_POST['message']) && $_POST['message'] !=''){
//$query = "INSERT INTO message".$chat_id."(chat_id,user_id,message) VALUES(".$chat_id.",".$user_id.",".$mes.")";
//mysql_query($query) or die(mysql_error());
//}
if($status == 1){
$result = mysql_query("SELECT status FROM chat WHERE chat_id=".$chat_id."") or die(mysql_error());
$rwo = mysql_fetch_array($result);
echo $rwo['status'];
}
else{
if($user_id ==1){
$user2_id = 2;
}
else{
$user2_id = 1;
}
/*
$result = mysql_query("SELECT status FROM chat WHERE chat_id=".$chat_id."") or die(mysql_error());
$rwo = mysql_fetch_array($result);
if($rwo['status']==($user2_id+3)){
echo 3;
}
else{*/

$query2 = "SELECT * FROM chat WHERE chat_id=".$chat_id."";
$result2 = mysql_query($query2) or die(mysql_error());
$row= mysql_fetch_array($result2);
if($row['status']== 0 || ($row['la'.$user2_id.'']!=0 && (time() - $row['la'.$user2_id.'']) >2)){
mysql_query("TRUNCATE message".$chat_id."") or die(mysql_error());
mysql_query("UPDATE chat SET num_users=0,la1=0,la2=0,status=0 WHERE chat_id=".$chat_id."") or die(mysql_error());;

echo 0;
}
else{
mysql_query("UPDATE chat SET la".$user_id."=".time()." WHERE chat_id=".$chat_id."") or die(mysql_error());
$json = '{"messages":{';
$last = (isset($_GET['last']) && $_GET['last'] != '') ? $_GET['last'] : 0;
$query = "SELECT message_id,message FROM message".$chat_id." WHERE user_id=".$user2_id." AND message_id >".$last."";
$result = mysql_query($query);
if(mysql_num_rows($result)>0){
$json.='"message":[';
while($row = mysql_fetch_array($result)){
   $json.= '{';
   $json.= '"id": "'.$row['message_id'].'",
   "message": "'.htmlspecialchars($row['message']).'"
   },';
   }
   $json.=']';
   } else{
   $json .='"message":[]';
   }
   $json .='}}';
   echo $json;
   
   $query = "UPDATE chat SET la".$user_id."=".time()." WHERE chat_id=".$chat_id."";
mysql_query($query) or die(mysql_error());
}
//}
}
   ?>
