<?php
if ($_GET['randomId'] != "I2q_Vit9FuMxyVlC_YDJjTrdqQ3VTVCzjmpkOihXLwOEXTJf6ryBQPQpnEEwWROF") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
