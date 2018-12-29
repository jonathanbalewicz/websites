<?php
if ($_GET['randomId'] != "9tQhC9CSrIaN0H_9vqAsVyqQf3nX1sVZcshJQgzoYNaVbx7qRITKCB074ksue0BG") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
