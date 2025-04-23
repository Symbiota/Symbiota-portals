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
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="<?PHP echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?> 
	<!-- This is inner text! -->
	<div class="navpath"></div>
	<main  id="innertext">
		<div style="float:right;">
			<div id="quicksearchdiv">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?= $LANG['QSEARCH_SEARCH'] ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?= $LANG['QSEARCH_SEARCH_BUTTON']; ?></button>
				</form>
			</div>
			<div style="margin-botom:10px">
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
				$interval = 7000;

				//Enter checklist id, if you wish for images to be pulled from a checklist,
				//leave as 0 if you do not wish for images to come from a checklist
				//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				$clId = 4357;

				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = "field";

				//Enter number of days of most recent images that should be included 
				$numDays = 30;

				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

				ini_set('max_execution_time', 120);
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideshow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval,$interval);
				?>
			</div>
		</div>
            <h1 style="">Welcome to TORCH Data Portal</h1>
 		<p>
			<p>
				The Texas Oklahoma Regional Consortium of Herbaria (TORCH) was developed to advocate for and to organize approximately 4 million plant specimens 
				across more than 50 herbaria in the two-state region. Learn more about TORCH and its members at 
				<a style="text-decoration: underline;" href="http://www.torcherbaria.org/" target="_blank">torcherbaria.org</a>.
			</p>
			<p>
				The TORCH data portal provides access to specimen data and associated images from our herbaria to facilitate botanical research for 
				the purpose of conservation, management, and education. This is an open access portal powered by Symbiota 
				(<a style="text-decoration: underline;" href="http://www.symbiota.org/" target="_blank">symbiota.org</a>). Our data records are aggregated by 
				iDigBio (<a style="text-decoration: underline;" href="http://www.idigbio.org/" target="_blank">idigbio.org</a>; the National Resource for Advancing 
				Digitization of Biodiversity Collections, funded by the National Science Foundation). New records are made available as specimens are 
				digitized (imaged, databased, and georeferenced) by participating herbaria. If you are interested in assisting with digitization efforts, 
				please contact the appropriate curator or collections manager.
			</p>
			<p>
				This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Network</a>, which contains 24 million records from over 450 collections. 
				Collections are organized into regional consortia that are accessed through different websites but share a central database. To learn more 
				about the features and capabilities of the Symbiota software used by this portal, visit the 
				<a style="text-decoration: underline;" href="http://symbiota.org/docs/" target="_blank">Symbiota Help Pages</a>.
			</p>
		</p>
	</main>

	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 
</body>
</html>
