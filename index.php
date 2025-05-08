<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php'))
	include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
<head>
	<title><?= $DEFAULT_TITLE?> Home</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<script src="<?= $CLIENT_ROOT ?>/js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="<?= $CLIENT_ROOT ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?= $CLIENT_ROOT ?>/js/jquery.slides.js?ver=1"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<main  id="innertext" style="font-size: 1.2rem;">
		<?php
		$oodID = 1;
		$ootdGameChecklist = 1024;
		$ootdGameTitle = $LANG['H_PLANT_OF_THE_DAY'];
		$ootdGameType = $LANG['H_PLANT'];
		include_once($SERVER_ROOT.'/classes/GamesManager.php');
		$gameManager = new GamesManager();
		$gameInfo = $gameManager->setOOTD($oodID,$ootdGameChecklist);
		?>
		<div style="float:right;margin:10px;width:450px;text-align:center;">
			<div id="slideshow">
				<div style="background-color: #ffffff;">
					<?php
					$ssId = 1;
					$numSlides = 10;
					$width = 225;
					$dayInterval = 7;
					$interval = 7000;
					$clid = '1072';
					$imageType = 'field';
					$numDays = 30;
					ini_set('max_execution_time', 120);
					include_once($SERVER_ROOT.'/classes/PluginsManager.php');
					$pluginManager = new PluginsManager();
					echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval,$interval);
					?>
				</div>
			</div>
			<!--
			<div id="game-div">
				<div style="font-size:130%;font-weight:bold;">
					<?= $ootdGameTitle; ?>
				</div>
				<a href="<?= $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?= $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
					<img src="<?= $gameInfo['images'][0].'?ver='.date('Ymd'); ?>" style="width:250px;border:0px;" />
				</a><br/>
				<b><?= $LANG['H_WHAT_IS_THIS'] ?></b><br/>
				<a href="<?= $CLIENT_ROOT; ?>/games/ootd/index.php?oodid=<?= $oodID.'&cl='.$ootdGameChecklist.'&title='.$ootdGameTitle.'&type='.$ootdGameType; ?>">
					<?= $LANG['CLICK_TEST_KNOWLEDGE'] ?>
				</a>
			</div>
			 -->
		</div>
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div style="margin:20px;">
				En este mundo que cambia rápidamente, se ha desarrollado una necesidad urgente de aprender sobre nuestra biota mundial.
				Los científicos predicen que la disminución de las especies se acercará a los niveles históricos de extinción masiva dentro de este siglo.
				Se ha demostrado que los neotrópicos contienen algunos de los niveles más ricos de biodiversidad terrestre en el mundo,
				sin embargo, la investigación actual sugiere que una de cada cuatro especies de plantas aún está por descubrir (Thomas 1999).
				El proceso de clasificación e inventario se considera una investigación de base que respalda los esfuerzos de conservación,
				enfatizando que tenemos mucho por hacer para lograr un progreso significativo en la protección de nuestros tesoros biológicos.
				Por muchas razones, la investigación tropical está avanzando a un ritmo lento, especialmente considerando los niveles de amenaza
				crecientes que experimentan las ecozonas tropicales en los últimos tiempos.
			</div>
			<div style="margin:25px;">
				Si queremos lograr un progreso significativo en la protección de estos tesoros biológicos en un período razonable,
				es imperativo que desarrollemos mejores métodos para trabajar en colaboración y crear una base de conocimientos que
				sustente la investigación futura. Necesitamos desarrollar mejores herramientas para ayudar a los taxónomos, biólogos de campo y educadores
				ambientales. Es vital que aumentemos nuestra tasa de realización de inventarios biológicos, especialmente en los trópicos,
				así como orientar a los jóvenes para que se conviertan en nuestros futuros científicos. Este sitio web se esfuerza por integrar el
				conocimiento y los datos de la comunidad biológica para sintetizar una red de bases de datos y herramientas que ayudarán a
				aumentar nuestra comprensión ambiental general.
			</div>
			<div style="margin:20px;">
				Thomas, W. Wayt. 1999. Conservation and monographic research on the flora of Tropical America.
				Biodiversity and Conservation 8: 1007-1015.
			</div>
			<?php
		}
		else{
			?>
			<div style="margin:20px;">
				In this rapidly changing world, there has developed an urgent necessity to learn about our world-wide biota.
				Scientists are predicting that species declines will approach historical mass extinction levels within this century.
				The neotropics have been shown to contain some of the richest levels of terrestrial biodiversity within the world,
				however current research suggests that one out of four plant species are yet to be discovered (Thomas 1999).
				The classification and inventory process is considered baseline research that supports conservation efforts,
				emphasizing that we have far to go in order to make significant progress in protecting our biological treasures.
				For many reasons, tropical research is progressing at a slow pace, especially considering the increased threat
				levels tropical ecozones experience in recent times.
			</div>
			<div style="margin:25px;">
				If we are going to make significant progress in protecting these biological treasures within a reasonable period,
				it is imperative that we develop better methods to work collaboratively and creating a knowledge base that
				supports future research. We need to develop better tools to aid taxonomists, field biologists, and environmental
				educators. It is vital that we increase our rate of conducting biological inventories, especially within the tropics,
				as well as steering youth toward becoming our future scientists. This website strives to integrate biological
				community knowledge and data in order to synthesize a network of databases and tools that will aid in
				increasing our overall environmental comprehension.
			</div>
			<div style="margin:20px;">
				Thomas, W. Wayt. 1999. Conservation and monographic research on the flora of Tropical America.
				Biodiversity and Conservation 8: 1007-1015.
			</div>
			<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
