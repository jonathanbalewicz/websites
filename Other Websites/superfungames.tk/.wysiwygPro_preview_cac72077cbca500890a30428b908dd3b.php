<?php
if ($_GET['randomId'] != "cDWrbQjgQofTqmi9tpsv0pbhTgtPDRSAgvQmrbGtQJeCoZDA0Zya7f6CKQZ1jXI6") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
