<html><head><title>Time</title>
<script type="text/javascript">function d() 
{var j=[<?php echo idate("H");?>,<?php echo idate("i");?>,<?php echo idate("s");?>];
var t=new Date();
var c=[t.getHours,t.getMinutes,t.getSeconds];
var a=[c[0]-j[0],c[1]-j[1],c[2]-j[2]];
var b="After Jz's";
if (a[0]<0)
{a[0]=j[0]-c[0]; b="Before Jz's";}
if (a[1]<0)
a[1]=j[1]-c[1];
if (a[2]<0)
a[2]=j[2]-c[2];
for (i=0;i<3;i++) 
document.getElementById("r"+i).innerHTML=a[0];
document.getElementById("r").innerHTML=b;
document.getElementById("t").innerHTML="Your computer's date and time:"+Date()+"<br>Jz's date and time:<?php 
$aop="AM";
if (idate('H')>12)
$aop="PM";
$dow=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$mow[1]='January';
$mow[2]='February';
$mow[3]='March';
$mow[4]='April';
$mow[5]='May';
$mow[6]='June';
$mow[7]='July';
$mow[8]='August';
$mow[9]='September';
$mow[10]='October';
$mow[11]='November';
$mow[12]='December';
$min=idate("i");
$sec=idate("s");
if ($min<10)
$min="0".idate("i");
if ($sec<10)
$sec="0".idate("s");
$d=array($dow[idate('w')],idate('d'),$mow[idate('m')],idate('Y'),idate('h'),$min,$sec,microtime(get_as_float),$aop);
echo $d[0]." ".$d[1]." ".$d[2]." ".$d[3]." ".$d[4].":".$d[5].":".$d[6].".".$d[7]." ".$d[8];
?>";}</script>
</head><body onload="d()"><div id="t"></div><br><div id="r0"></div>h <div id="r1"></div>m <div id="r2"></div>s <div id="r"></div>
<button onclick="window.location.href='servertime.php'">Update Time</button>
</body></html>