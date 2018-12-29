<?php
if ($_GET['randomId'] != "ujgyHHqkHpZwNOEWboS0DzbJXk0SokVTqqgKBIEd5Sv_SkfNxsME8ekmdAMFLgF5") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
