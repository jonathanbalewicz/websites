<?php
$servername = "fdb18.freehostingeu.com";
$username = "2600165_njaohnt";
$password = "-------------";
$dbname = "2600165_njaohnt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$titlea=str_replace("'","&apos;",$_POST['title']);
$imagea=str_replace("'","&apos;",$_POST['image']);
$authora=str_replace("'","&apos;",$_POST['author']);
$texta=str_replace("'","&apos;",$_POST['text']);
$relateda=str_replace("'","&apos;",$_POST['related']);
$topica=str_replace("'","&apos;",$_POST['topic']);

$title=str_replace('"',"&quot;",$titlea);
$image=str_replace('"',"&quot;",$imagea);
$author=str_replace('"',"&quot;",$authora);
$text=str_replace('"',"&quot;",$texta);
$related=str_replace('"',"&quot;",$relateda);
$topic=str_replace('"',"&quot;",$topica);

if (!$resu=$conn->query("INSERT INTO articles (title,image,author,text,related,topic) VALUES ('".$title."','".$image."','".$author."','".$text."','".$related."','".$topic."')"))
{echo $conn->error;}
else
echo "added";
?>