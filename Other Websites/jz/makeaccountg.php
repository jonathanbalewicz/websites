<!DOCTYPE html>
<html><head><link rel="stylesheet" type="text/css" href="http://jz.jzdb.heliohost.org/jzmaincss.css" />
<link rel="shortcut icon" href="http://jz.jzdb.heliohost.org/jzicon.ico" type="image/x-icon" />
<script type="text/javascript">
function aaa()
{
document.getElementById('w').innerHTML="Sending email...Don't close this window";}
document.getElementById('w').innerHTML='Email sent...Please wait...';
var xmlhttp;
if (window.XMLHttpRequest)
{xmlhttp=new XMLHttpRequest();}
else
{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
{document.getElementById("rw").innerHTML=xmlhttp.responseText;
document.getElementById("w").innerHTML="<input type='submit' value='Continue'>";}}
xmlhttp.open("GET","makeaccountj.php?u="+<?php 
echo $_POST['usrnm'].'&d='.$_POST['des'].'&p='.$_POST['pswrd'].'&e='.$_POST['email']; ?>,true);
xmlhttp.send();
</script>
<title>Making your account...</title></head><body onload="aaa()"><div id="pbox"><?php
echo "Please check your email to finish your account. <form method='get' action='makeaccountt.php'>Type your confirmation code in here:<input type='text' name='con'> Remember, there is a 1 000 000 Jz point fine for making multiple accounts.<br><div id='w'></div></form>";

?></div></body></html>
