<?php
include_once("config/symbini.php");
header("Content-Type: text/html; charset=".$CHARSET);
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<html>
<head>
    <title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
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
        <div  id="innertext">
            <h1>Welcome to the Great Plains Regional Herbarium Network</h1>
            <div style="margin:20px;">
			The Great Plains Regional Herbarium Network brings together information from herbaria in the Canadian provinces of Alberta, Manitoba, and Saskatchewan and the U.S. states of Kansas, Iowa,
			Minnesota, Missouri, Nebraska, North Dakota, and South Dakota. It offers multiple resources for learning more about the plants of the region whether as a student, 
			researcher, or member of the public. As part of the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Herbarium Network</a>, specimens from herbaria 
			outside of this region can also be found in this portal.
            </div>
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
            <div style="margin:20px;">
			The region includes most of the land from east of the Rocky Mountains to the western edge of the eastern forests.  The climate is continental with warm 
			summers and cold winters.  Precipitation decreases from east to west, and mostly occurs during the growing season.  Prolonged periods with reduced 
			precipitation are not unusual.  The vegetation generally ranges from short grass prairies in the west to mixed grass and tall grass prairies as one moves eastward. 
			 Forest species from the east and west meet in the valley of the Niobrara River in Nebraska and the Black Hills of South Dakota.  
            </div>
            <div style="margin:20px;">
			Much of the land area in the eastern portion of the region has been cultivated.  Large areas of previously uncultivated areas in the western portion are now facing 
			disturbance by mineral or fossil fuel extraction and conversion of grassland to cropland.  
            </div>
            <div style="margin:20px;">
			Visit regularly to learn about your favorite plant or favorite part of the Great Plains. 
			This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Herbarium Network</a>.
			Send feedback to 
			<a class="bodylink" href="mailto:mark.gabel@bhsu.edu?subject=Feedback">mark.gabel&lt;at&gt;bhsu.edu</a> or 
			<a class="bodylink" href="mailto:mary.barkworth@usu.edu?subject=Feedback">mary.barkworth&lt;at&gt;usu.edu</a>
            </div>
        </div>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
