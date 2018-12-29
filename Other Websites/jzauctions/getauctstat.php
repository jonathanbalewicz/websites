<html><body><?php
$a=$_GET["a"]; 
$sql='"SELECT ';
mysql_select_db("njaohnt_jzdbauctions",mysql_connect("localhost","njaohnt_jz","8JMBMW"));
$sq=' FROM auctstat WHERE AI='.$a;
$r=array(mysql_query($sql."Title".$sq),mysql_query($sql."img".$sq),mysql_query($sql."Timed".$sq),mysql_query($sql."Timeh".$sq),mysql_query($sql."Timem"$sq),mysql_query($sql."Times".$sq),mysql_query($sql."Peobidg".$sq),mysql_query($sql."curam".$sq),mysql_query($sql."topbidr".$sq),mysql_query($sql."value".$sq),mysql_query($sql."cat".$sq));
$response="<tr><td>".$r[0]."</td><td><img src='"$r[1]."' width='100' height='100'></td><td>".$r[2].":".$r[3].":".$r[4].":".$r[5]."</td><td>".$r[6]."</td><td>".$r[7]."</td><td>".$r[8]."</td><td>".$r[9]."</td><td>".$r[10]."</td><td><script type='text/javascript'>function p() {newwindow=window.open('bid.php?t=".$r[0]."','n','height=200,width=150');}</script><a href='bid.php?t=".$r[0]."' onclick='p()'>Bid!</a></td></tr>";
echo $response; ?></body></html>