<?php
session_start();
include_once("includes/db_connection.php");
include_once("includes/php_functions.php");

// Set language
if (isset($_GET["lang"])) {
	$_SESSION['lang'] = $_GET["lang"];
}
elseif (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = "dk";
}
global $lang;
$lang = strtoupper($_SESSION['lang']);

// Set site
if (isset($_GET["site"]))
	$site = $_GET["site"];
else
	$site = "home";

?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo getLabel("title"); ?></title>
	
	<link rel="stylesheet" href="css/main.css?v=1" />
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- jQuery / jQuery UI -->
	<link href="includes/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	<script src="includes/jquery-ui/js/jquery-1.10.1.min.js"></script>
	<script src="includes/jquery-ui/js/jquery-ui-1.10.3.custom.min.js"></script>
	
	<!-- SoundManager 2 -->
	<script src="includes/soundmanager/script/soundmanager2.js"></script>
	<link rel="stylesheet" type="text/css" href="includes/soundmanager/360-player/360player.css" />
	<!--[if IE]><script type="text/javascript" src="includes/soundmanager/360-player/script/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="includes/soundmanager/360-player/script/berniecode-animator.js"></script>
	<script type="text/javascript" src="includes/360-player/script/360player.js"></script>
		
</head>
<body>
	
	<div class="wrapper">
		
		<!-- Header -->
		<?php include("includes/header.php"); ?>
		
		<section class="content">
			<!-- Content -->
			<?php include("sites/" . $site . ".php"); ?>
		</section><!-- /.content -->
		
		<div class="push_footer"></div>
	</div><!-- /.wrapper -->
		
	<!-- Footer -->
	<?php include("includes/footer.php"); ?>
	
</body>
</html>
<?php $database->close(); ?>