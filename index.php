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
		<h1 class="screen-reader-only"><?php echo $DEFAULT_TITLE; ?> Home</h1>
		<!--
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
		-->
			<div>
				<p>
					The Diatom Herbarium of the Academy of Natural Sciences of Drexel University, one of the largest in the world, 
					houses over 260,000 slides, of which about 5,000 are types, including both fossil and modern diatoms collected from fresh, brackish, and marine habitats. 
					In addition to its world coverage and its inclusion of fossil diatoms, the herbarium has an extensive record of materials collected as part of freshwater 
					environmental surveys from throughout the United States. These surveys were the work of the former Department of Limnology, and its successor, the Academy’s 
					Phycology Section of the Patrick Center for Environmental Research. Often extending over decades, these surveys offer a unique resource for the study of 
					long-term changes in diatom populations and ecology.
				</p>
				<p>
					The core research collection is a compilation of smaller collections founded in the nineteenth and early twentieth century 
					by amateur diatomists. Many additional collections were donated by diatomists from all over the world.
				</p>
				<p> 
					The Diatom Herbarium contains many special collections named after the diatomist who put the collection together. 
					These collections were given to the Diatom Herbarium by the diatomist, or by their family. Several collections include 
					slides and/or materials of other diatomists, or the collections may have been part of a larger collection of another individual. 
				</p>
			</div>
    <h2>Special Collections of the Diatom Herbarium</h2>
	<div style="padding-bottom:3em"> 
	<table>
	    <style>
        table {
            border-collapse: separate; /* Ensure cell borders are not collapsed */
            border-spacing: 0; /* Remove spacing between cells */
            border: 2px solid black; /* Outer border for the table */ 
	}
        th, td {
            border: none; /* No border inside cells */
            padding: 8px; /* Optional: padding for cells */
        }
    </style>
        <thead>
            <tr>
                <th>Collector/Collection</th>
                <th>Size</th>
                <th>Dates</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Christian Febiger</td>
                <td>5215 slides</td>
                <td>1817-1892</td>
                <td>Exsiccatae. Member of the Academy from 1866-1892.</td>
            </tr>
            <tr>
                <td>John A. Schulze</td>
                <td>5125 slides</td>
                <td>na</td>
                <td>Collection of slides and clean & uncleaned material from Europe, the Pacific Ocean, Asia minor, the Americas (with many specifically from North America).</td>
            </tr>
            <tr>
                <td>Charles S. Boyer</td>
                <td>5615 slides</td>
                <td>1856-1928</td>
                <td>Collected while at the Academy; unique collection. Donated by Mrs. Charles Boyer after his death. His collections were used to write "Diatoms of North America" as well as "Diatoms of Philadelphia and Vicinity".</td>
            </tr>
            <tr>
                <td>Rabenhorst exsiccatae set</td>
                <td></td>
                <td></td>
                <td>From the Missouri Botanical Garden</td>
            </tr>
            <tr>
                <td>Pease collection</td>
                <td></td>
                <td></td>
                <td>Several thousand slides from Penn State University</td>
            </tr>
            <tr>
                <td>N. Foged</td>
                <td></td>
                <td></td>
                <td>Slides from Denmark and elsewhere</td>
            </tr>
            <tr>
                <td>McCail</td>
                <td></td>
                <td></td>
                <td>Slides from Scotland and elsewhere</td>
            </tr>
            <tr>
                <td>Manguin</td>
                <td></td>
                <td></td>
                <td>Slides from France and elsewhere</td>
            </tr>
            <tr>
                <td>Pergallo</td>
                <td>1175 slides</td>
                <td></td>
                <td>Exsiccatae</td>
            </tr>
            <tr>
                <td>Tempère & Pergallo</td>
                <td>1675 slides</td>
                <td></td>
                <td>Exsiccatae</td>
            </tr>
            <tr>
                <td>H.L. Smith</td>
                <td>701 slides</td>
                <td>1870-1890</td>
                <td>Worked from 1870-1890. This is Smith's original collection of slides on which he identified the diatoms which were recorded on the labels of the many exsiccatae he produced. This collection was purchased by F.J. Keeley and has an accompanying letter certifying that this is Smith's original collection. This is a part of F.J. Keeley's collection.</td>
            </tr>
            <tr>
                <td>William Smith</td>
                <td>320 slides</td>
                <td>1808-1857</td>
                <td>Primarily slides of British Diatoms. Not the specific collection used to create his British Diatomaceae work, but one of several exsiccatae he had made up. Name of one species per slide, with collection locality in Britain.</td>
            </tr>
            <tr>
                <td>Cleve and Möller</td>
                <td>324 slides</td>
                <td>1877-1882</td>
                <td>Upsala. Collection of slides and material from many other individuals as well. Each slide lists one main species and often other forms which are present.</td>
            </tr>
            <tr>
                <td>Eulenstein</td>
                <td></td>
                <td></td>
                <td>Part of Febiger Collection</td>
            </tr>
            <tr>
                <td>Loren Bahls</td>
                <td>&gt;5000 slides</td>
                <td></td>
                <td>Collection of slides and materials from various projects led by Loren Bahls.</td>
            </tr>
            <tr>
                <td>The General Collection</td>
                <td>&gt;95,000 slides</td>
                <td></td>
                <td>Collection of slides and types from all over the world. In the collection are slides from M.A. Booth, D.B. Ward, Dr. Peticolis as well as many others. The collections of Christian Febiger are included in the General Collection at the Academy and include slides from Grunow, Gregory and A. Schmidt. The GC also includes the U.S.G.S. NAWQA Project material which consists of over 10,000 slides and corresponding vials of cleaned material collected 1993 - 2002 from rivers throughout the United States.</td>
            </tr>
        </tbody>
    </table>
	</div>
	<!--
			<?php
		}
		?>
	-->
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
