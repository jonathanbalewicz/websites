<?php
if ($_GET['randomId'] != "bBPnrQvO3tGf5BEw499XgtnE3iCJmtbWL8ZkACQZ7iqE4untXPVQ8jYzKd2hWa0G") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
