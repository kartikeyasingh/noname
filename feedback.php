<html>
<head><title>Feedback</title>
<link rel="shortcut icon" href="logo_n.jpg"></link>
</head>
<body>
<div style="width:100%;position:relative;">
<div id="div_top_bar" style="width:1350px;height:150px;background-color:;border-bottom-style:;border-width:3px;border-color:rgb(150,150,150);box-shadow:5px 5px 5px #808080">
<a href="/" ><div style="width:100px;height:100px;margin-left:100px;float:left"><img src="images/fbm_logo5.jpg" style="border-style:solid;border-color:white;border-radius:2px;"  width="100" height="100"/></div></a>
<div style="width:1150px;height:150px;float:right;">
<div style="width:500px;height:70px;float:right;background-color:;margin-right:100px">
<a href="/" style="text-decoration:none;color:gray;font-size:60px;font-family:Lucida calligraphy;">NoName.com</a>
</div>
<div style="width:900px;height:80px;float:right;background-color:">
<div style="width:400px;height:80px;float:left;"><a href="index.php" style="text-decoration:none;color:gray;font-size:40px;font-family:Lucida calligraphy;">confess anything</a></div>
<div style="width:400px;height:80px;float:right;"><a href="chat.php" style="text-decoration:none;color:gray;font-size:40px;font-family:Lucida calligraphy;">chat to strangers</a></div>
</div>
</div>
</div>
<div id="after_feedback" style="width:800px;height:auto;margin-left:225px;margin-top:50px;color:gray;font-family:Lucida calligraphy;font-size:18px;">
</div>
<div style="width:800px;height:450px;margin-left:225px;margin-top:50px;color:gray;font-family:Lucida calligraphy;font-size:18px;">
<form action="#" onsubmit="feedback()"><table style="width:700px">
<tr><td>Your name please : </td><td><input type="text" style="width:270px;height:30px;font-family:Lucida calligraphy;font-size:13px;" id="name" name="name"/></td></tr>
<tr><td>Feedback regarding : </td><td><input type="text" style="width:270px;height:30px;font-family:Lucida calligraphy;font-size:13px;" id="regard" name="regard"/></td></tr>
<tr><td>Your Feedback : </td><td><textarea id="txt_feed" name="txt_feed" rows="5" cols="34" style="margin-top:20px;resize:none;font-family:Lucida calligraphy;font-size:13px;"></textarea></td></tr>
<tr><td><input type="button" name="submit" value="Submit" onclick="feedback()" style="width:100px;height:34px;margin-top:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:17px;background-color:rgb(230,230,230)"/></td><td></td></tr>
</table></form>
</div>
<script type="text/javascript">
function feedback(){
var name = document.getElementById('name').value;
var regard = document.getElementById('regard').value;
var txt_feed = document.getElementById('txt_feed').value;
document.getElementById('name').value='';
document.getElementById('regard').value='';
document.getElementById('txt_feed').value='';
if(txt_feed == ''){
return;
}
//alert(name+regard+txt_feed);
if(window.XMLHttpRequest){
var xmlhttp = new XMLHttpRequest();
}
else if(window.ActiveXObject){
var xmlhttp = new ActiveXObject();
}
if(xmlhttp.readyState == 4 || xmlhttp.readyState == 0){
//alert(Date());
xmlhttp.open("POST","submit_feedback.php",true);
xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
xmlhttp.onreadystatechange = function(){

if(xmlhttp.readyState == 3){
//alert('JJJJJJJJ');
document.getElementById('after_feedback').innerHTML='Your request is being processed...';
}
if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
//alert(xmlhttp.responseText);
document.getElementById('after_feedback').innerHTML='Thanks a lot, This will be implemented within 2-3 days.';
}
}
var param='name='+name+'';
param+='&regard='+regard+'';
param+='&feed='+txt_feed+'';
xmlhttp.send(param);
}
}
</script>



<div style="1350px;height:300px;"></div>
<div style="width:1350px;height:100px;background:url('images/gradientbottom.jpg');font-family:Lucida calligraphy;font-size:17px;color:gray;">

<div style="width:1000px;height:30px;margin-left:275px;margin-top:px;">
This website needs your suggestions, please provide them in feedback section !</div>
<div style="width:1000px;height:30px;margin-left:345px;margin-top:20px;word-spacing:50px">
<a href="about.php" style="text-decoration:none">AboutUS</a>
 | <a href="feedback.php" style="text-decoration:none">Feedback</a>
 | <a href="copyright.php" style="text-decoration:none">Copyright</a>
 | <a href="privacy.php" style="text-decoration:none">Privacy</a>
</div>
</div>
</div>