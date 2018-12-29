<?php
if ($_GET['randomId'] != "ODBHERCmyT7mrI3Ra3qR5gUE11XWNp3qokllFQneXbM5cXBRIKj0b5rlTRe0f0wP") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
