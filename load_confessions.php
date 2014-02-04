<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/plain; charset=utf-8");

$json = '{"confessions": {';

$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());
$query = "SELECT COUNT(id) FROM confessions";
$result = mysql_query($query) or die('couldnt');
$row= mysql_fetch_array($result);
/*$first = $_GET['first'];
if($row[0] > $first){
$query = "SELECT * FROM confessions WHERE id >".$first." ORDER BY id ASC";
}
else{*/
$n =  $row[0]- 5*($_GET['last']);
$m = $n-5;
//echo $n;
$query = "SELECT * FROM confessions WHERE id >".$m." AND id <=".$n." ORDER BY id DESC";

$result = mysql_query($query);
//echo mysql_num_rows($result);
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
$json.='"comment_table": "'.$row['id'].'",';
$json.='"timestamp": "'.$row['timestamp'].'"';
$json .='},';
}
$json .=']';
} else {
$json .= '"confession":[]';
}
$json .= '}}';
echo $json;
?>