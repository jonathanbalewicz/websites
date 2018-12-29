<?php
$a=$_GET["a"];
$b=$_GET["b"];
$con = mysql_connect("localhost","njaohnt_jz","8JMBMW");
mysql_select_db("njaohnt_prg",$con);
if ($b=a)
{$e=mysql_query("SELECT ap FROM users WHERE A_I=".$a);
$row = mysql_fetch_row($e);
$m=$row[0];
echo $m.$row."approve";}
if ($b!="t")
{$e=mysql_query("SELECT email FROM users WHERE A_I=".$a);
mysql_query("UPDATE users SET ap=1 WHERE A_I=1);
$row = mysql_fetch_row($e);
$m=$row[0];
mail($m,"Approved!","Your registraion has been approved!");
mysql_close($con);
echo "You have approved this account.";}
else
{$e=mysql_query("SELECT email FROM users WHERE A_I=".$a);
$row = mysql_fetch_row($e);
$m=$row[0];
mail($m,"Dispproved!","Your registraion has been disapproved!");
mysql_query("DELETE FROM users WHERE A_I=".$a);
mysql_close($con);
echo "You have disapproved this account.";}?>