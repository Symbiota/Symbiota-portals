<?php
include_once('config/symbini.php');
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load('templates/index');

header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?>SCIBIG <?php echo $LANG['HOME']; ?></title>
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
		<h1 class="page-heading"><?php echo $DEFAULT_TITLE; ?>SCIBIG <?php echo $LANG['HOME']; ?></h1>
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenido al portal Symbiota de SCIBG</h1>
				<p>
					El proyecto SCIBG - <a href="https://www.nsf.gov/awardsearch/show-award/?AWD_ID=2535312">Infraestructura escalable impulsada por la comunidad para apoyar la genómica de la biodiversidad</a> (Scalable Community-Driven Infrastructure to Support Biodiversity Genomics) - diseñará una infraestructura integral, de principio a fin, destinada a generar recursos de genomas de referencia de alta calidad que representen la biodiversidad de especies eucariotas en los Estados Unidos. SCIBG establecerá una plataforma nacional sostenible, impulsada por la comunidad, que servirá de apoyo al <a href="https://www.earthbiogenome.org">Earth BioGenome Project</a>. 
				</p>
				<p>
					El portal Symbiota de SCIBG utiliza la plataforma de software <a href="https://symbiota.org">Symbiota</a> para integrar datos genómicos y muestras de biodiversidad, conforme a los estándares globales y las mejores prácticas en este campo. El portal permitirá el seguimiento de metadatos taxonómicos y de especímenes de referencia (vouchers), desde la priorización de especies y la obtención de muestras hasta la secuenciación, el ensamblaje, la anotación y la publicación de datos de genomas de referencia bajo la gestión de SCIBG. Si tiene alguna pregunta, o desea solicitar su incorporación al portal como nuevo miembro o añadir una colección, por favor escriba a <a href="mailto:help@symbiota.org">help@symbiota.org</a>. 
				</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue sur le portail Symbiota du projet SCIBG</h1>
				<p>
					Le projet SCIBG - Infrastructure évolutive pilotée par la communauté pour soutenir la génomique de la biodiversité (*Scalable Community-Driven Infrastructure to Support Biodiversity Genomics*) - vise à concevoir une infrastructure intégrée et complète, destinée à générer des ressources de génomes de référence de haute qualité représentatives de la biodiversité des espèces eucaryotes aux États-Unis. SCIBG mettra en place une plateforme nationale pérenne, gérée par la communauté, qui soutient l'<a href="https://www.earthbiogenome.org">Earth BioGenome Project</a>. 
				</p>
				<p>
					Le portail Symbiota du projet SCIBG s'appuie sur la plateforme logicielle <a href="https://symbiota.org">Symbiota</a> pour intégrer des données génomiques et des données relatives aux échantillons de biodiversité, en conformité avec les normes et les meilleures pratiques internationales en matière de biodiversité. Ce portail permettra le suivi des métadonnées taxonomiques et des données liées aux spécimens de référence (*vouchers*), depuis la priorisation des espèces et l'acquisition des échantillons jusqu'au séquençage, à l'assemblage, à l'annotation et à la publication des données de génomes de référence sous l'égide du projet SCIBG. Pour toute question, ou pour toute demande d'adhésion au portail (en tant que nouveau membre ou pour y intégrer une collection), veuillez contacter <a href="mailto:help@symbiota.org">help@symbiota.org</a>. 
				</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1 class="headline">Welcome to the SCIBG Symbiota Portal</h1>
				<p>
					The SCIBG project - <a href="https://www.nsf.gov/awardsearch/show-award/?AWD_ID=2535312">Scalable Community-Driven Infrastructure to Support Biodiversity Genomics</a> - will design an integrated, end-to-end infrastructure for generating high-quality, reference genome resources representing U.S. eukaryote species biodiversity. SCIBG will establish a sustainable, community-driven national platform that supports the <a href="https://www.earthbiogenome.org">Earth BioGenome Project</a>.
				</p>
				<p>
					The SCIBG Symbiota Portal leverages the <a href="https://symbiota.org">Symbiota</a> software platform to integrate genomic and biodiversity sample data in alignment with global biodiversity standards and best practices. The portal will enable taxonomic and voucher-based metadata tracking from the point of species prioritization and sample acquisition, to sequencing, assembly, annotation, and SCIBG-governed reference genome data publication. For questions, including requests to join the portal as a new member or collection, please email <a href="mailto:help@symbiota.org">help@symbiota.org</a>. 
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
