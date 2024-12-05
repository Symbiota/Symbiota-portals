<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<meta http-equiv="X-Frame-Options" content="deny">
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?= $CSS_BASE_PATH ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?= $CSS_BASE_PATH ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="<?= $CLIENT_ROOT ?>/js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="<?= $CLIENT_ROOT ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
=	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?> 
	<!-- This is inner text! -->
	<div class="navpath"></div>
	<main  id="innertext">
		<div style="float:right;width:410px;margin:0px 25px">
			<div id="quicksearchdiv">
				<!-- ---------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?= $LANG['QSEARCH_SEARCH'] ; ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?= $LANG['QSEARCH_SEARCH_BUTTON'] ; ?></button>
				</form>
			</div>
			<div style="float:right;clear:right;width:400px;">
<?php
//---------------------------SLIDESHOW SETTINGS---------------------------------------
//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
//If only one slideshow will be active, leave set to 1. 
$ssId = 1; 

//Enter number of images to be included in slideshow (minimum 5, maximum 10) 
$numSlides = 10;

//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
$width = 350;

//Enter amount of days between image refreshes of images
$dayInterval = 7;

//Enter amount of time (in milliseconds) between rotation of images
$dayInterval = 7;

//Enter checklist id, if you wish for images to be pulled from a checklist,
//leave as 0 if you do not wish for images to come from a checklist
//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
$clId = 4070;

//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
$imageType = "field";

//Enter number of days of most recent images that should be included 
$numDays = 240;

//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

ini_set('max_execution_time', 120);
include_once($SERVER_ROOT.'/classes/PluginsManager.php');
$pluginManager = new PluginsManager();
echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval);
?>
			</div>
		</div>
		<h1>Welcome to the Mid-Atlantic Herbaria Consortium</h1>
		<p>
			The Mid-Atlantic Herbaria Consortium (MAHC) includes herbaria from New York, New Jersey, Pennsylvania, Delaware, Maryland and D.C. 
			We invite any Mid-Atlantic herbaria to join us online in digitizing the rich resources that are our regional plant collections.
			We offer digitization training, support, imaging equipment loans, and other services to help new Mid-Atlantic herbaria create 
			their own virtual collections in the MAHC portal.
		</p>
		<p>
			We also welcome plant collectors, citizen scientists, amateur botanists, and plant enthusiasts to add to our observation records 
			with their own field data and images, to use the portal as a field data entry system before passing herbarium specimens to Consortium members, or to contribute to MAHC by joining us in our specimen transcription efforts 
			through a <a href="<?php echo $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/central.php">crowd sourcing module</a>. 
			Together, through all of these efforts, we will build a better virtual herbarium for the Mid-Atlantic, thus building a stronger understanding of the Mid-Atlantic flora and how it has changed along with this dynamic region. 
		</p>
		<p>
			MAHC began during the NSF-funded <a href="https://www.idigbio.org/wiki/index.php/The_Mid-Atlantic_Megalopolis" target="_blank" >Mid-Atlantic Megalopolis</a> Project and builds on that critical, early digitization work. 
			Please direct any questions, comments, and requests to <a href="mailto:midatlanticherbaria@gmail.com">midatlanticherbaria@gmail.com</a>.
		</p>
		<p>
			This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Network</a>. 
			When you search this portal, or any of the other SEINet portal partners, you are getting results from our one central database. 
			The SEINet portal network contains 24 million records from over 450 collections.	
		</p>
		</div>
</main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 
</body>
</html>
