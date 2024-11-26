<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title>IRHN</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<meta name='keywords' content='Utah,Nevada,plants,flora,checklists,species lists' />
</head>
<body>
	<?php
	$displayLeftMenu = (isset($indexMenu)?$indexMenu:"true");
	include($SERVER_ROOT."/includes/header.php");
	?> 
        <!-- This is inner text! -->
		<div class="navpath"></div>
        <main id="innertext">
            <h1>Welcome to Intermountain Regional Herbarium Network</h1>
			<?php
			//---------------------------GAME SETTINGS---------------------------------------
			$oodID = 1; 
			$ootdGameChecklist = 74;
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
			The Intermountain Region is basically the region between the Sierra Nevada 
			and the Rocky Mountains but the precise interpretation of the phrase varies. 
			Most agree that the hydrologic Great Basin, the area with no external drainage, 
			dominates the region. This basin is divided by north-south trending 
			mountain ranges that are separated by wide valleys. The mountain ranges support 
			woods and forests that are now essentially isolated from each other as well as 
			from the Sierra Nevada and Rocky Mountains by the intervening valleys. The 
			region's biota is determined in large part by its variable and scant 
			precipitation, most of which falls in winter, and its large fluctuations 
			in temperature, both daily and seasonal.
			
			This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Network</a>.
			Please send questions or comments to <a href="mailto:Kristian.Valles@usu.edu">Kristian.Valles@usu.edu</a>. 
			</p>
		</main>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
