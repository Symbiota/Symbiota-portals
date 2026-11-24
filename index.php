<?php
include_once('config/symbini.php');
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load('templates/index');

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
		<h1 class="page-heading screen-reader-only"><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></h1>
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
			<div style="margin:5rem 0rem">
				<!--<h1>Welcome</h1>-->
				<p>
					Welcome to CryptoNITE2 (Cryptobenthic Fish Natural History, Identification, Taxonomy, Ecology and Evolution) a new home for research on cryptobenthic fish biodiversity. CryptoNITE2 brings together specimens, images, barcodes, and checklist data for cryptobenthic coral reef fishes. It allows us to search collections, identify species, map records, and explore checklists from contributors worldwide. The project is funded by the National Science Foundation.
				</p>
					<figure style="float:right;margin:0">
    					<img src="images/layout/cryptocollage.jpg" style="width:500px;margin:0px 20px 5px 20px"/>
    					<figcaption style="font-size:0.5rem;text-align:center">PC: Kyra Jean Cipolla</figcaption>
					</figure>
				<p>
					Fishes account for half of all vertebrates, but our understanding of fish biodiversity is skewed towards large, mobile species. Small-bodied, bottom-dwelling ('cryptobenthic') coral reef fishes are an overlooked and undersampled functional group that accounts for most marine fish species described since the turn of the century. In fact, hundreds of species of cryptobenthics are likely to be discovered over the next ten years if we simply continue on our current trajectory based on traditional taxonomic efforts by an ever-diminishing workforce of venerable ichthyologists. The proposed project aims to drastically alter this trajectory. 
				</p>
				<p>
					Specifically, by performing the first comprehensive standardized sampling of cryptobenthic fishes across four locations in the Indo-Pacific that promise particularly rich rewards (Philippines, Solomon Islands, Guam, and the Marianas Islands), we seek to describe scores of new species, resolve species boundaries, phylogenetic relationships, and speciation patterns in a particularly diverse 'flagship' cryptobenthic genus (dwarfgobies in <i>Eviota</i>), and lay the foundation for a deeper understanding of the biogeography, hidden biodiversity, and vulnerability of cryptobenthic fishes to global change. We tightly integrate traditional taxonomic approaches with innovative genomic techniques for species delimitation, while couching our work in detailed field-based assessments of species' ecologies.” 
				</p>
			</div>
			<?php
		}
		?>
	</main>
	<?php if(!empty($GLOBALS['DONATE_LINK']) && file_exists($SERVER_ROOT . '/includes/donationButton.php')): ?>
		<?php include($SERVER_ROOT . '/includes/donationButton.php') ?>
	<?php endif ?>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
