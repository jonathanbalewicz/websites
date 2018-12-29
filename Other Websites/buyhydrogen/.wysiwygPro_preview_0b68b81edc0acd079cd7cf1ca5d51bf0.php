<?php
if ($_GET['randomId'] != "HkKMmaYTdEAdnnHpaD4IN9Q5aF8q6t3d_tt3zeP7bsbvSkiY21Uv3tRRZkZK2fMh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
