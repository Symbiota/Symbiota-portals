
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
	$displayLeftMenu = "true";
	include($SERVER_ROOT.'/includes/header.php');
	?> 
        <!-- This is inner text! -->
        <main id="innertext">
		<h1>Herbario Virtual Austral Americano</h1>
		<div style="margin:20px;">
			The internet has provided many new opportunities to inexpensively share information and the scientific community has been quick to take advantage of this new resource. For examples, see <a href="misc/links.php">Useful Links</a>. Although no funding exists for this site, <b>Herbario Virtual Austral Americano</b>, we have been able to use resources created for other sites, these sometimes supported by grants to Arizona State University from the USA National Science Foundation (<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0847966" target="_blank">DBI0847966</a>). The purpose of this website is primarily to support the distribution herbarium specimen data for plants that grow in southern South America (Argentina and Chile). As a beginning it will distribute data from specimens held at some North American herbaria, and will provide a structure for the distribution of other data sources as well. The site uses <a href="http://symbiota.org" target="_blank">Symbiota Virtual Flora Software</a> that is especially designed to distribute natural history information from multiple sources, including images, descriptive text, checklists, interactive keys and museum specimen data. 
		</div>
		<div style="margin:20px;">
			To learn more about the features and capabilities available through this site, read
			<a href="misc/HerbarioVirtualAustralAmericano.pdf"><b><i>"Introduction to Herbario Virtual Austral Americano"</i></b></a> 
			or visit the <a href="http://symbiota.org/tiki/tiki-index.php?page=HelpPages" target="_blank">Symbiota Help Pages</a>. Join as a regular visitor and please send your feedback to 
			<a class="bodylink" href="mailto:seinetAdmin@asu.edu?subject=Feedback">seinetAdmin@asu.edu</a>. Visit the <a href="misc/usagepolicy.php">Data Usage Policy</a> page for information on how to cite data obtained from this web resource.
		</div>
		<div style="margin:20px;">
			La Internet ha proporcionado muchas nuevas oportunidades de compartir econ&oacute;micamente informaci&oacute;n y la comunidad cient&iacute;fica ha sido r&aacute;pida en aprovechar este nuevo recurso. Para ejemplos, vea los <a href="misc/links.php">Useful Links</a>. Aunque ningun financiamento exista para este sitio, <b>Herbario Americano Austral Virtual</b>, nosotros hemos podido utilizar recursos creados para otros sitios, estos a veces apoyados por subsidios a Arizona State University  por la National Science Foundation de EEUU (<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0847966" target="_blank">DBI0847966</a>). El prop&oacute;sito de este sitio web es de apoyar la distribuci&oacute;n de los datos de espec&iacute;menes de herbario de plantas que crecen en el sur de Sudam&eacute;rica (Argentina y Chile). Para empezar distribuir&aacute; los datos de espec&iacute;menes guardados en algunos herbarios norteamericanos, y proporcionar&aacute; una estructura para la distribuci&oacute;n de otras fuentes de datos tambi&eacute;n. El sitio utiliza <a href="http://symbiota.org" target="_blank">Software Symbiota Virtual Flora</a> que es dise&ntildeado especialmente para distribuir informaci&oacute;n de historia natural de m&uacute;ltiples fuentes, inclusive im&aacute;genes, texto descriptivo, listados de especies, claves interactivas y datos de esp&eacute;cimenes de herbario. 
		</div>
        </main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 
</body>
</html>
