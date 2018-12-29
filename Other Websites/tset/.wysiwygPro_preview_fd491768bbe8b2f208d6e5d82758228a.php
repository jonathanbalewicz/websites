<?php
if ($_GET['randomId'] != "S1SIUM5np9BsYB3lf93fMORZ5W9yDnqmKzET0DwX9wwR3N57sDRB_N0e3P7RgLs6") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
