<?php
$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/plain; charset=utf-8");

$id = $_GET['id'];
$json = '{"comments":{';

$query = "SELECT * FROM comments".$id."";
$result = mysql_query($query);
if(mysql_num_rows($result)>0){
$json.='"comment":[';
while($row = mysql_fetch_array($result)){
$json.='{';
$json.='"id": "'.$row['id'].'",';
$json.='"comment_text": "'.htmlspecialchars($row['comment']).'"},';
}
$json.=']';
}
else{
$json.='"comment":[]';
}
$json.='}}';
echo $json;
?>
