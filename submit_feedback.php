<?php


$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());

$name = $_POST['name'];
$regard = $_POST['regard'];
$feed = $_POST['feed'];
mysql_query("INSERT INTO feedback(name,regard,feedback) VALUES('".$name."','".$regard."','".$feed."')") or die(mysql_error());
?>