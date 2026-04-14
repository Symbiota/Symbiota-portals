<?php
<<<<<<< HEAD
include_once($SERVER_ROOT.'/content/lang/collections/misc/collprofiles.'.$LANG_TAG.'.php');
=======
include_once($SERVER_ROOT . '/classes/utilities/Language.php');
>>>>>>> origin

Language::load('collections/misc/collprofiles');

$statDisplay = array_key_exists('stat', $_REQUEST) ? $_REQUEST['stat'] : '';
$collid = filter_var($collid, FILTER_SANITIZE_NUMBER_INT);

if($statDisplay == 'geography'){
<<<<<<< HEAD
	$countryDist = array_key_exists('country',$_REQUEST) ? $collManager->cleanOutStr($_REQUEST['country']) : '';
	$stateDist = array_key_exists('state',$_REQUEST) ? $collManager->cleanOutStr($_REQUEST['state']) : '';
=======
	$countryDist = array_key_exists('country',$_REQUEST) ? $_REQUEST['country'] : '';
	$stateDist = array_key_exists('state',$_REQUEST) ? $_REQUEST['state'] : '';

>>>>>>> origin
	$distArr = $collManager->getGeographyStats($countryDist, $stateDist);
	if($distArr){
		?>
		<fieldset id="geographystats" style="margin:20px;width:90%;">
			<legend>
				<b>
					<?php
<<<<<<< HEAD
					echo (isset($LANG['GEO_DIST'])?$LANG['GEO_DIST']:'Geographic Distribution');
=======
					echo $LANG['GEO_DIST'];
>>>>>>> origin
					if($stateDist) echo ' - '.$stateDist;
					elseif($countryDist) echo ' - '.$countryDist;
					?>
				</b>
			</legend>
<<<<<<< HEAD
			<div style="margin:15px;"><?php echo (isset($LANG['CLICK_ON_SPEC_REC'])?$LANG['CLICK_ON_SPEC_REC']:'Click on the specimen record counts within the parenthesis to return the records for that term'); ?></div>
=======
			<div style="margin:15px;"><?= $LANG['CLICK_ON_SPEC_REC'] ?></div>
>>>>>>> origin
			<ul>
				<?php
				foreach($distArr as $term => $subArr){
					$cnt = $subArr['cnt'];
					$hasChild = false;
					if(!$stateDist && $subArr['hasChild']) $hasChild = true;
					$countryTerm = htmlspecialchars(($countryDist ? $countryDist : $term), ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE);
					$stateTerm = htmlspecialchars(($countryDist ? ($stateDist ? $stateDist : $term) : ''), ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE);
					$countyTerm = htmlspecialchars(($countryDist && $stateDist ? $term : ''), ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE);
					echo '<li>';
<<<<<<< HEAD
					if(!$stateDist) echo '<a href="collprofiles.php?collid=' .htmlspecialchars($collid, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&stat=geography&country=' . htmlspecialchars($countryTerm, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&state=' . htmlspecialchars($stateTerm, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '#geographystats">';
					echo $term;
					if(!$stateDist) echo '</a>';
					echo ' (<a href="../list.php?db=' . htmlspecialchars($collid, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&reset=1&country=' . htmlspecialchars($countryTerm, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&state=' . htmlspecialchars($stateTerm, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&county=' . htmlspecialchars($countyTerm, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '" target="_blank">' . htmlspecialchars($cnt, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '</a>)';
=======
					if($hasChild) echo '<a href="collprofiles.php?collid=' . $collid . '&stat=geography&country=' . $countryTerm . '&state=' . $stateTerm . '#geographystats">';
					echo $term;
					if($hasChild) echo '</a>';
					echo ' (<a href="../list.php?db=' . $collid . '&reset=1&usethes=1&country=' . $countryTerm . '&state=' . $stateTerm . '&county=' . $countyTerm . '" target="_blank">' . $cnt . '</a>)';
>>>>>>> origin
					echo '</li>';
				}
				?>
			</ul>
		</fieldset>
		<?php
	}
}
elseif($statDisplay == 'taxonomy'){
	$famDist = array_key_exists('family', $_REQUEST) ? $collManager->cleanOutStr($_REQUEST['family']) : '';
	$taxArr = $collManager->getTaxonomyStats($famDist);
	?>
	<fieldset id="taxonomystats" style="margin:20px;width:90%;">
<<<<<<< HEAD
		<legend><b><?php echo (isset($LANG['TAXON_DIST'])?$LANG['TAXON_DIST']:'Taxon Distribution'); ?></b></legend>
		<div style="margin:15px;float:left;">
			<?php echo (isset($LANG['TAXON_DIST'])?$LANG['TAXON_DIST']:'Click on the specimen record counts within the parenthesis to return the records for that family'); ?>
=======
		<legend><b><?= $LANG['TAXON_DIST'] ?></b></legend>
		<div style="margin:15px;float:left;">
			<?= $LANG['TAXON_DIST'] ?>
>>>>>>> origin
		</div>
		<div style="clear:both;">
			<ul>
				<?php
				foreach($taxArr as $name => $subArr){
					$name = htmlspecialchars($name, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE);
					$cnt = $subArr['cnt'];
					$hasChild = false;
					if($subArr['hasChild']) $hasChild = true;
					echo '<li>';
<<<<<<< HEAD
					if(!$famDist) echo '<a href="collprofiles.php?collid=' . htmlspecialchars($collid, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&stat=taxonomy&family=' . htmlspecialchars($name, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '#taxonomystats">';
					echo $name;
					if(!$famDist) echo '</a>';
					echo ' (<a href="../list.php?db=' . htmlspecialchars($collid, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&taxontype=' . htmlspecialchars(($famDist?2:3), ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&reset=1&taxa=' . htmlspecialchars($name, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '" target="_blank">' . htmlspecialchars($cnt, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '</a>)';
=======
					if($hasChild) echo '<a href="collprofiles.php?collid=' . $collid . '&stat=taxonomy&family=' . $name . '#taxonomystats">';
					echo $name;
					if($hasChild) echo '</a>';
					echo ' (<a href="../list.php?db=' . $collid . '&taxontype=' . ($famDist?2:3) . '&reset=1&usethes=1&taxa=' . $name . '" target="_blank">' . $cnt . '</a>)';
>>>>>>> origin
					echo '</li>';
				}
				?>
			</ul>
		</div>
	</fieldset>
	<?php
}
