<?php
if ($_GET['randomId'] != "YgrUZ1BK0PAbXCUV_TjvPj48xfWeK6P3HA2QIvyo_NlqqGBMhjv9qd3DgNTibiFs") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
