<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></title>
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
		<h1 class="page-heading"><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></h1>
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
				<h1>Welcome to the Kansas Biodiversity Data Portal</h1>
				<p>
					Kansas is home to more 20,000 species of plants, fungi, animals, and other groups. The biodiversity of the state is documented in collections housed at universities, museums, field stations, gardens, and other institutions whose members preserve and curate the specimens. The data are then leveraged by researchers to answer fundamental and applied questions about the biodiversity of Kansas.
				</p>
				<br>
				<p>				
					This <a href="https://symbiota.org/" target="_blank">Symbiota</a> portal, initiated in 2025, is designed to promote a broad community of Kansas-focused biodiversity collections of specimens and observations to manage and share their data. The Kansas Biodiversity Data Portal community is open to and welcomes all collections and individuals who wish to publish, manage, and analyze Kansas-based biodiversity occurrence data - especially in the form of digitized specimens.
				</p>
				<br>
				<p>
					The portal is managed by the Biodiversity Institute & Natural History Museum, University of Kansas. For questions, including requests to join the portal as a new collection or member, please email <a href= "mailto:help@symbiota.org">help@symbiota.org</a>. 
					
				</p>
				<p>
					<span style="font-size: 0.75rem;">Images in the portal's banner include the following observations: <a href="https://www.gbif.org/occurrence/3067918692"><em>Helianthus annuus</em> L. (Ali Campbell, CC-BY)</a>, <a href="https://www.gbif.org/occurrence/3415718450"><em>Sturnella neglecta</em> Audubon, 1844 (Ves, CC-BY-NC)</a>, and <a href="https://www.gbif.org/occurrence/5168185582"><em>Bombus pensylvanicus</em> (De Geer, 1773) (Ryan Philbrick, CC-BY-NC)</a>.
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
