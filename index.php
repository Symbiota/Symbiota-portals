<?php
include_once("config/symbini.php");
header("Content-Type: text/html; charset=".$CHARSET);
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
	<script src="js/jquery.slides.js"></script>
	<meta name='keywords' content='' />
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?> 
        <!-- This is inner text! -->
        <div id="innertext" style="height:700px;">
                <div style="float:right;">
			<div id="quicksearchdiv" style="clear:both">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
				</form>
           		</div>
			<?php
			$oodID = 1; 
			$ootdGameChecklist = "3512";
			$ootdGameTitle = "Plant of the Day "; 
			$ootdGameType = "plant"; 
			//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
			include_once($SERVER_ROOT.'/classes/GamesManager.php');
			$gameManager = new GamesManager();
			$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
			?>
			<div style="clear:both;margin:15px;width:400px;text-align:center;">
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
		</div>
		<h1>Welcome to the Consortium of Midwest Herbaria</h1>
		<div style="margin:10px 15px;margin-top:30px;font-size:120%">
            		While focused around the Great Lakes drainage basin, the region includes the six states 
			that border the western Great Lakes: Illinois, Indiana, Michigan, Minnesota, Ohio, and Wisconsin. 
			132 herbaria are listed in 
<a href="http://sciweb.nybg.org/science2/IndexHerbariorum.asp" target="_blank">Index Herbariorum (Thiers, B. [continuously updated])</a> from this region; 
			we hope to eventually make data available from a majority of those collections.
            	</div>
		<div style="margin: 10px 15px;font-size:120%;">
            		The <a href="http://www.epa.gov/greatlakes/basicinfo.html" target="_blank">Great Lakes basin includes 84% of North American surface fresh water</a>
			and includes a mixture of habitat types amidst a landscape that has been highly modified by agricultural 
			and industrial uses and is home to 16% of the US population (US Census Bureau, 2014 estimates). Areas 
			to the south and west of the lakes include lands which form portions of the Mississippi and Ohio River basins; 
			much of this land escaped major glaciation.  Plants and communities in the region are diverse, ranging from boreal 
			forest to southern hardwoods, prairies, bogs and fens.
            	</div>
		<div style="margin:10px 15px;font-size:120%">
            		This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Portal Network</a>.
			Please send questions or comments to <a href="mailto:help@symbiota.org?subject=Midwest Portal Feedback">Support Hub Help Desk (help@symbiota.org)</a>.
            	</div>
        </div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 
</body>
</html>
