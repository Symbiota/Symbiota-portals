<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
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
	<meta name='keywords' content='' />
</head>
<body>
	<?php
	$displayLeftMenu = "true";
	include($SERVER_ROOT."/includes/header.php");
	?> 
        <!-- This is inner text! -->
		<div class="navpath"></div>
        <main  id="innertext">
            <h1>Welcome to the Great Plains Regional Herbarium Network</h1>
			<?php
			//---------------------------GAME SETTINGS---------------------------------------
			$oodID = 1;
			$ootdGameChecklist = 3427;
			$ootdGameTitle = "Plant of the Day "; 
			$ootdGameType = "plant"; 
			//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

			include_once($SERVER_ROOT.'/classes/GamesManager.php');
			$gameManager = new GamesManager();
			$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
			?>
			<div style="float:right;margin-top:10px;margin-bottom:10px;width:290px;text-align:center;">
				<div style="font-size:130%;font-weight:bold;">
					<?php echo $ootdGameTitle; ?>
				</div>
				<a href="<?php echo $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?php echo $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
					<img src="<?php echo $gameInfo['images'][0]; ?>" style="width:250px;border:0px;" />
				</a><br/>
				<b>What is this <?php echo $ootdGameType; ?>?</b><br/>
				<a href="<?php echo $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?php echo $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
					Click here to test your knowledge
				</a>
			</div>
            <p>
			The Great Plains Regional Herbarium Network brings together information from herbaria in the Canadian provinces of Alberta, Manitoba, and Saskatchewan and the U.S. states of Kansas, Iowa,
			Minnesota, Missouri, Nebraska, North Dakota, and South Dakota. It offers multiple resources for learning more about the plants of the region whether as a student, 
			researcher, or member of the public. As part of the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Herbarium Network</a>, specimens from herbaria 
			outside of this region can also be found in this portal.
			</p>
            <p>
			The region includes most of the land from east of the Rocky Mountains to the western edge of the eastern forests.  The climate is continental with warm 
			summers and cold winters.  Precipitation decreases from east to west, and mostly occurs during the growing season.  Prolonged periods with reduced 
			precipitation are not unusual.  The vegetation generally ranges from short grass prairies in the west to mixed grass and tall grass prairies as one moves eastward. 
			 Forest species from the east and west meet in the valley of the Niobrara River in Nebraska and the Black Hills of South Dakota.  
			</p>
            <p>
			Much of the land area in the eastern portion of the region has been cultivated.  Large areas of previously uncultivated areas in the western portion are now facing 
			disturbance by mineral or fossil fuel extraction and conversion of grassland to cropland.  
			</p>
            <p>
			Visit regularly to learn about your favorite plant or favorite part of the Great Plains. 
			This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Herbarium Network</a>.
			Send feedback to 
			<a class="bodylink" href="mailto:mark.gabel@bhsu.edu?subject=NGPH Feedback">mark.gabel&lt;at&gt;bhsu.edu</a> 
			or to the Symbiota Support Hub at <a class="bodylink" href="mailto:help@symbiota.org?subject=NGPH Feedback">help@symbiota.org</a>.
			</p>
		</main>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
