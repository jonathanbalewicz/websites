<?php
if ($_GET['randomId'] != "DqQtX2aqCAjJGOddvMW592hpP7VjGoq5WNHeuAJGggdYPA_MAfXwwyXxE8RARXMH") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
