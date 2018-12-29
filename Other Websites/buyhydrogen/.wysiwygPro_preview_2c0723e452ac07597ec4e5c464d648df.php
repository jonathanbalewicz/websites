<?php
if ($_GET['randomId'] != "HzKPKvDMe6Q_ETSHfas6LZuKTUZEPJBWhMr_YS6BuylOi5TtMRZnzFq1xooJv_Cz") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
