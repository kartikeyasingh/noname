<!DOCTYPE html >
<html>
<head>
<title>Chat with strangers</title>
<script src="dependencies/jquery.js" type="text/javascript" charset="utf-8"></script>

<link rel="shortcut icon" href="logo_n.jpg"></link>
<script src="dependencies/jquery-1.10.1.js">
</script>
<script type="text/javascript">
var chatter = getxmlhttp();
var connecter = getxmlhttp();
var chat_id;
var user_id;
var mTimer;
var lastMessage =0;
var sender = getxmlhttp();
var disconnecter = getxmlhttp();
var status=0;
function startChat(){
status = 0;
connect();
document.getElementById("txt_chat").focus();

}
function getxmlhttp(){
if(window.XMLHttpRequest){
return new XMLHttpRequest();
}
else if(window.ActiveXObject){
return new ActiveXObject();
}
else
{
document.getElementById("div_chat").innerHTML="Your browser doesn't support Ajax, Please upgrade your browser!";
}
}

function connect(){
//document.getElementById("div_chat").innerHTML="connecting to server...";
//if(connecter.readyState == 0){
connecter.open("GET","connectuser.php",true);
connecter.onreadystatechange = handleConnection;
connecter.send();
//}
}

function handleConnection(){
if(connecter.readyState == 3)
{
document.getElementById("div_chat").innerHTML="connecting to server...";

}
if(connecter.readyState == 4 && connecter.status == 200){
//document.getElementById("div_chat").innerHTML="connecting to server...";

var response = connecter.responseText;
chat_id = response % 10;
user_id = (response - chat_id)/10;
if(user_id == 2){
status = 2;
document.getElementById("div_chat").innerHTML='<font id="fntfound" color="blue">Stranger found, say hello! ,you are chating with a random stranger...</font>';
//alert(user_id);
}
else{
status =1;
document.getElementById("div_chat").innerHTML='<font id="fntwaiting" color="blue">Waiting for a stranger to join... </font>';
}
getChatText();
//document.getElementById("div_chat").innerHTML="user id ="+user_id+"<br/>chat_id"+chat_id;
}
}

function getChatText(){
if(chatter.readyState == 4 || chatter.readyState == 0){

chatter.open("GET",'getChat.php?chat_id='+chat_id+'&user_id='+user_id+'&last='+lastMessage+'&status='+status,true);
chatter.onreadystatechange = handleReceiveChat;
chatter.send();
}
}

function handleReceiveChat(){

var div = document.getElementById("div_chat");
if(chatter.readyState == 3){
div.innerHTML+='<font id="fnt_typing" color="red">stranger is typing...</font>';
}
if(chatter.readyState == 4 && chatter.status==200){
//document.getElementById("div_chat").innerHTML="user id ="+user_id+"<br/>chat_id"+chat_id;
//div.innerHTML+=chatter.responseText;
$("#fnt_typing").remove();
$("#fntfound").remove();
if(chatter.responseText == 0){
div.innerHTML+='<font color="blue"><br/>Stranger has been disconnected,Start a new chat</font>';
lastMessage = 0;
//resetChat();
}
else{
if(chatter.responseText == 2){
div.innerHTML='<font color="blue"><br/>Stranger found, say hello...</font>';
status=2;
}
else if(chatter.responseText ==1){
div.innerHTML='<font color="blue">Still Waiting for a stranger to join with you</font>';
}
else{
var response = eval("(" + chatter.responseText +")");
 for(var i=0;i<response.messages.message.length;i++)
 {
 div.innerHTML+='<font color="blue"><br/>Stranger: </font>';
 div.innerHTML+=response.messages.message[i].message;
 div.innerHTML+='<br/>';
 div.scrollTop = div.scrollHeight;
 lastMessage = response.messages.message[i].id;
 } 
}
mTimer = setTimeout('getChatText();',500);
}
 }
 }
 
 function sendChatText(){
 if(document.getElementById("txt_chat").value == ''){
 return;
 }
 document.getElementById("div_chat").innerHTML+='<font color="blue"><br/>You: </font>'+document.getElementById("txt_chat").value+'<br/>';

 document.getElementById("div_chat").scrollTop = document.getElementById("div_chat").scrollHeight;
 
 if(sender.readyState == 4 || sender.readyState == 0){
 sender.open("POST","sendChat.php",true);
 sender.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
 sender.onreadystatechange = handleSendChat;
 var param = 'message='+document.getElementById("txt_chat").value+'';
 param+='&chat_id='+chat_id+'';
 param+='&user_id='+user_id+'';
 sender.send(param);
 document.getElementById('txt_chat').value='';
 }
 }
 
 function handleSendChat(){
 if(sender.readyState == 4 && sender.status==200){
document.getElementById("txt_chat").focus();
//alert(sender.responseText);
 }
 clearInterval(mTimer);
 getChatText();
 }
 function resetChat(){
 status=0;
 lastMessage = 0;
 document.getElementById("div_chat").innerHTML+='<font color="blue">you have disconnected, start a new chat</font>';
 document.getElementById("txt_chat").value='';
 
disconnecter.open("GET",'disconnect.php?chat_id='+chat_id,true);
disconnecter.onreadystatechange = handleResetChat;
disconnecter.send();
 }
function handleResetChat(){
 //connect();
 }
 /*
 function typing(){
 var typer = getxmlhttp();
 if(typer.readyState == 4 || typer.readyState == 0){
 typer.open("GET",'typing.php?chat_id='+chat_id+'&user_id='+user_id, true);
 typer.onreadystatechange= function(){
 alert(typer.responseText);
 }
 typer.send();
 }
 }*/
</script>
</head>
<body onload=";">
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
<div style="width:1350;height:655px;">
<div style="width:400px;height:655px;margin-right:0px;margin-top:30px;float:left;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:394px;height:655px;margin-top:2px;margin-left:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:350px;height:50px;margin-left:25px;margin-top:25px;background-color:rgb(225,225,225);border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:150px;height:30px;margin-left:100px;margin-top:10px;">
<a href="#div_outer_chat" onclick="startChat();" style="text-decoration:none;color:gray;font-family:Lucida calligraphy;font-size:25px;">Start Chat</a>
</div>
<div style="width:350px;height:50px;margin-right:25px;margin-top:125px;border-style:solid;border-width:1px;border-color:rgb(225,225,225);">
<div style="width:250px;height:50px;margin-left:50px;margin-top:10px;color:gray;font-family:Lucida calligraphy;font-size:25px;">Comming soon...
</div>
</div>
<div style="width:300px;height:200px;margin-left:50px;margin-top:10px;color:rgb(50,50,50);font-family:Lucida calligraphy;font-size:14px;border-style:none;border-width:1px;border-color:rgb(225,225,225)">
<br/>&nbsp&nbsp&nbsp#Video chat<br/><br/>
&nbsp&nbsp&nbsp#Chat within your locality<br/><br/>
&nbsp&nbsp&nbsp#Chat within your school/college<br/><br/>
&nbsp&nbsp&nbsp#Save your chat<br/><br/>

</div>
</div>
</div>
</div>
<div id="div_outer_chat" style="width:850px;height:655px;margin-right:50px;margin-top:30px;float:right;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div style="width:844px;height:655px;margin-top:2px;margin-left:2px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<div id="div_chat" style="width:750px;height:520px;overflow:auto;margin-left:50px;font-family:Lucida calligraphy;font-size:20px;color:gray;margin-top:20px;background-color:;border-bottom-style:solid;border-width:1px;border-color:rgb(225,225,225)">
</div>
<div style="width:750px;height:40px;margin-left:50px;background-color:;">
<div id="div_write" style="width:575px;height:35px;margin-left:0px;float:left;margin-top:0px;background-color:;margin-right:10px;border-style:solid;border-width:1px;border-color:rgb(225,225,225)">
<form action="#div_outer_chat" id="frmchat" name="frmchat" onSubmit="sendChatText();">
<input id="txt_chat"  style="width:575px;height:35px;font-family:Lucida calligraphy;font-size:17px" />
</form>
</div>
<div style="width:150px;height:35px;margin-left:0px;float:right;margin-right:0px">
<input type="button" name="btn_reset_chat"  id="btn_reset_chat" value="Disconnect" onclick="resetChat();" style="width:150px;height:42px;border-style:solid;border-color:white;font-family:Lucida calligraphy;font-size:20px;color:blue;"/>
</div>
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
</div>
</body>
</html>
