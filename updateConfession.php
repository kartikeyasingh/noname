<?php
/*
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" ); 
header("Pragma: no-cache" );
header("Content-Type: text/xml; charset=utf-8");*/

$link = mysql_connect("mysql6.000webhost.com","a1835735_kartik","wtpmjgda.");
mysql_select_db("a1835735_confess") or die(mysql_error());
$string = $_POST['confession_text'];
/*
    if (function_exists('mysql_real_escape_string')) {
      return mysql_real_escape_string($string, $link);
    } elseif (function_exists('mysql_escape_string')) {
      return mysql_escape_string($string);
    }

    return addslashes($string);
  }
  */
if(isset($_POST['confession_text']) && $_POST['confession_text']!='')
{
$query = "INSERT INTO confessions(confession_text,likes,dislikes,comments,comment_table,timestamp) VALUES('".$string."',0,0,0,0,NOW() )";
$result = mysql_query($query);
$query1 = "SELECT id FROM confessions";
$result1 = mysql_query($query1);
$id = mysql_num_rows($result1);
$query2 = "CREATE TABLE `comments".$id."` (  `id` INT(11) NOT NULL AUTO_INCREMENT,  `likes` INT(11) NOT NULL DEFAULT '0',  `dislikes` INT(11) NOT NULL DEFAULT '0',  `user_name` VARCHAR(64) DEFAULT NULL, `comment` TEXT,  `post_time` DATETIME DEFAULT NULL,  PRIMARY KEY  (`id`))";
$result3= mysql_query($query2);
echo $id;
}
?>