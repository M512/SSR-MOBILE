<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Solar Speed Rack | Home</title>
	<link rel="stylesheet"  href="stylesheet.css">
	<link rel="shortcut icon" href="favicon.ico">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/index.js"></script>
	<script src="js/jquery.mobile-1.3.1.min.js"></script>
	<script src="js/site.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css"></head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="false">

    <div data-role="header" data-position="fixed" class="jqm-header">
        <h1 class="jqm-logo"><a href="index.html"><img src="http://solarspeedrack.com/images/logo.png" alt="Logo"></a></h1>
		<a href="#" class="jqm-navmenu-link" data-icon="bars" data-iconpos="notext">Navigation</a>
	</div><!-- /header -->

    <div data-role="content" class="jqm-content">

    	<h1>Solar SpeedRack <strong>Press</strong></h2>
<?PHP
error_reporting (E_ALL ^ E_NOTICE);

if($_GET['go'] == "" or $_GET['go'] == "news"){
   include("../solarspeedrack.com/news/show_news.php");
}
?>
    </div><!-- /content -->
    

   <div data-role="panel" class="jqm-nav-panel jqm-navmenu-panel" data-position="left" data-display="reveal" data-theme="c">
        <ul data-role="listview" data-theme="d" data-divider-theme="d" data-icon="false" data-global-nav="" class="jqm-list">
           <li data-role="list-divider">Navigation</li>
			<li><a href="index">Home</a></li>
            <li><a href="speedlatch">Residential</a></li>
            <li><a href="speedbow">Commerical</a></li>
            <li><a href="speedmount">Utility</a></li>
			<li><a href="speedclips">Accessories</a></li>
			<li><a href="contact">Contact</a></li>
			</ul>
	</div><!-- /panel -->


</div><!-- /page -->

</body>
</html>
