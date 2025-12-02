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
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
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
	include($SERVER_ROOT."/includes/header.php");
	?>
	<div class="navpath"></div>
	<!-- This is inner text! -->
	<main  id="innertext">
		<h1>North American Network of Small Herbaria</h1>
		<p>
			The North American Network of Small Herbaria is an open access data portal provided by Symbiota and intended to foster digitization of small collections and 
			facilitate collaboration among institutions. The establishment of this portal is the result of collaboration between the <a href="http://symbiota.org/docs/seinet/" target="_blank">SEINet Herbarium Network</a> and iDigBio's Small Herbarium Working Group 
			(<a href="https://www.idigbio.org/wiki/index.php/Small_Herbarium_Interest_Group">https://www.idigbio.org/wiki/index.php/Small_Herbarium_Interest_Group</a>). 
			For help with NANSH data or to join the network, contact the Symbiota Support Hub (<a href="mailto:help@symbiota.org?subject=NANSH Feedback">help@symbiota.org</a>). 
		</p>
		<?php
		//---------------------------GAME SETTINGS---------------------------------------
		$oodID = 1; 
		$ootdGameChecklist = 100;
		$ootdGameTitle = "Plant of the Day "; 
		$ootdGameType = "plant"; 
		//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

		include_once($SERVER_ROOT.'/classes/GamesManager.php');
		$gameManager = new GamesManager();
		$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
		?>
		<div style="float:right;margin-right:10px;width:290px;text-align:center;">
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
			Small herbaria constitute a major source of information for understanding North America&apos;s plant diversity. These collections are typically regional 
			in scope with strong ecological, taxonomic, and geographic biases. They frequently hold specimens that are unduplicated in larger herbaria and 
			usually represent intense samplings of community composition that significantly expand our knowledge of landscape-level biogeography. As a
			result, they are singularly important to the study of regionally and nationally significant natural communities. 
</p>
		<p>
			Until recently, access to the wealth of biodiversity data stored in small herbaria has been hampered by travel requirements, insufficient staff, 
			and long-term loans that render specimens unavailable for extended periods. With the advent of biodiversity collections digitization, small 
			herbaria are now poised to overcome these obstacles by making label data and specimen images readily available online through searchable 
			electronic databases. As more institutions take advantage of open-source, community-supported digitization software, the online presence 
			of small collections will rapidly increase and with it the volume of available biodiversity data. 
		</p>
		<p>
			This site is brought to you in collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Network</a>. When you search this portal, 
			or any of the other SEINet portal partners, you are getting results from our one central database. 
			The SEINet portal network contains 24 million records from over 450 collections.
		</p>
</main>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
