<?php
if ($_GET['randomId'] != "F9G7IvPjc2iz3tG2RYzak9FcGLES8D5gExcH8HSdJVjPnUXfc8BnWr8EH5eduZKz") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
