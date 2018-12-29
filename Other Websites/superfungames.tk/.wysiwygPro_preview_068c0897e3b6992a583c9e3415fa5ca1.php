<?php
if ($_GET['randomId'] != "Nm8pKKgjvVkl2xpWKJpnXmZyFcui7IhjtXX5kXmad0B4etrH2rwXPhDKr6wiLcyD") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
