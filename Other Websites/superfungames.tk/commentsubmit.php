<?php
$con=mysql_connect("localhost","njaohnt_ryhiliti","ryhiliti");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
mysql_select_db("njaohnt_comment", $con);
$a=$_POST['Name'];
$b=$_POST['Email'];
$c=$_POST['Comment'];
$sql="INSERT INTO Comments (`Name`, `Email`, `Reply Email?`, `Comment`)
VALUES
('$_POST[Name]','$_POST[Email]',0,'$_POST[Comment]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
if ($_POST['reply']=="on")
{$ron=1;}
else
{$ron=0;}
if (!mysql_query("UPDATE Comments SET `Reply Email?`=$ron WHERE Name='$_POST[Name]' AND Email='$_POST[Email]' AND Comment='$_POST[Comment]'",$con))
die('Error '.mysql_error());
echo "Your comment has been added. <a href='index.php'>Click here to go back to the homepage.</a>";
mysql_close($con);
?>