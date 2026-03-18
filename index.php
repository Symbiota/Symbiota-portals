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
						Internet ha brindado muchas nuevas oportunidades para compartir información de forma económica, y la comunidad científica ha aprovechado rápidamente este nuevo recurso (véase "Enlaces útiles" arriba). Con el Herbario Virtual Austral Americano (HVAA), hemos podido utilizar recursos creados para otros sitios web, algunos de ellos financiados por subvenciones de la Fundación Nacional de Ciencias de Estados Unidos a la Universidad Estatal de Arizona
						(<a href="https://www.nsf.gov/awardsearch/show-award/?AWD_ID=0847966" target="_blank">DBI0847966</a>). </p>
					<p>
						El propósito principal de HVAA es apoyar la distribución de datos de especímenes de herbario de plantas que crecen en el sur de Sudamérica:
						Argentina, Chile, Paraguay, Uruguay y los estados del sur de Brasil, Rio Grande do Sul, Santa Catarina y Paraná (que corresponden aproximadamente a
						la región del "Cono Sur" (<a href="http://www2.darwin.edu.ar/Proyectos/FloraArgentina/fa.htm" target="_blank">Flora del Cono Sur</a>).
						Sin embargo, la base de datos con la que trabaja incluye especímenes de toda Sudamérica,
						Centroamérica, México y el Caribe, por lo que es posible realizar búsquedas más amplias
						(<a href="https://neotropical.symbiota.org/flora/index.php" target="_blank">Portal de Flora Neotropical</a>). Los datos de los sitios de Symbiota se pueden
						transferir fácilmente a <a href="https://www.gbif.org/" target="_blank">GBIF</a>.
						Los sitios de Symbiota incluyen al menos un tesauro taxonómico que enumera los nombres de los taxones y sus sinónimos, y que es mantenido periódicamente por especialistas. 
					</p>
					<p>
						Inicialmente, HVAA distribuyó datos de especímenes conservados en algunos herbarios de Norteamérica y Europa,
						pero varios herbarios latinoamericanos se han unido. Invitamos a otras colecciones a unirse también. 
						Si desea agregar los datos de su colección, comuníquese con <a href="mailto:help@symbiota.org">help@symbiota.org</a>. 
					</p>
					<p>
						HVAA utiliza el software de código abierto <a href="http://symbiota.org/" target="_blank">Symbiota</a>, diseñado para distribuir información de historia natural
						de múltiples fuentes, incluyendo imágenes, texto descriptivo, listas florísticas, claves interactivas y datos de especímenes de museos. 
						Para obtener más información sobre las características y capacidades disponibles a través de este sitio, visite la sección <a href="https://docs.symbiota.org/" target="_blank">Documentación de Symbiota</a>
						o lea <a href="https://canotia.org/volumes/vol17/1-Checklists.pdf" target="_blank">Bell y Landrum 2021</a>. 
						Únase como visitante habitual y envíenos sus comentarios. Envíe sus comentarios a <a href="mailto:help@symbiota.org">help@symbiota.org</a>.
						Visite la página de la <a href="https://herbariovaa.org/includes/usagepolicy.php">Política de uso de datos</a> para obtener información sobre cómo citar los datos obtenidos de este recurso web.
						Si está interesado en utilizar los datos del sitio Symbiota para análisis biogeográficos, le recomendamos consultar <a href="https://www.researchgate.net/publication/285206871_PROXIMITY_and_CORRELATION_Two_new_computer_programs_for_mining_phytosociological_information_held_in_herbarium_databases_using_central_Arizona_as_a_test_case" target="_blank">Landrum y Lafferty 2015</a>
						y <a href="https://canotia.org/volumes/vol17/2-Nearby.pdf" target="_blank">Lafferty y Landrum 2021</a>.
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
					The internet has provided many new opportunities to inexpensively share information, and the scientific community has been quick to take advantage 
					of this new resource (see "Useful Links" above). With Herbario Virtual Austral Americano (HVAA), we have been able to use resources created for 
					other sites, these sometimes supported by grants to Arizona State University from the U.S. National Science Foundation 
					(<a href="https://www.nsf.gov/awardsearch/show-award/?AWD_ID=0847966" target="_blank">DBI0847966</a>). 
				</p>
				<p>
					The purpose of HVAA is primarily to support the distribution of herbarium specimen data for plants that grow in southern South America: 
					Argentina, Chile, Paraguay, Uruguay, and the southern states of Brazil, Rio Grande do Sul, Santa Catarina, and Paraná (roughly corresponding to 
					the "Southern Cone/Cono Sur" (<a href="http://www2.darwin.edu.ar/Proyectos/FloraArgentina/fa.htm" target="_blank">Flora del Conosur</a>). 
					However, the database with which it works includes specimens from throughout South America, 
					Central America, Mexico, and the Caribbean, so wider searches are possible 
					(<a href="https://neotropical.symbiota.org/flora/index.php" target="_blank">Neotropical Floral Portal</a>). Data on Symbiota sites can be 
					conveniently transferred to <a href="https://www.gbif.org/" target="_blank">GBIF</a>.  
					Symbiota sites include at least one taxonomic thesaurus, that lists names of taxa and their synonyms and is periodically maintained by specialists.
				</p>
				<p>
					As a beginning, HVAA has distributed data from specimens held at some North American and European herbaria, 
					but several Latin American herbaria have now joined. We invite other collections to join as well. 
					If you would like to add your collection data please contact <a href="mailto:help@symbiota.org">help@symbiota.org</a>.
				</p>
				<p>
					HVAA uses the open source software <a href="http://symbiota.org/" target="_blank">Symbiota</a>, which is designed to distribute natural 
					history information from multiple sources, including images, descriptive text, checklists, interactive keys and museum specimen data. 
					To learn more about the features and capabilities available through this site, visit the <a href="https://docs.symbiota.org/" target="_blank">Symbiota Docs</a> 
					or read <a href="https://canotia.org/volumes/vol17/1-Checklists.pdf" target="_blank">Bell & Landrum 2021</a>. 
					Join as a regular visitor and please send your feedback to <a href="mailto:help@symbiota.org">help@symbiota.org</a>. 
					Visit the <a href="https://herbariovaa.org/includes/usagepolicy.php">Data Usage Policy</a> page for information on how to cite data obtained from this web resource. 
					If you are interested in using Symbiota site data for biogeographic analysis you may want to consult <a href="https://www.researchgate.net/publication/285206871_PROXIMITY_and_CORRELATION_Two_new_computer_programs_for_mining_phytosociological_information_held_in_herbarium_databases_using_central_Arizona_as_a_test_case" target="_blank">Landrum & Lafferty 2015</a> 
					and <a href="https://canotia.org/volumes/vol17/2-Nearby.pdf" target="_blank">Lafferty & Landrum 2021</a>.
				</p>
			</div>
			<?php
		}
		?>
	</main>
	<!--<?php if($GLOBALS['DONATE_LINK'] && file_exists($SERVER_ROOT . '/includes/donationButton.php')): ?>
		<?php include($SERVER_ROOT . '/includes/donationButton.php') ?>
	<?php endif ?>-->
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
