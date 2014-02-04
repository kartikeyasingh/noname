<?php
$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());
$id = $_GET['id'];
$action =$_GET['action'];
$query="SELECT likes FROM confessions WHERE id=".$id."";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$likes = $row['likes'];
if($action == 0){
$likes+=1;
}
if($action ==1)
{
$likes -=1;
}
$query = "UPDATE confessions SET likes=".$likes." WHERE id=".$id."";
mysql_query($query,$link);
echo $likes;
?>