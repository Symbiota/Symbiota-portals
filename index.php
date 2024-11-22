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
	<script src="<?PHP echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
	<meta name='keywords' content='' />
</head>
<body>
	<?php
	include($SERVER_ROOT."/includes/header.php");
	?> 
        <!-- This is inner text! -->
        <div  id="innertext">
            <h1>Welcome to the SERNEC data portal</h1>
			<?php
			$oodID = 1; 
			$ootdGameChecklist = 3425;
			$ootdGameTitle = "Plant of the Day "; 
			$ootdGameType = "plant"; 
			//---------------------------DO NOT CHANGE BELOW HERE-----------------------------

			include_once($SERVER_ROOT.'/classes/GamesManager.php');
			$gameManager = new GamesManager();
			$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
			?>
			<div style="float:right;margin-bottom:10px;width:290px;text-align:center;">
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
			<div style="padding: 0px 10px;font-size:110%;">
				<a href="http://www.sernec.org" target="_blank">SERNEC</a> (SouthEast Regional Network of Expertise and Collections) is a consortium of
				233 herbaria in 14 states in the southeastern USA. Our aim is to provide herbarium specimen images and metadata from one
				of the most botanically diverse regions of the earth with the goal of facilitating research, management planning and a
				well-informed public. These data span 200 years of botanical information housed in herbaria in the
				Southeast and are vital to studies in biodiversity, evolution, ecology and systematics to name a few. We are also working to link our
				efforts with those of other regional herbarium groups and with the National Resource for Advancing Digitization of
				Biodiversity Collections, <a href="https://www.idigbio.org/" target="_blank">iDigBio</a>. This site is brought to you in
				collaboration with the <a href="http://symbiota.org/seinet/" target="_blank">SEINet Network</a>. Please send questions or
				comments to the <?php echo '<a href="mailto:'.$ADMIN_EMAIL.'">portal manager</a>'; ?>.
			</div>
			<div style="margin-top:10px;padding: 0px 10px;font-size:110%;">
				<a href="https://herbarium.appstate.edu/sernec/volunteer-sernec" target="_blank"><b>Interested in getting more involved?</b></a>
				<br>
				<a href="http://www.sernec.org" target="_blank">SERNEC</a> has many onsite and remote volunteer opportunities. We are continually running
				expeditions on the <a href="https://www.notesfromnature.org/active-expeditions/Herbarium" target="_blank">Notes from Nature</a> platform
				and can always use help with our <a href="https://herbarium.appstate.edu/sernec/volunteer-sernec" target="_blank">georeferencing activities</a>.
				We also encourage you to make use of our <a href="https://herbarium.appstate.edu/sernec/education-outreach" target="_blank">lesson plans and activities</a>.
			</div>
			<div style="margin-top:10px;padding: 0px 10px;font-size:110%;">
				<a href="http://www.sernec.org" target="_blank">SERNEC</a> is currently funded by the
				<a href="https://www.nsf.gov/" target="_blank">National Science Foundation</a> as a
				<a href="https://www.idigbio.org/wiki/index.php/The_Key_to_the_Cabinets:_Building_and_Sustaining_a_Research_Database_for_a_Global_Biodiversity_Hotspot" target="_blank">
				Thematic Collections Network</a> with the goal of digitizing an additional 4 million specimens from the southeast
				United States. As part of this effort we are partnering with <a href="http://www.cyverse.org/" target="_blank">
				CyVerse</a> for image archiving and access.
			</div>
			<div style="margin-top:10px;padding: 0px 10px;font-size:110%">
				Need data? How can we help?  Please contact the <a href="mailto:murrellze@appstate.edu">PI</a> to see if we can
				better accommodate your research needs.
			</div>
			<div style="margin-top:10px;padding: 0px 10px;">
				<a href="collections/index.php"><h2><b>Search Collections</b></h2></a>
			</div>
			<div style="margin-top:10px;padding: 0px 10px;font-size:110%;">
				<a href="includes/usagepolicy.php">General Data Usage Policy</a>
			</div>
		</div>
	<?php
	include($SERVER_ROOT."/includes/footer.php");
	?> 
</body>
</html>
