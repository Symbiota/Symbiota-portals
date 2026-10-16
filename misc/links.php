<?php
//error_reporting(E_ALL);
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$charset);
?>
<html>
<head>
    <title><?php echo $defaultTitle; ?> Links</title>
    <link href="../css/base.css?<?php echo $CSS_VERSION; ?>" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="../css/main.css?<?php echo $CSS_VERSION; ?>" type="text/css" />
</head>
<body>
	<?php
	$displayLeftMenu = (isset($misc_linksMenu)?$misc_linksMenu:"true");
	include($serverRoot.'/header.php');
	if(isset($misc_linksCrumbs)){
		echo "<div class='navpath'>";
		echo "<a href='../index.php'>Home</a> &gt; ";
		echo $misc_linksCrumbs;
		echo " <b>Links</b>"; 
		echo "</div>";
	}
	?> 
        <!-- This is inner text! --> 
        <div id="innertext">
            <h1>Links</h1>
        	<div style="margin-left:10px;">
				<div>
					<div style="font-weight:bold;">General Resources</div>
					<ul>
						<li><a href='http://symbiota.org' target='_blank'>Symbiota Virtual Flora Software Project</a></li>
					</ul>
				</div>
				<div>
					<div style="font-weight:bold;">Regional Floristic Resources</div>
					<ul>
						<li><a href='http://newmexicoflores.com/' target='_blank'>New Mexico Flores</a></li>
						<li><a href='http://aznps.com/PAPAZ2.php' target='_blank'>Plant Atlas Project of Arizona (PAPAZ)</a></li>
						<li><a href='http://www.swcoloradowildflowers.com/' target='_blank'>Southwest Colorado Wildflowers</a></li>
						<li><a href='http://gilaflora.com/' target='_blank'>Vascular Plants of the Gila Wilderness</a></li>
					</ul>
				</div>
				<div>
					<div style="font-weight:bold;">Other Regional Symbiota Nodes</div>
					<ul>
						<li><a href="http://intermountainbiota.org">Intermountain Regional Herbarium Network</a></li>
						<li><a href="http://www.madrean.org/symbflora/">Madrean Archipelago Biodiversity Assessment (MABA)</a></li>
						<li><a href="http://midwestherbaria.org/portal/">Midwest Herbaria</a></li>
						<li><a href="http://swbiodiversity.unm.edu/">New Mexico Biodiversity</a></li>
						<li><a href="http://nansh.org">North American Network of Small Herbaria</a></li>
						<li><a href="http://ngpherbaria.org">North Great Plains Herbaria</a></li>
						<li><a href="http://sernecportal.org">SERNEC (Southeast USA)</a></li>
					</ul>
				</div>
				<div>
					<div style="font-weight:bold;">Other Symbiota Nodes</div>
					<ul>
						<li><a href='http://symbiota.org/cotram/index.php' target='_blank'>CoTRAM - Cooperative Taxonomic Resource for American Myrtaceae</a></li>
						<li><a href='http://symbiota.org/nalichens/index.php' target='_blank'>Consortium of North American Lichen Herbaria</a></li>
					</ul>
				</div>
				<div>
					<div style="font-weight:bold;">SEINet Project Managers</div>
					<ul>
						<li><b>Arizona Flora Project</b></li>
						<ul>
							<li><a href='http://collections.asu.edu/herbarium/index.html' target='_blank'>Arizona State University Vascular Plant Herbarium</a></li>
						</ul>
						<li><b>New Mexico Flora Project</b></li>
						<ul>
							<li>No Managers Yet Defined</li>
						</ul>
						<li><b>Sonoran Desert Regional Project</b></li>
						<ul>
							<li><a href='http://www.desertmuseum.org/' target='_blank'>Arizona-Sonora Desert Museum</a></li>
							<li><a href='http://www.conabio.gob.mx/remib_ingles/doctos/uson.html' target='_blank'>Herbario de la Universidad de Sonora (DICTUS)</a></li>
						</ul>
					</ul>
				</div>
			</div>
		</div>

	<?php
	include($serverRoot.'/footer.php');
	?> 

</body>
</html>
