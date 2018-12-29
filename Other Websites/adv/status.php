<html><body><?php
$con = mysql_connect("localhost","njaohnt_jz","8JMBMW");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$bidrow=array("Title","Timed","Timeh","Timem","Times","Owner","bidtyal","Prdes","cat","typs","chats","bidhi","Peobidg","curam","topbidr");
mysql_select_db("njaohnt_jzdbauctions", $con);

$result = mysql_query("SELECT * FROM auctstat");
echo "<table border='1'>
<tr>";
for ($l=0; $l<15; $l++)
{echo "<th>" . $bidrow[$l] . "</th>";}
echo "</tr><tr>";
while($row = mysql_fetch_array($result))
  {
  for ($i=0; $i<15; $i++) {
  echo "<td>" . $row[$bidrow[$i]] . "</td>";
   }
  }
  $sec=59-idate("s");
for($i=0;$i<5;$i++)
{}
mysql_close($con);
?><script type="text/javascript">
for(i=0;i<5;i++)
{
setTimeout('alert(\'test\')',5000)
document.write("<?php echo $sec; ?>");
}</script>
</body></html>