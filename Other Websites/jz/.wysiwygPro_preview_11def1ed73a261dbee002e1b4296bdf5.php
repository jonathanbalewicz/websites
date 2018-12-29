<?php
if ($_GET['randomId'] != "eHOZENgmr9JdSmo99Eopkx_N0hWcFRE3ww75AbF4OaOtgHVYQVPWvJEu0KA8iGNx") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
