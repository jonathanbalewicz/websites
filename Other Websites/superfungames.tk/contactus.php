<?php
mail('boshaoor2@gmail.com',"Message from ".$_POST['email'],'This message was sent from superfungames.tk. '.$_POST["email"].' sent this message from your contacting page. Here is their message:'.$_POST["message"],'From:'.$_POST["email"]);
echo "Message sent. <a href='index.htm'>Click here to go to the homepage.</a>";
?>