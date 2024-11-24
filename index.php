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
</head>
<body>
	<?php
	include($SERVER_ROOT."/includes/header.php");
	?> 
        <!-- This is inner text! -->
		<div class="navpath"></div>
        <main  id="innertext">
            <div style="float:right;width:380px;">
		<div id="quicksearchdiv">
			<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
			<form name="quicksearch" id="quicksearch" action="<?= $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
				<div id="quicksearchtext" ><?php echo $LANG['QSEARCH_SEARCH']; ?></div>
				<input id="taxa" type="text" name="taxon" />
				<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?= $LANG['QSEARCH_SEARCH_BUTTON']; ?></button>
			</form>
		</div>
		<?php
		$oodID = 1; 
		$ootdGameChecklist = 100;
		$ootdGameTitle = "Plant of the Day "; 
		$ootdGameType = "plant"; 
		//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

		include_once($SERVER_ROOT.'/classes/GamesManager.php');
		$gameManager = new GamesManager();
		$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
		?>
		<div style="float:right;margin-top:30px;margin-right:10px;margin-bottom:15px;width:350px;text-align:center;">
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
			<h1>Welcome to SEINet</h1>
			<p>
            	The SEINet data portal was created
				to serve as a gateway to distributed data resources of interest to the environmental
				research community within Arizona and New Mexico. Through a common web interface,
				we offer tools to locate, access and work with a variety of data.
				SEINet is more than just a web site - it is a suite of data access technologies
				and a distributed network of collections, museums and agencies that provide
				environmental information.
			</p>
			<p>
				Join SEINet as a regular visitor and please send your feedback to 
				<a class="bodylink" href="mailto:help@symbiota.org?subject=SEINet Feedback">Support Hub HelpDesk (help@symbiota.org)</a>. 
				Visit the <a href="includes/usagepolicy.php">Data Usage Policy</a> 
				page for information on how to cite data obtained from this web resource.
			</p>
			<p>
 	           	Visit some of the other regional data portals that are fellow members of the SEINet Portal Network:
				<ul>
                                        <li><a href="https://midwestherbaria.org" target="_blank">Consortium of Midwest Herbaria</a></li>
					<li><a href="https://www.soroherbaria.org/portal/" target="_blank">Consortium of Southern Rocky Mountain Herbaria</a></li>
					<li><a href="https://intermountainbiota.org" targert="_blank">Intermountain Regional Herbarium Network</a></li>
					<li><a href="https://madreandiscovery.org" target="_blank">Madrean Discovery Expeditions (MDE)</a></li>
					<li><a href="https://midatlanticherbaria.org" target="_blank">Mid-Atlantic Herbaria Consortium</a></li>
					<li><a href="https://nansh.org" target="_blank">North American Network of Small Herbaria</a></li>
					<li><a href="https://ngpherbaria.org" target="_blank">North Great Plains Herbaria</a></li>
					<li><a href="https://herbanwmex.net" target="_blank">Red de Herbarios Mexicanos</a></li>
					<li><a href="https://sernecportal.org" target="_blank">SERNEC (Southeast USA)</a></li>
					<li><a href="https://portal.torcherbaria.org" target="_blank">Texas Oklahoma Regional Consortium of Herbaria (TORCH)</a></li>
				</ul>
			</p>
		</main>

	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
