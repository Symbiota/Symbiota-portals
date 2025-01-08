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
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos</h1>
				<p>Este portal de datos se ha establecido para promover la colaboración... Reemplazar con texto introductorio en inglés</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue</h1>
				<p>Ce portail de données a été créé pour promouvoir la collaboration... Remplacer par le texte d'introduction en anglais</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome to the DigiHerb portal</h1>
				<div style="float:right">
					<img src="images/layout/DigiHerb herbarium image.jpg" style="width:200px;margin:0px 60px" alt="Herbarium specimen">
				</div>
				<p>
				The DigiHerb portal, developed for the Consortium of Northwest Europe Herbaria (CoNWEH), 
				provides access to herbarium specimen data from member institutions, with a general focus on specimens 
				collected in the region. CoNWEH originated from the <a href="https://digiherb.nweurope.eu/" target="_blank">
				DigiHerb</a> project, an EU co-funded collaboration between the National Herbarium of 
				Ireland (DBN), Staatliches Museum für Naturkunde Karlsruhe (KR), and Ghent University (GENT). 
				The project aims to empower smaller regional herbaria in Northwest Europe to digitise, manage, 
				and share their collections efficiently, ensuring their long-term preservation and accessibility.
				</p>
				<p>
				The flora of the Northwest Europe represents a significant portion of Europe's overall plant diversity, 
				includes around 20 to 30 % of the continent's vascular plant species, underscoring its crucial role in 
				biodiversity. It provides diverse habitat like temperate forest, wetlands, and grasslands that 
				support native species.
				</p>
				<p>
				The DigiHerb project was co-funded by Interreg North-West Europe.
				</p>
			</div>
			<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
