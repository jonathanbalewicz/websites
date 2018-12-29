<?php
if ($_GET['randomId'] != "6b2U9udbbA4OBcl9qmwLSZ1a2dQrHEg2NuvzW9HGbCZed0prw5t3236YzuZh6j0F") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
