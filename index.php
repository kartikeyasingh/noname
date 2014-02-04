<!DOCTYPE html >
<html>
<head>
<title>Welcome to noname.com</title>
<script src="dependencies/jquery.js" type="text/javascript" charset="utf-8"></script>

<link rel="shortcut icon" href="logo_n.jpg"/>
<script src="dependencies/jquery-1.10.1.js">
</script>
<script type="text/javascript">
function search(){
alert("search");
document.getElementById("txt_search").focus();
}
</script>
</head>
<body onload="confess();">
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
<div style="width:100%;height:700px;overflow:auto;">
<div style="width:400px;height:700px;margin-right:0px;margin-top:30px;font-family:Lucida calligraphy;font-size:15px;float:left;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div id="divb" style="width:394px;height:700px;margin-top:2px;margin-left:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:394px;height:50px;">
<a href="#" onclick="search();" style="text-decoration:none" ><div style="width:250px;height:30px;margin-left:20px;float:left;margin-top:20px;background-color:rgb(225,225,225);"><div style="220px;height:26px;margin-left:30px;margin-top:4px;">Search By Confession no.</div>
</div></a>
<div id="div_search_no" style="width:100px;height:30px;margin-left:0px;margin-top:20px;float:right;margin-right:20px">
<form action="#" onSubmit="return search_query_no()"><input type="text" id="txt_search_no" name="txt_search_no" style="width:100px;height:25px;font-family:Lucida calligraphy;font-size:15px;" placeholder="Search"/></form></div></div>
<div  style="width:360px;height:auto;margin-left:20px;margin-top:5px;background-color:rgb(225,225,225);">
<div id="div_search_result_no" style="width:330px;height:auto;margin-left:30px;margin-top:4px"></div>
</div>

<div style="width:394px;height:50px;">
<a href="#" onclick="search();" style="text-decoration:none" ><div style="width:250px;height:30px;margin-left:20px;float:left;margin-top:20px;background-color:rgb(225,225,225);"><div style="220px;height:26px;margin-left:30px;margin-top:4px;">Search By likes above</div>
</div></a>
<div id="div_search_like" style="width:100px;height:30px;margin-left:0px;margin-top:20px;float:right;margin-right:20px">
<form action="#" onSubmit="return search_query_like()"><input type="text" id="txt_search_like" name="txt_search_like" style="width:100px;height:25px;font-family:Lucida calligraphy;font-size:15px;" placeholder="Search"/></form></div></div>
<div  style="width:360px;height:auto;margin-left:20px;margin-top:5px;background-color:rgb(225,225,225);">
<div id="div_search_result_like" style="width:330px;height:auto;margin-left:30px;margin-top:4px"></div>
</div>

<div style="width:394px;height:50px;">
<a href="#" onclick="search();" style="text-decoration:none" ><div style="width:250px;height:30px;margin-left:20px;float:left;margin-top:20px;background-color:rgb(225,225,225);"><div style="220px;height:26px;margin-left:30px;margin-top:4px;">Search By  dislikes above</div>
</div></a>
<div id="div_search_dislike" style="width:100px;height:30px;margin-left:0px;margin-top:20px;float:right;margin-right:20px">
<form action="#" onSubmit="return search_query_dislike()"><input type="text" id="txt_search_dislike" name="txt_search_dislike" style="width:100px;height:25px;font-family:Lucida calligraphy;font-size:15px;" placeholder="Search"/></form></div></div>
<div  style="width:360px;height:auto;margin-left:20px;margin-top:5px;background-color:rgb(225,225,225);">
<div id="div_search_result_dislike" style="width:330px;height:auto;margin-left:30px;margin-top:4px"></div>
</div>

<div style="width:394px;height:50px;">
<a href="#" onclick="search();" style="text-decoration:none" ><div style="width:250px;height:30px;margin-left:20px;float:left;margin-top:20px;background-color:rgb(225,225,225);"><div style="220px;height:26px;margin-left:30px;margin-top:4px;">Search By Comments above</div>
</div></a>
<div id="div_search_comment" style="width:100px;height:30px;margin-left:0px;margin-top:20px;float:right;margin-right:20px">
<form action="#" onSubmit="return search_query_comment()"><input type="text" id="txt_search_comment" name="txt_search_comment" style="width:100px;height:25px;font-family:Lucida calligraphy;font-size:15px;" placeholder="Search"/></form></div></div>
<div  style="width:360px;height:auto;margin-left:20px;margin-top:5px;background-color:rgb(225,225,225);">
<div id="div_search_result_comment" style="width:330px;height:auto;margin-left:30px;margin-top:4px"></div>
</div>

</div>
</div>
<div style="width:910px;height:700px;;float:right;">
<div style="width:850px;height:auto;margin-right:50px;margin-top:30px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div id="div_out" style="width:844px;height:auto;margin-top:2px;margin-left:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:750px;height:auto;margin-left:50px;margin-top:20px;background-color:;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:744px;height:auto;margin-left:2px;margin-top:2px;margin-bottom:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<table style="width:500px;height:30px;margin-left:50px;font-family:Lucida calligraphy;font-size:20px;color:gray">
<tr><td><a href="#" style="text-decoration:none;" onclick="confess()">Confess</a></td><td><a href="confess.php" style="text-decoration:none;" onclick="confess_pic()">With a Photo</a></td></tr>
</table>




<div style="width:647px;height:auto;margin-left:50px;background-color:rgb(225,225,225);margin-bottom:10px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<form  id="frm_txt_comment" name="frm_txt_comment" onSubmit="return blockSubmit();">
<textarea class="input" id="txt_confess" name="txt_confess" rows="2" cols="77" style="resize:none;font-family:Lucida calligraphy;font-size:15px;margin-left:3px;align:center" placeholder="What do you want to confess today!"></textarea>
<script src="jquery.elastic.source.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
			// <![CDATA[
			jQuery.noConflict();
			jQuery(document).ready(function(){			
				jQuery('textarea').elastic();
				jQuery('textarea').trigger('update');
			});	
			// ]]>
</script>
<div style="width:647px;height:40px;float:;margin-right:5px;background-color:">
<div style="width:100px;height:40px;float:right">
<input type="button" name="submit_confess" id="submit_confess" onclick="submit_confession()" value="Post"
 style="width:100px;font-family:Lucida calligraphy;font-size:20px;color;height:40px;
 border-style:solid;border-width:1px;border-color:rgb(210,210,210);box-shadow:none;background-color:rgb(210,210,210);"/>
</div>
</div>
</form>


</div>
</div>
</div>
<div id="div_confessions" style="width:844px;height:auto;"></div>
<script type="text/javascript">
var loader = getxmlhttp();
var mTimer;
var lastConfess = 0;
var firstConfess = 0;
var likeAction=0;
var dislikeAction=0;
var commentor = getxmlhttp();
var newloader = getxmlhttp();

//var mnewTimer;

function getxmlhttp()
{
if(window.XMLHttpRequest){
return new XMLHttpRequest();
}
else if(window.ActiveXObject){
return new ActiveXObject();
}
else{
}
}

function search_query_no(){
var searcher = getxmlhttp();
var txt = document.getElementById('txt_search_no').value;
document.getElementById('txt_search_no').value='';
//alert(txt);
if(searcher.readyState == 0 || searcher.readyState==4){
searcher.open("GET","search.php?no="+txt,true);
searcher.onreadystatechange = function(){
var divn = document.getElementById("div_search_result_no");
if(searcher.readyState == 3){
divn.innerHTML='<div id="loader_n" style="width:100px;height:30px;margin-left:115px;"><img src="images/loader.gif" width="32px" height="30px"/></div>';
}
if(searcher.readyState == 4 && searcher.status ==200){
$("#loader_n").remove();

var response = eval("("+searcher.responseText+")");
//alert(response.confessions.confession.length);
if(response.confessions.confession.length <=0){
divn.innerHTML="Sorry confession not found!";
}
else{
divn.innerHTML='';
for(i=0;i<response.confessions.confession.length;i++)
{
var id=response.confessions.confession[i].id;
var l = response.confessions.confession[i].likes;
var d= response.confessions.confession[i].dislikes;
var c = response.confessions.confession[i].comments;
divn.innerHTML+='<div id="div_s_result'+id+'" style="width:310px;height:20px;margin-top:2px;">#'+id+' '+l+' likes '+d+' dislikes '+c+' comments</div><br/>';
}
}
}
}

searcher.send();
}
return false;
}
function search_query_like(){
var searcher = getxmlhttp();
var txt = document.getElementById('txt_search_like').value;
document.getElementById('txt_search_like').value='';
//alert(txt);
if(searcher.readyState == 0 || searcher.readyState==4){
searcher.open("GET","search.php?like="+txt,true);
searcher.onreadystatechange = function(){

var divl = document.getElementById("div_search_result_like");
if(searcher.readyState == 3){
divl.innerHTML='<div id="loader_l" style="width:100px;height:30px;margin-left:115px;"><img src="images/loader.gif" width="32px" height="30px"/></div>';
}
if(searcher.readyState == 4 && searcher.status ==200){
//$("#loader_l").remove();

var response = eval("("+searcher.responseText+")");
alert(response.confessions.confession.length);
if(response.confessions.confession.length <=0){
divl.innerHTML="Sorry confession not found!";
}
else{
divl.innerHTML='';
for(i=0;i<response.confessions.confession.length;i++)
{
var id=response.confessions.confession[i].id;
var l = response.confessions.confession[i].likes;
var d= response.confessions.confession[i].dislikes;
var c = response.confessions.confession[i].comments;
divl.innerHTML+='<div id="div_s_result'+id+'" style="width:310px;height:;margin-top:2px;">#'+id+' '+l+' likes '+d+' dislikes '+c+' comments</div><br/>';
}
}
}
}
searcher.send();
}
return false;
}
function search_query_dislike(){
var searcher = getxmlhttp();
var txt = document.getElementById('txt_search_dislike').value;
document.getElementById('txt_search_dislike').value='';
//alert(txt);
if(searcher.readyState == 0 || searcher.readyState==4){
searcher.open("GET","search.php?dislike="+txt,true);
searcher.onreadystatechange = function(){

var divd = document.getElementById("div_search_result_dislike");
if(searcher.readyState == 3){
divd.innerHTML='<div id="loader_dd" style="width:100px;height:30px;margin-left:115px;"><img src="images/loader.gif" width="32px" height="30px"/></div>';
}
if(searcher.readyState == 4 && searcher.status ==200){
//$("#loader_dd").remove();

var response = eval("("+searcher.responseText+")");
//alert(response.confessions.confession.length);
if(response.confessions.confession.length <= 0 ){
divd.innerHTML="Sorry confession not found!";
}
else{
divd.innerHTML='';
for(i=0;i<response.confessions.confession.length;i++)
{
var id=response.confessions.confession[i].id;
var l = response.confessions.confession[i].likes;
var d= response.confessions.confession[i].dislikes;
var c = response.confessions.confession[i].comments;
var text = response.confessions.confession[i].confession_text;
var t = response.confessions.confession[i].timestamp;
divd.innerHTML+='<div id="div_s_result" style="width:310px;height:20px;margin-top:2px;">#'+id+' '+l+' likes '+d+' dislikes '+c+' comments</div><br/>';
}
}
}
}
searcher.send();
}
return false;
}
function search_query_comment(){
var searcher = getxmlhttp();
var txt = document.getElementById('txt_search_comment').value;
document.getElementById('txt_search_comment').value='';
//alert(txt);
if(searcher.readyState == 0 || searcher.readyState==4){
searcher.open("GET","search.php?comment="+txt,true);
searcher.onreadystatechange = function(){
var divc = document.getElementById("div_search_result_comment");
if(searcher.readyState == 3){
divc.innerHTML='<div id="loader_c" style="width:100px;height:30px;margin-left:115px;"><img src="images/loader.gif" width="32px" height="30px"/></div>';
}
if(searcher.readyState == 4 && searcher.status ==200){
$("#loader_c").remove();

var response = eval("("+searcher.responseText+")");
//alert(response.confessions.confession.length);
if(response.confessions.confession.length <=0){
divc.innerHTML="Sorry confession not found!";
}
else{
//divc.innerHTML='';
for(i=0;i<response.confessions.confession.length;i++)
{
var id=response.confessions.confession[i].id;
var l = response.confessions.confession[i].likes;
var d= response.confessions.confession[i].dislikes;
var c = response.confessions.confession[i].comments;
divc.innerHTML+='<div id="div_s_result'+id+'" style="width:310px;height:20px;margin-top:2px;">#'+id+' '+l+' likes '+d+' dislikes '+c+' comments</div><br/>';
}
}
}

}
searcher.send();
}
return false;
}
////
///////----------------------------------------------------
/*
function prepend_confess(txt){
alert(txt);
$("#div_confessions").prepend('<div style="width:750px;height:auto;margin-left:50px;margin-top:20px;background-color:;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:auto;margin-left:2px;margin-top:2px;margin-bottom:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:30px;">'+
'<div id="div_conf_no'+i+'" style="width:350px;height:30px;margin-left:50px;float:left;margin-top:10px;font-family:Lucida calligraphy;font-size:15px">Confession #'+(i)+'</div>'+
'<div id="time'+i+'" style="width:70px;height:30px;float:right;background-color:;font-family:Lucida calligraphy;font-size:12px">18:30</div>'+
'</div>'+
'<div id="div_confess'+i+'" style="width:650px;height:200px;margin-left:100px;margin-top:10px;background-color:;font-family:Lucida calligraphy;font-size:13px">'+text+'</div>'+
'<div id="div_like'+i+'" style="width:650px;height:20px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:500px;height:30px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td><a id="a_like'+i+'" href="#" onclick="like('+i+')" style="text-decoration:none">Like</a></td>'+
'<td><a id="a_dislike'+i+'" href="#" onclick="dislike('+i+')" style="text-decoration:none">Dislike</a></td>'+
'<td><a id="a_comment'+i+'" href="#" onclick="comment('+i+')" style="text-decoration:none">Comment</a></td>'+
'<td><a href="#" onclick="bookmark('+i+')" style="text-decoration:none;color;rgb(225,225,225)">Bookmark</a></td></tr></table>'+
'</div>'+
'<div id="div_num_like'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:300px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td id="td_num_like'+i+'">0 likes,</td><td id="td_num_dislike'+i+'">0 dislikes,</td>'+
'<td id="td_num_comments'+i+'"><a href="#" onclick="showComment('+i+')" style="text-decoration:none;color:black;">0 comments</a></td></tr></table>'+
'</div>'+
'<div id="div_show_comment'+i+'" style="width:650px;height:auto;font-family:Lucida calligraphy;color:rgb(80,80,80);font-size:13px"></div>'+
'<div id="div_comment'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<form  action="#" onSubmit="postComment('+i+')">'+
'<input type="text" id="txt_comment'+i+'" style="width:550px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px" placeholder="Write a comment..."/></form>'+
'</div>'+
'</div>'+
'</div>');
}*/
////
//////-------------------------------------------------------
function confess(){
//event.preventDefault();
document.getElementById("txt_confess").focus();
getConfessions();
}
function getConfessions(){
if(loader.readyState == 4 || loader.readyState == 0){
loader.open("GET","load_confessions.php?last="+lastConfess+"&first="+firstConfess,true);
loader.onreadystatechange = handleload;
loader.send();
}
}
function handleload()
{
var div1 = document.getElementById("div_confessions");
if(loader.readyState == 3){
div1.innerHTML+='<div id="div_loader" style="width:400px;height:32px;margin-left:400px;"><img src="images/loader.gif" width="32px" height="32px"/></div>';
}
else if(loader.readyState == 4){
$("#div_loader").remove();
//alert(loader.responseText);
var response =eval("("+loader.responseText+")");
if(firstConfess < response.confessions.confession[0].id){
firstConfess = response.confessions.confession[0].id;
}
for(j=0;j < response.confessions.confession.length;j++)
{
var i = response.confessions.confession[j].id;
div1.innerHTML+='<div style="width:750px;height:auto;margin-left:50px;margin-top:20px;background-color:;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:auto;margin-left:2px;margin-top:2px;margin-bottom:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:30px;">'+
'<div id="div_conf_no'+i+'" style="width:350px;height:30px;margin-left:50px;float:left;margin-top:10px;font-family:Lucida calligraphy;font-size:15px">Confession #'+(i)+'</div>'+
'<div id="time'+i+'" style="width:70px;height:30px;float:right;background-color:;font-family:Lucida calligraphy;font-size:12px">'+response.confessions.confession[j].timestamp+'</div>'+
'</div>'+
'<div id="div_confess'+i+'" style="width:650px;height:200px;margin-left:100px;margin-top:10px;background-color:;font-family:Lucida calligraphy;font-size:13px">'+response.confessions.confession[j].confession_text+'</div>'+
'<div id="div_like'+i+'" style="width:650px;height:20px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:500px;height:30px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td><a id="a_like'+i+'" href="#" onclick="like('+i+')" style="text-decoration:none">Like</a></td>'+
'<td><a id="a_dislike'+i+'" href="#" onclick="dislike('+i+')" style="text-decoration:none">Dislike</a></td>'+
'<td><a id="a_comment'+i+'" href="#" onclick="comment('+i+')" style="text-decoration:none">Comment</a></td>'+
'<td><a href="#" onclick="bookmark('+i+')" style="text-decoration:none;color;rgb(225,225,225)">Bookmark</a></td></tr></table>'+
'</div>'+
'<div id="div_num_like'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:300px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td id="td_num_like'+i+'">'+response.confessions.confession[j].likes+' likes,</td><td id="td_num_dislike'+i+'">'+response.confessions.confession[j].dislikes+' dislikes,</td>'+
'<td id="td_num_comments'+i+'"><a href="#" onclick="showComment('+i+')" style="text-decoration:none;color:black;">'+response.confessions.confession[j].comments+' comments</a></td></tr></table>'+
'</div>'+
'<div id="div_show_comment'+i+'" style="width:650px;height:auto;font-family:Lucida calligraphy;color:rgb(80,80,80);font-size:13px"></div>'+
'<div id="div_comment'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<form  action="#" onSubmit="postComment('+i+')">'+
'<input type="text" id="txt_comment'+i+'" style="width:550px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px" placeholder="Write a comment..."/></form>'+
'</div>'+
'</div>'+
'</div>';
}
lastConfess += 1;
}
mTimer = setTimeout('getConfessions();',20000);
//loadnew();
}

function like(j){
var liker = getxmlhttp();
if(likeAction == 0){
if(liker.readyState == 0){
liker.open("GET","like.php?id="+j+"&action=0",true);
}
document.getElementById('a_like'+j).innerHTML="Unlike";
likeAction =1;
}
else if(likeAction ==1){
if(liker.readyState == 0){
liker.open("GET","like.php?id="+j+"&action=1",true);
}
document.getElementById('a_like'+j).innerHTML="Like";
likeAction =0;
}
else{
}
liker.onreadystatechange = function(){
if(liker.readyState ==4){ 
var like = liker.responseText;
document.getElementById('td_num_like'+j).innerHTML=like+" likes";
}
}

liker.send();
}

function dislike(j){
var disliker = getxmlhttp();
if(dislikeAction == 0){
if(disliker.readyState == 0){
disliker.open("GET","dislike.php?id="+j+"&action=0",true);
}
document.getElementById('a_dislike'+j).innerHTML="Forgive";
dislikeAction =1;
}
else if(dislikeAction ==1){
if(disliker.readyState == 0){
disliker.open("GET","dislike.php?id="+j+"&action=1",true);
}
document.getElementById('a_dislike'+j).innerHTML="Dislike";
dislikeAction =0;
}
else{
}
disliker.onreadystatechange = function(){
if(disliker.readyState ==4){ 
var dislike = disliker.responseText;
document.getElementById('td_num_dislike'+j).innerHTML=dislike+" dislikes";
}
}

disliker.send();
}
function comment(i){
document.getElementById('txt_comment'+i).focus();
}

function postComment(i){
var text = document.getElementById("txt_comment"+i).value;
//alert(text);
if(text ==''){
return;
}
document.getElementById("div_show_comment"+i).innerHTML+='<div style="width:560px;height:27px;margin-top:3px;margin-left:100px;background-color:rgb(245,245,245);"><div style="width:520px;height:28px;margin-left:20px;">'+text+'</div></div>';
document.getElementById("txt_comment"+i).value='';
if(commentor.readyState == 0 || commentor.readyState == 4){
commentor.open("POST",'comment.php',true);
var param = 'comment='+text;
param+='&id='+i;
commentor.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

commentor.onreadystatechange = function(){
if(commentor.readyState == 4 && commentor.status == 200){
document.getElementById("td_num_comments"+i).innerHTML=commentor.responseText +' comments';
//alert(commentor.responseText);
}
}
commentor.send(param);
}
return false;
}

function showComment(i){

var comViewer = getxmlhttp();
if(comViewer.readyState == 0){

comViewer.open("GET","showComment.php?id="+i,true);
comViewer.onreadystatechange = function(){
if(comViewer.readyState == 4 && comViewer.status == 200){ 
//alert(comViewer.responseText);
var response = eval("("+comViewer.responseText+")");
//alert(response.comments.comment.length);
for(j=0;j<response.comments.comment.length;j++)
{
//document.getElementById("div_confessions").innerHTML+="kar";
document.getElementById('div_show_comment'+i+'').innerHTML+='<div style="width:560px;height:27px;margin-top:3px;margin-left:100px;background-color:rgb(245,245,245);"><div style="width:520px;height:28px;margin-left:20px;">'+response.comments.comment[j].comment_text+'</div></div>';
}
}
}
comViewer.send();
}
}
function loadnew(){

if(newloader.readyState == 4 || newloader.readyState == 0){
newloader.open("GET","newloader.php?first="+firstConfess,true);
newloader.onreadystatechange = handlenewload;
newloader.send();
}
}

function handlenewload(){
if(newloader.readyState == 4 && newloader.status == 200){
var response = eval("("+ newloader.responseText +")");
firstConfess = response.confessions.confession[0].id;
alert(firstConfess);
for(j=0;j < response.confessions.confession.length;j++)
{
var i = response.confessions.confession[j].id;
div1.innerHTML+='<div style="width:750px;height:auto;margin-left:50px;margin-top:20px;background-color:;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:auto;margin-left:2px;margin-top:2px;margin-bottom:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:30px;">'+
'<div id="div_conf_no'+i+'" style="width:350px;height:30px;margin-left:50px;float:left;margin-top:10px;font-family:Lucida calligraphy;font-size:15px">Confession #'+(i)+'</div>'+
'<div id="time'+i+'" style="width:70px;height:30px;float:right;background-color:;font-family:Lucida calligraphy;font-size:12px">'+response.confessions.confession[j].timestamp+'</div>'+
'</div>'+
'<div id="div_confess'+i+'" style="width:650px;height:200px;margin-left:100px;margin-top:10px;background-color:;font-family:Lucida calligraphy;font-size:13px">'+response.confessions.confession[j].confession_text+'</div>'+
'<div id="div_like'+i+'" style="width:650px;height:20px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:500px;height:30px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td><a id="a_like'+i+'" href="#" onclick="like('+i+')" style="text-decoration:none">Like</a></td>'+
'<td><a id="a_dislike'+i+'" href="#" onclick="dislike('+i+')" style="text-decoration:none">Dislike</a></td>'+
'<td><a id="a_comment'+i+'" href="#" onclick="comment('+i+')" style="text-decoration:none">Comment</a></td>'+
'<td><a href="#" onclick="bookmark('+i+')" style="text-decoration:none;color;rgb(225,225,225)">Bookmark</a></td></tr></table>'+
'</div>'+
'<div id="div_num_like'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:300px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td id="td_num_like'+i+'">'+response.confessions.confession[j].likes+' likes,</td><td id="td_num_dislike'+i+'">'+response.confessions.confession[j].dislikes+' dislikes,</td>'+
'<td id="td_num_comments'+i+'"><a href="#" onclick="showComment('+i+')" style="text-decoration:none;color:black;">'+response.confessions.confession[j].comments+' comments</a></td></tr></table>'+
'</div>'+
'<div id="div_show_comment'+i+'" style="width:650px;height:auto;font-family:Lucida calligraphy;color:rgb(80,80,80);font-size:13px"></div>'+
'<div id="div_comment'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<form  action="#" onSubmit="postComment('+i+')">'+
'<input type="text" id="txt_comment'+i+'" style="width:550px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px" placeholder="Write a comment..."/></form>'+
'</div>'+
'</div>'+
'</div>';
}
//lastConfess += 1;
}
mnewTimer = setTimeout('loadnew();',2000);

}


</script>
<script type="text/javascript">
function submit_confession()
{
var xmlhttp = getxmlhttp();
var text = document.getElementById('txt_confess').value;
document.getElementById('txt_confess').value='';
if(text == '')
{
//document.getElementById("div_outer_right").innerHTML="null";
//alert("null");
return;
}
xmlhttp.open("POST","updateConfession.php",true);
var param='confession_text='+text;
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
{
//id = xmlhttp.responseText;
//alert(xmlhttp.responseText);
}
}
xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
xmlhttp.send(param);
var i = ++firstConfess;
$("#div_confessions").prepend('<div style="width:750px;height:auto;margin-left:50px;margin-top:20px;background-color:;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:auto;margin-left:2px;margin-top:2px;margin-bottom:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">'+
'<div style="width:744px;height:30px;">'+
'<div id="div_conf_no'+i+'" style="width:350px;height:30px;margin-left:50px;float:left;margin-top:10px;font-family:Lucida calligraphy;font-size:15px">Confession #'+(i)+'</div>'+
'<div id="time'+i+'" style="width:70px;height:30px;float:right;background-color:;font-family:Lucida calligraphy;font-size:12px">18:30</div>'+
'</div>'+
'<div id="div_confess'+i+'" style="width:650px;height:200px;margin-left:100px;margin-top:10px;background-color:;font-family:Lucida calligraphy;font-size:13px">'+text+'</div>'+
'<div id="div_like'+i+'" style="width:650px;height:20px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:500px;height:30px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td><a id="a_like'+i+'" href="#" onclick="like('+i+')" style="text-decoration:none">Like</a></td>'+
'<td><a id="a_dislike'+i+'" href="#" onclick="dislike('+i+')" style="text-decoration:none">Dislike</a></td>'+
'<td><a id="a_comment'+i+'" href="#" onclick="comment('+i+')" style="text-decoration:none">Comment</a></td>'+
'<td><a href="#" onclick="bookmark('+i+')" style="text-decoration:none;color;rgb(225,225,225)">Bookmark</a></td></tr></table>'+
'</div>'+
'<div id="div_num_like'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<table style="width:300px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px;color:">'+
'<tr><td id="td_num_like'+i+'">0 likes,</td><td id="td_num_dislike'+i+'">0 dislikes,</td>'+
'<td id="td_num_comments'+i+'"><a href="#" onclick="showComment('+i+')" style="text-decoration:none;color:black;">0 comments</a></td></tr></table>'+
'</div>'+
'<div id="div_show_comment'+i+'" style="width:650px;height:auto;font-family:Lucida calligraphy;color:rgb(80,80,80);font-size:13px"></div>'+
'<div id="div_comment'+i+'" style="width:650px;height:30px;margin-left:50px;margin-top:0px;background-color:;">'+
'<form  action="#" onSubmit="postComment('+i+')">'+
'<input type="text" id="txt_comment'+i+'" style="width:550px;height:20px;margin-left:50px;font-family:Lucida calligraphy;font-size:13px" placeholder="Write a comment..."/></form>'+
'</div>'+
'</div>'+
'</div>');
}

</script>

</div>
</div>
</div>
</div>
<div style="1350px;height:100px;"></div>
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


</body>
</head>