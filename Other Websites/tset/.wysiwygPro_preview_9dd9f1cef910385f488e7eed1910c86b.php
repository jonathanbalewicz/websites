<?php
if ($_GET['randomId'] != "BqkBt0B4Yne1yduO8JlptqFPjNsHaX2Ikqccj99lCvyw63wALO34EMCpGC9wVSVk") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
