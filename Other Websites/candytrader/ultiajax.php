<!DOCTYPE html><html><body><?php
$t=$_GET["t"];
echo "hi";
if ($t=="add")
{$fp=$_GET["fp"];
$sp=$_GET["sp"];
if ($fp==null)
{echo "failed";}
elseif ($fp=="anonymous")
{$con=@mysqli_connect("sql209.gofreeserve.com","gofre_9709809","8JMBMW8J","gofre_9709809_trades");
$fstpwd=mysql_query("SELECT fstpwd FROM Persons WHERE scdpwd='anonymous'");
if ($fstpwd==$fp)
{echo "successful";}
else
{$con=@mysqli_connect("sql209.gofreeserve.com","gofre_9709809","8JMBMW8J","gofre_9709809_trades");
$fstpwd=mysql_query("SELECT fstpwd FROM Persons WHERE scdpwd='"+$sp+"'");
$scdpwd=mysql_query("SELECT scdpwd FROM Persons WHERE fstpwd='"+$fp+"'");
if ($fstpwd==$fp || $scdpwd==$sp)
{echo "successful";}
else
{echo "failed";}}}}
elseif ($t=="getimgsrc")
{$con=@mysqli_connect("sql209.gofreeserve.com","gofre_9709809","8JMBMW8J","gofre_9709809_trades");
echo "ha";
$r=mysql_query("SELECT imsrc,hint FROM Inventory");
while($row=mysql_fetch_array($r))
  {
  echo "<tr><td><img src='".$row['imsrc']."' width='250' height='250'></td><td><form><input name='fp' type='text' maxlength='20'><br><input name='sp' type='text' maxlength='20'>
<br><a onclick='add(fp.value,sp.value)'>Add candy</a></form></td><td>".$row['hint']."</td><tr>";
  }}?></body></html>