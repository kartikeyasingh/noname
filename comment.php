<?php

$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());
$id = $_POST['id'];
$comment = $_POST['comment'];
$comment = mysql_real_escape_string($comment,$link);
$query = "INSERT INTO comments".$id."(comment) VALUES('".$comment."')";
mysql_query($query) or die(mysql_error());
$query = "SELECT comments FROM confessions WHERE id=".$id."";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$comments = $row['comments'];
$comments +=1;
$query = "UPDATE confessions SET comments =".$comments." WHERE id=".$id."";
mysql_query($query) or die(mysql_error());
echo $comments;
?>