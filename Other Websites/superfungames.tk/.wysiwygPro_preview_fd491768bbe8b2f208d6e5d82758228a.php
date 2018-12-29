<?php
if ($_GET['randomId'] != "hjxcNfMTSE58cWuiyANiZDgDXRf0UlUuWX6dO6QtPdpaJ_E1FYesrVZdQNkhAwQ6") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
