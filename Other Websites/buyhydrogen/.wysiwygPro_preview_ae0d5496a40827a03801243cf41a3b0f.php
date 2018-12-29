<?php
if ($_GET['randomId'] != "kKmVZmSUJPWxQIRCZVjNVLtQeJ5K52drAF9SnQBNZZco9nSWnj8W21vNBXhBm0Hh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
