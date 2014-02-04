<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/plain; charset=utf-8");

$json = '{"confessions": {';

$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());

if(isset($_GET['no']) && $_GET['no']!=''){
$no = $_GET['no'];
$query = "SELECT * FROM confessions WHERE id=".$no."";
}
if(isset($_GET['like']) && $_GET['like']!=''){
$like = $_GET['like'];
$query = "SELECT * FROM confessions WHERE likes >=".$like."";
}
if(isset($_GET['dislike']) && $_GET['dislike']!=''){
$dislike = $_GET['dislike'];
$query = "SELECT * FROM confessions WHERE dislikes >=".$dislike."";
}
if(isset($_GET['comment']) && $_GET['comment']!=''){
$comment = $_GET['comment'];
$query = "SELECT * FROM confessions WHERE comments >=".$comment."";
}
$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
$json .= '"confession":[ ';
while($row = mysql_fetch_array($result)){
$json.= '{';
$json.= '"id": "'.$row['id'].'",';
$json.= '"confession_text": "'.htmlspecialchars($row['confession_text']).'",';
$json.='"likes": "'.$row['likes'].'",';
$json.='"dislikes": "'.$row['dislikes'].'",';
$json.=' "comments": "'.$row['comments'].'",';
//$json.='"comment_table": "'.$row['id'].'",';
//$json.='"timestamp": "'.$row['timestamp'].'"';
$json .='},';
}
$json .=']';
} else {
$json .= '"confession":[]';
}
$json .= '}}';
echo $json;
?>