<?php
if ($_GET['randomId'] != "e8Mr8F1k8RuQ0NJvA_y8C4SvbQQ1QjYZqTNUGoZigISzDPcZHwfjTYq0iiA9vM4f") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
