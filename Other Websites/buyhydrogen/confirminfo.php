<?php
$b=$_GET[email];
$a=$_GET[name];
$c=$_GET[i];
if (!$_GET[amount])
{
$con=mysql_connect("localhost","njaohnt_bh","i8nJvMeBsMt","njaohnt_bh");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }
mysql_select_db("njaohnt_bh", $con);
$sql="UPDATE investors SET Status='nothing invested, and not asked to invest' WHERE Email='".$b."'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_query($sql,$con);
mysql_close($con);
echo "Your information has been confirmed. You will get an email when you are asked to invest. To view the status of your investment, <a href='status.php'>click here</a>.";}
elseif ($c=='fp')
{$c=$_GET[amount];
$d=$_GET[distance];
$f=$_GET[place];
$g=$_GET[time];
mail('njaohnt2@gmail.com',"Future Purchaser","Name: ".$a." Email: ".$b." Amount: ".$c." kg Distance: ".$h." km Place: ".$f." Time: ".$g." months",'From: '.$b);
echo "Your information has been confirmed. You will get an email when a a hydrogen station is planned in your area.";}
elseif($_GET[amount])
{$c=$_GET[amount];
$d=$_GET[distance];
$foh=$_GET[place];
$g=$_GET[time];
$z=$_GET[num];
  if((filter_var($c, FILTER_VALIDATE_FLOAT) === false || filter_var($c, FILTER_VALIDATE_INT)===false) && (filter_var($z, FILTER_VALIDATE_FLOAT) === false || filter_var($z, FILTER_VALIDATE_INT===false)) && (filter_var($d, FILTER_VALIDATE_FLOAT) === false || filter_var($d, FILTER_VALIDATE_INT)===false) && (filter_var($g, FILTER_VALIDATE_FLOAT) === false || filter_var($g, FILTER_VALIDATE_INT)===false) && filter_var($b, FILTER_VALIDATE_EMAIL) === FALSE && ($e==='m' || $e==='k'))
    {
    echo "Something you entered was not correct.";
    }
else
{$xoh=$a;
$a=filter_var($xoh,FILTER_SANITIZE_ENCODED);
$f=filter_var($foh,FILTER_SANITIZE_ENCODED);
$con=mysqli_connect("localhost","njaohnt_bh","i8nJvMeBsMt","njaohnt_bh");
mysqli_select_db($con,"njaohnt_bh") or die ("no database");
if (!$con)
  {
  die('Could not connect: '.mysqli_connect_error());
  }
$sql="UPDATE investors SET Name='".$a."', Email='".$b."', Time=".$g.", Amount=".$c.", Distance=".$d.", Place='".$f."' WHERE `Confirmation Number`=".$z;
mysqli_query($con,$sql);
echo "Your information has been updated.";}
  
}
?>