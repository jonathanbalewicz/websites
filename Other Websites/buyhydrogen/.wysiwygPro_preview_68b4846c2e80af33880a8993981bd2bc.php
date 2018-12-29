<?php
if ($_GET['randomId'] != "xIPGG0mQ0Y1gJOH3u7a6wll6VDUxUuB692kiGvA0yu2SV9Fd0tBR9VaQXQLHM360") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
