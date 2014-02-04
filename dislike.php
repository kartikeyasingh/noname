<?php
$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());
$id = $_GET['id'];
$action = $_GET['action'];
$query="SELECT dislikes FROM confessions WHERE id=".$id."";
$result = mysql_query($query,$link);
$row = mysql_fetch_object($result);
$dislikes = $row->dislikes;
if($action == 0)
{
$dislikes+=1;
}
else if($action ==1){
$dislikes -=1;
}
$query = "UPDATE confessions SET dislikes=".$dislikes." WHERE id=".$id."";
mysql_query($query,$link);
echo $dislikes;
?>