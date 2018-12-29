<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Articles of World Developers</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img height="90px" src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="articles.php">Recent Content</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Topics<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="articles.php?topic=environment">Environment</a></li>
                            <li><a href="articles.php?topic=overpopulation">Overpopulation</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li> 
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <br><br><br>
    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <?php 
if (!$_GET['topic'])
{
echo '<li><a class="btn btn-default active" href="#" data-filter="*">';
}
else
{
echo '<li><a class="btn btn-default active" href="#" data-filter=".'.strtolower($_GET['topic']).'">'.$_GET['topic'].'</a></li><li><a class="btn btn-default" href="#" data-filter="*">';
}
			?>All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".overpopulation">Overpopulation</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".environment">Environment</a></li>
<li><a class="btn btn-default" href="#" data-filter=".economics">Economics</a></li>
        </ul><!--/#portfolio-filter-->
		<ul class="portfolio-items col-3">
<?php
$servername = "fdb18.freehostingeu.com";
$username = "2600165_njaohnt";
$password = "-------------";
$dbname = "2600165_njaohnt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!$resu=$conn->query("SELECT A_I,title,image,topic FROM articles ORDER BY A_I DESC"))
{echo $conn->error;}
while ($row = $resu->fetch_assoc()) {
$ai=$row['A_I'];
$title=$row['title'];
$image=$row['image'];
$topic=strtolower($row['topic']);
echo '<li class="portfolio-item '.$topic.'"><div class="item-inner"><a href="article.php?a='.$ai.'"><img width="100%" src="'.$image.'"><h5>'.$title.'</h5><div class="overlay"></div></a></div></li>';
}
?>
        
            
        </ul>
    </section><!--/#portfolio-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>How do countries develop? Why is there such a big difference between the rich countries and poor countries? What are the effects of investments in various things on an economy? How does spending, inflation, interest rate, and government policy affect the economy?</p>
                    <p>These are some of the questions that World Developers answers, forming opinions based on nothing but the relevant facts from credible scientific, and statistical studies -- not the media -- with the goal of coming up with the answer to a more important question: What can the individual do, to have the best effect on the world’s quality of life?</p>
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-6">
                    
                    <h4>Newsletter</h4>
                    
                        <div class="input-group">
                            <form method="get" action="sendemail.php"><input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn"> <input type="hidden" name="q" value="news">
                                <br><input class="btn btn-danger" type="submit" value="Recieve Email Updates"></form>
                            </span>
                        </div>
                    
                </div> 

                
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; 2017 World Developers
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="articles.php">Recent Content</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
