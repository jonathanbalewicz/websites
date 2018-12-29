<?php 

$servername = "fdb18.freehostingeu.com";
$username = "2600165_njaohnt";
$password = "-----------";
$dbname = "2600165_njaohnt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (!$resu=$conn->query("SELECT * FROM articles WHERE A_I=".$_GET['a']))
{echo $conn->error;}
while ($row = $resu->fetch_assoc()) {
$title=$row['title'];
$image=$row['image'];
$author=$row['author'];
$text=$row['text'];
$date=$row['date'];
$related=$row['related'];
$topic=$row['topic'];
$views=$row['PageCount']+1;}

$conn->query("UPDATE articles SET PageCount=PageCount+1 WHERE A_I=".$_GET['a'])


?><!DOCTYPE html>
<html lang="en">
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92179619-1', 'auto');
  var dimensionValue = <?php echo $_GET['a']; ?>;
ga('set', 'dimension1', dimensionValue);
  ga('send', 'pageview');

</script>
    <meta charset="utf-8">

<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
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
<!--
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="articles.php">Articles</a></li>
						<li>
						<?php echo '<a href="articles.php?topic="'.$topic.'>'.$topic.'</a>';
						?></li>
                        <li class="active"><?php echo $title; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
-->
    <section id="blog" class="container">
        <div class="row">
			<aside class="col-sm-4 col-sm-push-8"> 
                    <div class="well">
                    <h4>Sign Up For Our Newsletter</h4>
                    
                        <div class="input-group">
                            <form method="get" action="sendemail.php"><input type="email" name="email" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn"> <input type="hidden" name="q" value="news">
                                <br><input class="btn btn-danger" type="submit" value="Recieve Email Updates"></form>
                            </span>
                        </div>
						</div>
                    </aside>
                 <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div class="blog-item"><h3><br>&nbsp;<?php echo $title; ?></h3><br><div style="background-color:black"><small><a href="#cont">&nbsp;Read Below</a></small><br></div><hr>
                        <?php echo '<img class="img-responsive img-blog" src="'.$image.'" width="100%">'; ?>
                        <div id="cont" class="blog-content">
                            <h3><?php echo $title; ?></h3>
                            <div class="entry-meta">
                                <span><i class="icon-user"></i> <?php echo $author; ?></span>
                                <span><i class="icon-folder-close"></i> <?php echo '<a href="articles.php?topic='.$topic.'">'.$topic.'</a>';
						?></span>
                                <span><i class="icon-calendar"></i> 
								<?php 
								$time_object = new DateTime($date, new DateTimeZone('UTC'));
								$time_object->setTimezone(new DateTimeZone('America/Winnipeg'));
								echo $time_object->format('Y-m-d H:i:s');
								
								?> CT
								</span>
                                <span><i class="icon-comment"></i> <a href="#comments"> Comments</a></span>
                            </div><br>              
<ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="images/flat_web_icon_set/color/Facebook.png"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="images/flat_web_icon_set/color/Twitter.png"></a></li>
  <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="images/flat_web_icon_set/color/Google+.png"></a></li>
  <li><a href="http://www.tumblr.com/share?v=3&u=&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Post to Tumblr" src="images/flat_web_icon_set/color/Tumblr.png"></a></li>
  <li><a href="http://pinterest.com/pin/create/button/?url=&description=" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' +  encodeURIComponent(document.title)); return false;"><img alt="Pin it" src="images/flat_web_icon_set/color/Pinterest.png"></a></li>
  <li><a href="https://getpocket.com/save?url=&title=" target="_blank" title="Add to Pocket" onclick="window.open('https://getpocket.com/save?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Add to Pocket" src="images/flat_web_icon_set/color/Pocket.png"></a></li>
  <li><a href="http://www.reddit.com/submit?url=&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Submit to Reddit" src="images/flat_web_icon_set/color/Reddit.png"></a></li>
  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Share on LinkedIn" src="images/flat_web_icon_set/color/LinkedIn.png"></a></li>
  <li><a href="http://wordpress.com/press-this.php?u=&t=&s=" target="_blank" title="Publish on WordPress" onclick="window.open('http://wordpress.com/press-this.php?u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Publish on WordPress" src="images/flat_web_icon_set/color/Wordpress.png"></a></li>
  <li><a href="https://pinboard.in/popup_login/?url=&title=&description=" target="_blank" title="Save to Pinboard" onclick="window.open('https://pinboard.in/popup_login/?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Save to Pinboard" src="images/flat_web_icon_set/color/Pinboard.png"></a></li>
  <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img alt="Send email" src="images/flat_web_icon_set/color/Email.png"></a></li>
</ul>
          <br>
                            <div style="font-size:20px"><?php echo htmlspecialchars_decode($text); ?></div>

                            <hr>

                            <?php echo $related; ?>

                            <br><small><small>This content may be reused without permission, as long as World Developers is cited.</small></small><br>

                            <div id="comments">              
<ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" src="images/flat_web_icon_set/color/Facebook.png"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;"><img alt="Tweet" src="images/flat_web_icon_set/color/Twitter.png"></a></li>
  <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Google+" src="images/flat_web_icon_set/color/Google+.png"></a></li>
  <li><a href="http://www.tumblr.com/share?v=3&u=&t=&s=" target="_blank" title="Post to Tumblr" onclick="window.open('http://www.tumblr.com/share?v=3&u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Post to Tumblr" src="images/flat_web_icon_set/color/Tumblr.png"></a></li>
  <li><a href="http://pinterest.com/pin/create/button/?url=&description=" target="_blank" title="Pin it" onclick="window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.URL) + '&description=' +  encodeURIComponent(document.title)); return false;"><img alt="Pin it" src="images/flat_web_icon_set/color/Pinterest.png"></a></li>
  <li><a href="https://getpocket.com/save?url=&title=" target="_blank" title="Add to Pocket" onclick="window.open('https://getpocket.com/save?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Add to Pocket" src="images/flat_web_icon_set/color/Pocket.png"></a></li>
  <li><a href="http://www.reddit.com/submit?url=&title=" target="_blank" title="Submit to Reddit" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Submit to Reddit" src="images/flat_web_icon_set/color/Reddit.png"></a></li>
  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Share on LinkedIn" src="images/flat_web_icon_set/color/LinkedIn.png"></a></li>
  <li><a href="http://wordpress.com/press-this.php?u=&t=&s=" target="_blank" title="Publish on WordPress" onclick="window.open('http://wordpress.com/press-this.php?u=' + encodeURIComponent(document.URL) + '&t=' +  encodeURIComponent(document.title)); return false;"><img alt="Publish on WordPress" src="images/flat_web_icon_set/color/Wordpress.png"></a></li>
  <li><a href="https://pinboard.in/popup_login/?url=&title=&description=" target="_blank" title="Save to Pinboard" onclick="window.open('https://pinboard.in/popup_login/?url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><img alt="Save to Pinboard" src="images/flat_web_icon_set/color/Pinboard.png"></a></li>
  <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><img alt="Send email" src="images/flat_web_icon_set/color/Email.png"></a></li>
</ul>
          <br>
                                <h3>Comments</h3>
								<div id="disqus_thread"></div>
<script>
var disqus_config = function () {
this.page.identifier = <?php echo $_GET['a']; ?>;
};

(function() {
var d = document, s = d.createElement('script');
s.src = '//world-developers.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script><br>
<?php echo $views; ?>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
                            </div><!--/#comments-->
                        </div>
                    </div><!--/.blog-item-->
                </div>
            </div><!--/.col-md-8-->
				<br>
          
        </div><!--/.row-->
    </section><!--/#blog-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>How do countries develop? Why is there such a big difference between the rich countries and poor countries? What are the effects of investments in various things on an economy? How does spending, inflation, interest rate, and government policy affect the economy?</p>
                    <p>These are some of the questions that World Developers answers, forming opinions based on nothing but the relevant facts from credible scientific, and statistical studies -- not the media -- with the goal of coming up with the answer to a more important question: What can the individual do, to have the best effect on the world’s quality of life?</p>
                </div><!--/.col-md-3-->

                
                <div class="col-md-3 col-sm-6">
                    <h4>Latest Blog</h4>
                    <div>
<?php 
if (!$resu=$conn->query("SELECT A_I,title,image FROM articles ORDER BY A_I DESC LIMIT 3"))
{echo $conn->error;}
while ($row = $resu->fetch_assoc()) {
$ai=$row['A_I'];
$title=$row['title'];
$image=$row['image'];
echo '<div class="media"><a href="article.php?a='.$ai.'"><div class="pull-left"><img height="75px" src="'.$image.'"></a></div><div class="media-body"><span class="media-heading"><a href="article.php?a='.$ai.'"> '.$title.'</a></span></div></div>';
}
?>
                       
                    </div>  
                </div><!--/.col-md-3-->

                
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