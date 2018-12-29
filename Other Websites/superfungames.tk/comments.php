<?php
$c=mysql_connect("localhost","njaohnt_ryhiliti","ryhiliti");
if (!$c) 
 {  die('Could not connect: ' . mysql_error());  }
mysql_select_db("njaohnt_comment", $c);
$sql="SELECT * FROM Comments";
$n=mysql_query($sql);
for ($i=mysql_num_rows($n); $i>0; $i--)
{$rn=mysql_fetch_array($n);
if ($i<11)
{echo "<br><strong>".$rn['Name']."</strong><br>".$rn['Comment']; 
if (1==$rn['Reply Email?'])
  {echo "<br>From: <i>" . $rn['Email']."</i>";}}}
mysql_close($c);
?>