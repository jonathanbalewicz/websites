<?php
if ($_GET['randomId'] != "wWecyWTtKyzQQLTp5huZ7h9NTguBbVpPAZlSJFIhngX_Hc7QYVFhxraF7Yjkw1rR") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
