<?php
if ($_GET['randomId'] != "ocRPeBtbXHzKX6bTT1LGKnbZVJDngIuXtjzunPtUkr8bzgeTfZK_jZoC0fEQT3Gt") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
