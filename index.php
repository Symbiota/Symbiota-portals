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
				<p>
					La Internet ha proporcionado muchas nuevas oportunidades de compartir econ&oacute;micamente informaci&oacute;n y la 
					comunidad cient&iacute;fica ha sido r&aacute;pida en aprovechar este nuevo recurso (ver "Enlaces útiles" más arriba). 
					Aunque ningun financiamento exista para este sitio, <b>Herbario Americano Austral Virtual</b>, nosotros hemos podido 
					utilizar recursos creados para otros sitios, estos a veces apoyados por subsidios a Arizona State University  por la 
					National Science Foundation de EEUU (<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0847966" target="_blank">
					DBI0847966</a>). El prop&oacute;sito de este sitio web es de apoyar la distribuci&oacute;n de los datos de espec&iacute;menes 
					de herbario de plantas que crecen en el sur de Sudam&eacute;rica (Argentina y Chile), pero la base de datos con la que trabaja 
					incluye ejemplares de toda América Latina y el Caribe, por lo que son posibles búsquedas más amplias. Para empezar distribuir&aacute; 
					los datos de espec&iacute;menes guardados en algunos herbarios norteamericanos, y proporcionar&aacute; una estructura 
					para la distribuci&oacute;n de otras fuentes de datos tambi&eacute;n. El sitio utiliza <a href="http://symbiota.org" 
					target="_blank">Symbiota</a> que es dise&ntildeado especialmente para distribuir informaci&oacute;n de historia natural 
					de m&uacute;ltiples fuentes, inclusive im&aacute;genes, texto descriptivo, listados de especies, 
					claves interactivas y datos de esp&eacute;cimenes de herbario. Otros artículos sobre el uso de los sitios web de Symbiota en general incluyen <a href="https://canotia.org/volumes/vol17/2-Nearby.pdf" target="_blank">Lafferty & Landrum 2021</a> y
					<a href="https://canotia.org/volumes/vol17/1-Checklists.pdf" target="_blank">Bell & Landrum 2021</a>.
				</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome</h1>
				<p>
					The internet has provided many new opportunities to inexpensively share information and the scientific community has been quick to take advantage of this
					 new resource (see "Useful Links" above). Although no funding exists for this site, <b>Herbario Virtual Austral Americano</b>, we have been able to use 
					resources created for other sites, these sometimes supported by grants to Arizona State University from the U.S. National Science Foundation 
					(<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0847966" target="_blank">DBI0847966</a>). The purpose of this website is primarily 
					to support the distribution herbarium specimen data for plants that grow in southern South America (Argentina and Chile), but the database with which 
					it works includes specimens from throughout Latin America and the Caribbean, so wider searches are possible. 
					As a beginning, it will distribute data from specimens held at some North American herbaria, and will provide a structure for the distribution of 
					other data sources as well. The site uses the open source software <a href="http://symbiota.org" target="_blank">Symbiota</a>, 
					which is designed to distribute natural history information from multiple sources, including images, descriptive text, checklists, interactive keys and museum specimen data. 
					Other articles about using Symbiota websites in general include <a href="https://canotia.org/volumes/vol17/2-Nearby.pdf" target="_blank">Lafferty & Landrum 2021</a> and 
					<a href="https://canotia.org/volumes/vol17/1-Checklists.pdf" target="_blank">Bell & Landrum 2021</a>.
				</p>
				<p>
					To learn more about the features and capabilities available through this site, read
					<a href="misc/HerbarioVirtualAustralAmericano.pdf"><b><i>"Introduction to Herbario Virtual Austral Americano"</i></b></a> 
					or visit the <a href="https://biokic.github.io/symbiota-docs/" target="_blank">Symbiota Docs</a>. Join as a regular visitor and please send your feedback to 
					<a class="bodylink" href="mailto:help@symbiota.org?subject=HVAA Feedback">help@symbiota.org</a>. Visit the <a href="misc/usagepolicy.php">Data Usage Policy</a> page for information on how to cite data obtained from this web resource.
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
