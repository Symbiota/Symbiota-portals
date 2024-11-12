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
</head>
<!--
<head>
	<title>CoTRAM: Cooperative Taxonomic Resource For American Myrtaceae</title>
	<link rel="stylesheet" href="<?= $CLIENT_ROOT ?>/css/main.css" type="text/css" />
	<meta name='keywords' content='Arizona,New Mexico,Sonora,Sonoran,Desert,plants,lichens,natural history collections,flora, fauna, checklists,species lists' />
	<?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
</head>
-->
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?> 
        <!-- This is inner text! -->
        <main id="innertext">
		<h2>Welcome to CoTRAM</h2>
		<div style="float:right"><img src="images/layout/Psidium_cattleyanum.jpg" style="width:350px;margin:0px 30px;"></div>
		<div style="margin:20px;">The Cooperative Taxonomic Resource for American Myrtaceae was created for researchers of American Myrtaceae 
			and others who might want to identify unknowns.  The Myrtaceae, a family with perhaps over 5000 species may be the ninth largest family of flowering 
			plants, but its taxonomy is yet poorly understood, so these can only be tentative estimates.  It has two great centers of diversity: 
			Australia, southern Asia and islands of that general region; and the American tropics.  Perhaps half of all Myrtaceae occur in the Americas. 
			The Atlantic Coastal Forest of Brazil is especially rich, the family sometimes being dominant there.  Myrtaceae are also important in temperate 
			Chile and Argentina, the Andes from Bolivia to Venezuela, the Guayana Highlands, Mesoamerica and the Caribbean.
		</div>
		<div style="margin:20px;">Identification of American Myrtaceae can sometimes be a daunting task as some of the taxonomically important 
			characters are cryptic (embryo structure) and because there is relatively little variation in vegetative characters. 
			For example, it is often impossible for even a specialist to recognize an unknown sterile specimen to genus.
		</div>
<!--		<div style="float:right;width:180px;padding:10px;-moz-border-radius:5px;-webkit-border-radius:5px;margin:0px 5px 10px 10px;border:#990000 solid 1px;">
			Development of CoTRAM, <a href="https://symbiota.org">Symbiota</a>, and several of the specimen databases have been supported by 
			National Science Foundation Grants 
			(<a href="http://nsf.gov/awardsearch/showAward.do?AwardNumber=9983132" target="_blank">DBI 9983132</a>, 
			<a href="http://nsf.gov/awardsearch/showAward.do?AwardNumber=0237418" target="_blank">BRC 0237418</a>, 
			<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0743827" target="_blank">DBI 0743827</a>,
			<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0847966" target="_blank">DBI 0847966</a>)
		</div>	
-->		
		<div style="margin:20px;">
			The objective of this website is to bring together databases of authority-identified specimens and images with software 
			tools that allow one to make geographically restricted checklists and maps.  An interactive key is being populated with character information.  
			Generic and species descriptions will be added in time. The purpose of this website is primarily to support the distribution of herbarium specimen data of Myrtaceae of the Americas, but the database with which it works includes specimens of all vascular plants of that region. 
			Thus, searches can be made of associated plants found with Myrtaceae (see <a href="https://canotia.org/volumes/vol17/2-Nearby.pdf" target="_blank">this tool</a>). Instructions 
			for using Symbiota sites in general can be found at <a href="https://biokic.github.io/symbiota-docs/" target="_blank">Symbiota Docs</a> and for making checklists, 
			<a href="https://canotia.org/volumes/vol17/1-Checklists.pdf" target="_blank">here</a>.
		</div>
		<div style="margin:30px 20px 20px 20px;">
			Join CoTRAM as a regular visitor and please send your feedback to 
			<a class="bodylink" href="mailto:les.landrum@asu.edu?subject=Feedback">Leslie Landrum</a>
		</div>
        </main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 
</body>
</html>
