<!DOCTYPE html>
<html lang="en">
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92179619-1', 'auto');
  ga('send', 'pageview');

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>World Developers</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/favicon.png">
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
						<li><a href="articles.php?topic=economics">Economics</a></li>
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
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">World Developers</h2>
                                    <a href="article.php?a=8"><p class="boxed animation animated-item-2"><h3 class="boxed animation animated-item-1">The Effects of Industrialization on the Developing World</h3></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">What are the effects of industrialization in the developing world?</h2>
                                    <a href="article.php?a=8"><p class="boxed animation animated-item-2"><h3 class="boxed animation animated-item-1"><br><b>SEE HERE</b></h3></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
		<a color="white" href="imagesfrom.html">Image Sources</a>
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
					
						<h3><a href="articles.php">CONTENT</a></h3>
                   
						<div class="btn-group">
							<a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
							<a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
						</div>
						<p class="gap"></p>
					<br><br><br><br><br></div>
					<div class="col-md-9">
						<div id="scroller" class="carousel slide">
							<div class="carousel-inner">
								<div class="item active">
									<div class="row">
<?php
$servername = "fdb18.freehostingeu.com";
$username = "2600165_njaohnt";
$password = "-----------";
$dbname = "2600165_njaohnt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!$resu=$conn->query("SELECT A_I,title,image FROM articles ORDER BY A_I DESC LIMIT 9"))
{echo $conn->error;}
$ii=0;
while ($row = $resu->fetch_assoc()) {
if ($ii %3 ==0 && $ii!=0)
{echo "<div class='item'><div class='row'>";
}
$ii++;
$ai=$row['A_I'];
$title=$row['title'];
$image=$row['image'];
echo '<div class="col-xs-4"><div class="portfolio-item"><div class="item-inner"><a href="article.php?a='.$ai.'"><h5>'.$title.'</h5><img src="'.$image.'"><div class="overlay"></div></a></div></div></div>';
if ($ii %3 ==0)
{
echo "</div></div>";
}
}
if ($ii %3 !=0)
{
echo "</div></div>";
}
?>                         

                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->
        
  

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>How do countries develop? Why is there such a big difference between the rich countries and poor countries? What are the effects of investments in various things on an economy? How does spending, inflation, interest rate, and government policy affect the economy?</p>
                    <p>These are some of the questions that World Developers answers, forming opinions based on nothing but the relevant facts from credible scientific, and statistical studies -- not the media -- with the goal of coming up with the answer to a more important question: What can the individual do, to have the best effect on the world’s quality of life?</p>
					<p>World Developers hopes to find a way that ordinary people can use their time and money to improve the world in the most productive way possible.</p>
                </div><!--/.col-md-3-->

                
                
                <div class="col-md-3 col-sm-6">
                    
                    <h4>Newsletter</h4>
                    
                        <div class="input-group">
                            <form method="get" action="sendemail.php"><input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn"> <input type="hidden" name="q" value="news">
                                <br><input class="btn btn-danger" type="submit" value="Recieve Email Updates"></form>
                            </span>
                        </div>
                    
                </div> <!--/.col-md-3-->

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
    <script src="js/main.js"></script>
</body>
</html>