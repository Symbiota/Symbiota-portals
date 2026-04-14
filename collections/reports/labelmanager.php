<?php
include_once('../../config/symbini.php');
@include_once('Image/Barcode.php');
@include_once('Image/Barcode2.php');
include_once($SERVER_ROOT.'/classes/OccurrenceLabel.php');
<<<<<<< HEAD
include_once($SERVER_ROOT.'/content/lang/collections/reports/labelmanager.'.$LANG_TAG.'.php');
=======
include_once($SERVER_ROOT . '/classes/utilities/Language.php');
include_once($SERVER_ROOT . '/classes/utilities/Sanitize.php');

Language::load('collections/reports/labelmanager');

>>>>>>> origin
header("Content-Type: text/html; charset=".$CHARSET);

if(!$SYMB_UID) header('Location: ../../profile/index.php?refurl=../collections/reports/labelmanager.php?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES));

<<<<<<< HEAD
$collid = $_REQUEST['collid'];
$action = array_key_exists('submitaction',$_REQUEST)?$_REQUEST['submitaction']:'';

//Sanitation
if(!is_numeric($collid)) $collid = 0;

$labelManager = new OccurrenceLabel();
$labelManager->setCollid($collid);

=======
$collid = Sanitize::int($_REQUEST['collid']);
$action = array_key_exists('submitaction', $_REQUEST) ? $_REQUEST['submitaction'] : '';

$labelManager = new OccurrenceLabel();
$labelManager->setCollid($collid);

>>>>>>> origin
$limit = (ini_get('max_input_vars')/2) - 100;
if(!$limit) $limit = 400;
elseif($limit > 1000) $limit = 1000;

$isEditor = 0;
$occArr = array();
if($IS_ADMIN || (array_key_exists("CollAdmin",$USER_RIGHTS) && in_array($collid,$USER_RIGHTS["CollAdmin"]))){
	$isEditor = 1;
}
elseif(array_key_exists("CollEditor",$USER_RIGHTS) && in_array($collid,$USER_RIGHTS["CollEditor"])){
	$isEditor = 1;
}
if($isEditor){
<<<<<<< HEAD
	if($action == (isset($LANG['FILT_SPEC_REC']) ? $LANG['FILT_SPEC_REC'] : 'Filter Specimen Records')){
=======
	if($action == 'filterRecords'){
>>>>>>> origin
		$occArr = $labelManager->queryOccurrences($_POST, $limit);
	}
}
$labelFormatArr = $labelManager->getLabelFormatArr(true);
?>
<!DOCTYPE html>
<<<<<<< HEAD
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $CHARSET;?>">
		<title><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['SPEC_LABEL_MANAGER'] ?> </title>
=======
<html lang="<?= $LANG_TAG ?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?= $CHARSET;?>">
		<title><?= $DEFAULT_TITLE ?> <?= $LANG['SPEC_LABEL_MANAGER'] ?> </title>
>>>>>>> origin
		<?php
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
		<script type="text/javascript">
			<?php
			if($labelFormatArr) echo "var labelFormatObj = ".json_encode($labelFormatArr).";";
			?>

			function selectAll(cb){
				boxesChecked = true;
				if(!cb.checked){
					boxesChecked = false;
				}
				var dbElements = document.getElementsByName("occid[]");
				for(i = 0; i < dbElements.length; i++){
					var dbElement = dbElements[i];
					dbElement.checked = boxesChecked;
				}
			}

			function validateQueryForm(f){
				if(!validateDateFields(f)){
					return false;
				}
				return true;
			}

			function validateDateFields(f){
				var status = true;
				var validformat1 = /^\s*\d{4}-\d{2}-\d{2}\s*$/ //Format: yyyy-mm-dd
				if(f.date1.value !== "" && !validformat1.test(f.date1.value)) status = false;
				if(f.date2.value !== "" && !validformat1.test(f.date2.value)) status = false;
<<<<<<< HEAD
				if(!status) alert("<?php echo (isset($LANG['ALERT_DATE']) ? $LANG['ALERT_DATE'] : 'Date entered must follow the format YYYY-MM-DD') ?>");
=======
				if(!status) alert("<?= $LANG['ALERT_DATE'] ?>");
>>>>>>> origin
				return status;
			}

			function validateSelectForm(f){
				var dbElements = document.getElementsByName("occid[]");
				for(i = 0; i < dbElements.length; i++){
					var dbElement = dbElements[i];
					if(dbElement.checked){
						var quantityObj = document.getElementsByName("q-"+dbElement.value);
						if(quantityObj && quantityObj[0].value > 0) return true;
					}
				}
<<<<<<< HEAD
			   	alert("<?php echo (isset($LANG['ALERT_SPEC']) ? $LANG['ALERT_SPEC'] : 'At least one specimen checkbox needs to be selected with a label quantity greater than 0') ?>");
=======
			   	alert("<?= $LANG['ALERT_SPEC'] ?>");
>>>>>>> origin
			  	return false;
			}

			function openIndPopup(occid){
				openPopup('../individual/index.php?occid=' + occid);
			}

			function openEditorPopup(occid){
				openPopup('../editor/occurrenceeditor.php?occid=' + occid);
			}

			function openPopup(urlStr){
				var wWidth = 900;
				if(document.body.offsetWidth) wWidth = document.body.offsetWidth*0.9;
				if(wWidth > 1200) wWidth = 1200;
				newWindow = window.open(urlStr,'popup','scrollbars=1,toolbar=0,resizable=1,width='+(wWidth)+',height=600,left=20,top=20');
				if (newWindow.opener == null) newWindow.opener = self;
				return false;
			}

			function changeFormExport(buttonElem, action, target){
				var f = buttonElem.form;
<<<<<<< HEAD
				if(action == "labeldynamic.php" && buttonElem.value == "<?php echo (isset($LANG['PRINT_BROWSER']) ? $LANG['PRINT_BROWSER'] : 'Print in Browser') ?>"){
					if(!f["labelformatindex"] || f["labelformatindex"].value == ""){
						alert("<?php echo (isset($LANG['ALERT_LABEL']) ? $LANG['ALERT_LABEL'] : 'Please select a Label Format Profile') ?>");
=======
				if(action == "labeldynamic.php" && buttonElem.value == "printBrowser"){
					if(!f["labelformatindex"] || f["labelformatindex"].value == ""){
						alert("<?= $LANG['ALERT_LABEL'] ?>");
>>>>>>> origin
						return false;
					}
				}
				else if(action == "labelsword.php" && f.labeltype.valye == "packet"){
<<<<<<< HEAD
					alert("<?php echo (isset($LANG['ALERT_PACKET_LABEL']) ? $LANG['ALERT_PACKET_LABEL'] : 'Packet labels are not yet available as a Word document') ?>");
=======
					alert("<?= $LANG['ALERT_PACKET_LABEL'] ?>");
>>>>>>> origin
					return false;
				}
				if(f.bconly && f.bconly.checked && action == "labeldynamic.php") action = "barcodes.php";
				f.action = action;
				f.target = target;
				return true;
			}

			function checkPrintOnlyCheck(f){
				if(f.bconly.checked){
					f.speciesauthors.checked = false;
					f.catalognumbers.checked = false;
					f.bc.checked = false;
					f.symbbc.checked = false;
				}
			}

			function checkBarcodeCheck(f){
				if(f.bc.checked || f.symbbc.checked || f.speciesauthors.checked || f.catalognumbers.checked){
					f.bconly.checked = false;
				}
			}

			function labelFormatChanged(selObj){
				if(selObj && labelFormatObj){
					var catStr = selObj.value.substring(0,1);
					var labelIndex = selObj.value.substring(2);
					var f = document.selectform;
					if(catStr != ''){
						f.hprefix.value = labelFormatObj[catStr][labelIndex].labelHeader.prefix;
						var midIndex = labelFormatObj[catStr][labelIndex].labelHeader.midText;
						document.getElementById("hmid"+midIndex).checked = true;
						f.hsuffix.value = labelFormatObj[catStr][labelIndex].labelHeader.suffix;
						f.lfooter.value = labelFormatObj[catStr][labelIndex].labelFooter.textValue;
						if(labelFormatObj[catStr][labelIndex].displaySpeciesAuthor == 1) f.speciesauthors.checked = true;
						else f.speciesauthors.checked = false;
						if(f.bc){
							if(labelFormatObj[catStr][labelIndex].displayBarcode == 1) f.bc.checked = true;
							else f.bc.checked = false;
						}
						f.labeltype.value = labelFormatObj[catStr][labelIndex].labelType;
					}
				}
			}
		</script>
		<style>
<<<<<<< HEAD
			fieldset{ margin:10px; padding:15px; }
=======
			fieldset{ margin-top:10px; margin-bottom:10px; padding:15px; }
>>>>>>> origin
			fieldset legend{ font-weight:bold; }
			.fieldDiv{ clear:both; padding:5px 0px; margin:5px 0px }
			.fieldLabel{ font-weight: bold; display:block }
			.checkboxLabel{ font-weight: bold; }
			.fieldElement{  }
		</style>
	</head>
	<body>
	<?php
	$displayLeftMenu = false;
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<div class='navpath'>
<<<<<<< HEAD
		<a href='../../index.php'> <?php echo (isset($LANG['HOME']) ? $LANG['HOME'] : 'Home') ?> </a> &gt;&gt;
		<?php
		if(stripos(strtolower($labelManager->getMetaDataTerm('colltype')), "observation") !== false){
			echo '<a href="../../profile/viewprofile.php?tabindex=1">' . (isset($LANG["PERS_MANAG_MENU"]) ? $LANG["PERS_MANAG_MENU"] : "Personal Management Menu") . '</a> &gt;&gt; ';
		}
		else{
			echo '<a href="../misc/collprofiles.php?collid=' . htmlspecialchars($collid, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '&emode=1">' . (isset($LANG["COLL_MANAG_PANEL"]) ? $LANG["COLL_MANAG_PANEL"] : "Collection Management Panel") . '</a> &gt;&gt; ';
		}
		?>
		<b> <?php echo (isset($LANG['LABEL_PRINT']) ? $LANG['LABEL_PRINT'] : 'Label Printing') ?> </b>
	</div>
	<!-- This is inner text! -->
	<div role="main" id="innertext">
		<h1 class="page-heading"><?= $LANG['SPEC_LABEL_MANAGER']; ?></h1>
=======
		<a href='../../index.php'> <?= $LANG['NAV_HOME'] ?> </a> &gt;&gt;
		<?php
		if(stripos(strtolower($labelManager->getMetaDataTerm('colltype')), "observation") !== false){
			echo '<a href="../../profile/viewprofile.php?tabindex=1">' . $LANG['PERS_MANAG_MENU'] . '</a> &gt;&gt; ';
		}
		else{
			echo '<a href="../misc/collprofiles.php?collid=' . $collid . '&emode=1">' . $LANG['COLL_MANAG_PANEL'] . '</a> &gt;&gt; ';
		}
		?>
		<b> <?= $LANG['LABEL_PRINT'] ?> </b>
	</div>
	<!-- This is inner text! -->
	<div role="main" id="innertext">
		<h1 class="page-heading"><?= $LANG['SPEC_LABEL_MANAGER'] ?></h1>
>>>>>>> origin
		<?php
		if($isEditor){
			$isGeneralObservation = (($labelManager->getMetaDataTerm('colltype') == 'General Observations')?true:false);
			echo '<h2>'.$labelManager->getCollName().'</h2>';
			?>
			<div>
				<form name="datasetqueryform" action="labelmanager.php" method="post" onsubmit="return validateQueryForm(this)">
					<fieldset>
<<<<<<< HEAD
						<legend><b> <?php echo (isset($LANG['DEF_SPEC_REC']) ? $LANG['DEF_SPEC_REC'] : 'Define Specimen Recordset') ?> </b></legend>
						<div style="margin:3px;">
							<div title="<?php echo (isset($LANG['DEF_SPEC_REC']) ? $LANG['DEF_SPEC_REC'] : 'Scientific name as entered in database.') ?>">
								<label for="taxa"> <?php echo (isset($LANG['SCI_NAME']) ? $LANG['SCI_NAME'] : 'Scientific Name: ') ?></label>
								<input type="text" name="taxa" id="taxa" size="60" value="<?php echo (array_key_exists('taxa',$_REQUEST)?$_REQUEST['taxa']:''); ?>" />
							</div>
						</div>
						<div style="margin:3px;clear:both;">
							<div style="float:left;" title="<?php echo (isset($LANG['FULL_NAME']) ? $LANG['FULL_NAME'] : 'Full or last name of collector as entered in database.') ?>">
								<label for="recordedby"><?php echo (isset($LANG['COLLECTOR']) ? $LANG['COLLECTOR'] : 'Collector:') ?></label>
								<input type="text" name="recordedby" id="recordedby" style="width:150px;" value="<?php echo (array_key_exists('recordedby',$_REQUEST)?$_REQUEST['recordedby']:''); ?>" />
							</div>
							<div style="float:left;margin-left:20px;" title="<?php echo (isset($LANG['SEPARATE_TERMS']) ? $LANG['SEPARATE_TERMS'] : 'Separate multiple terms by comma and ranges by \' - \' (space before and after dash required), e.g.: 3542,3602,3700 - 3750') ?>">
								<label for="recordnumber"><?php echo (isset($LANG['REC_NUM']) ? $LANG['REC_NUM'] : 'Record Number(s):') ?></label>
								<input type="text" name="recordnumber" id="recordnumber" style="width:150px;" value="<?php echo (array_key_exists('recordnumber',$_REQUEST)?$_REQUEST['recordnumber']:''); ?>" />
							</div>
							<div style="float:left;margin-left:20px;" title="<?php echo (isset($LANG['SEPARATE_TERMS']) ? $LANG['SEPARATE_TERMS'] : 'Separate multiple terms by comma and ranges by \' - \' (space before and after dash required), e.g.: 3542,3602,3700 - 3750') ?>">
								<label for="identifier"><?php echo (isset($LANG['CAT_NUM']) ? $LANG['CAT_NUM'] : 'Catalog Number(s):') ?></label>
								<input type="text" name="identifier" id="identifier" style="width:150px;" value="<?php echo (array_key_exists('identifier',$_REQUEST)?$_REQUEST['identifier']:''); ?>" />
=======
						<legend><b> <?= $LANG['DEF_SPEC_REC'] ?> </b></legend>
						<div style="margin:3px;">
							<div title="<?= $LANG['DEF_SPEC_REC'] ?>">
								<label for="taxa"> <?= $LANG['SCI_NAME'] ?></label>
								<input type="text" name="taxa" id="taxa" size="60" value="<?= !empty($_REQUEST['taxa']) ? Sanitize::inString($_REQUEST['taxa']) : '' ?>" />
							</div>
						</div>
						<div style="margin:3px;clear:both;">
							<div style="float:left;" title="<?= $LANG['FULL_NAME'] ?>">
								<label for="recordedby"><?= $LANG['COLLECTOR'] ?></label>
								<input type="text" name="recordedby" id="recordedby" style="width:150px;" value="<?= !empty($_REQUEST['recordedby']) ? Sanitize::inString($_REQUEST['recordedby']) : '' ?>" />
							</div>
							<div style="float:left;margin-left:10px;" title="<?= $LANG['SEPARATE_TERMS'] ?>">
								<label for="recordnumber"><?= $LANG['REC_NUM'] ?></label>
								<input type="text" name="recordnumber" id="recordnumber" style="width:150px;" value="<?= !empty($_REQUEST['recordnumber']) ? Sanitize::inString($_REQUEST['recordnumber']) : '' ?>" />
							</div>
							<div style="float:left;margin-left:10px;" title="<?= $LANG['SEPARATE_TERMS'] ?>">
								<label for="identifier"><?= $LANG['CAT_NUM'] ?></label>
								<input type="text" name="identifier" id="identifier" style="width:150px;" value="<?= !empty($_REQUEST['identifier']) ? Sanitize::inString($_REQUEST['identifier']) : '' ?>" />
>>>>>>> origin
							</div>
						</div>
						<div style="margin:3px;clear:both;">
							<div style="float:left;">
<<<<<<< HEAD
								<label for="recordenteredby"> <?php echo (isset($LANG['ENTER_BY']) ? $LANG['ENTER_BY'] : 'Entered by:') ?> </label>
								<input type="text" name="recordenteredby" id="recordenteredby" value="<?php echo (array_key_exists('recordenteredby',$_REQUEST)?$_REQUEST['recordenteredby']:''); ?>" style="width:100px;" title="<?php echo (isset($LANG['LOG_NAME']) ? $LANG['LOG_NAME'] : 'login name of data entry person') ?> " aria-label="<?php echo (isset($LANG['ENTER_BY']) ? $LANG['ENTER_BY'] : 'Entered by:') ?>" />
							</div>
							<div style="margin-left:20px;float:left;">
								<label for="date1"><?php echo (isset($LANG['DATE_RANGE']) ? $LANG['DATE_RANGE'] : 'Date range:') ?></label>
								<input type="text" name="date1" id="date1" style="width:100px;" value="<?php echo (array_key_exists('date1',$_REQUEST)?$_REQUEST['date1']:''); ?>" onchange="validateDateFields(this.form)" />
								<label for="date2"> <?php echo (isset($LANG['TO']) ? $LANG['TO'] : 'to') ?> </label>
								<input type="text" name="date2" id="date2" style="width:100px;" value="<?php echo (array_key_exists('date2',$_REQUEST)?$_REQUEST['date2']:''); ?>" onchange="validateDateFields(this.form)" />
								<label for="datetarget"><?php echo (isset($LANG['ITYPE_OF_DATE']) ? $LANG['TYPE_OF_DATE'] : 'Type of date'); ?>:</label>
								<select name="datetarget" id="datetarget">
									<option value="dateentered"><?php echo (isset($LANG['DATE_ENTERED']) ? $LANG['DATE_ENTERED'] : 'Date Entered') ?></option>
									<option value="datelastmodified" <?php echo (isset($_POST['datetarget']) && $_POST['datetarget'] == 'datelastmodified'?'SELECTED':''); ?>><?php echo (isset($LANG['DATE_MOD']) ? $LANG['DATE_MOD'] : 'Date Modified') ?></option>
									<option value="eventdate"<?php echo (isset($_POST['datetarget']) && $_POST['datetarget'] == 'eventdate'?'SELECTED':''); ?>><?php echo (isset($LANG['DATE_COLL']) ? $LANG['DATE_COLL'] : 'Date Collected') ?></option>
=======
								<label for="recordenteredby"> <?= $LANG['ENTER_BY'] ?> </label>
								<input type="text" name="recordenteredby" id="recordenteredby" value="<?= !empty($_REQUEST['recordenteredby']) ? Sanitize::inString($_REQUEST['recordenteredby']) : '' ?>" style="width:100px;" title="<?= $LANG['LOG_NAME'] ?> " aria-label="<?= $LANG['ENTER_BY'] ?>" />
							</div>
							<div style="margin-left:20px;float:left;">
								<label for="date1"><?= $LANG['DATE_RANGE'] ?></label>
								<input type="text" name="date1" id="date1" style="width:100px;" value="<?= !empty($_REQUEST['date1']) ? Sanitize::inString($_REQUEST['date1']) : '' ?>" onchange="validateDateFields(this.form)" />
								<label for="date2"> <?= $LANG['TO'] ?> </label>
								<input type="text" name="date2" id="date2" style="width:100px;" value="<?= !empty($_REQUEST['date2']) ? Sanitize::inString($_REQUEST['date2']) : '' ?>" onchange="validateDateFields(this.form)" />
								<label for="datetarget" style="margin-left:10px"><?= $LANG['TYPE_OF_DATE'] ?>:</label>
								<select name="datetarget" id="datetarget">
									<option value="dateentered"><?= $LANG['DATE_ENTERED'] ?></option>
									<option value="datelastmodified" <?= (isset($_POST['datetarget']) && $_POST['datetarget'] == 'datelastmodified'?'SELECTED':'') ?>><?= $LANG['DATE_MOD'] ?></option>
									<option value="eventdate"<?= (isset($_POST['datetarget']) && $_POST['datetarget'] == 'eventdate'?'SELECTED':'') ?>><?= $LANG['DATE_COLL'] ?></option>
>>>>>>> origin
								</select>
							</div>
						</div>
						<div style="margin:3px;clear:both;">
<<<<<<< HEAD
							<label for="labelproject"> <?php echo (isset($LANG['LABEL_PROJ']) ? $LANG['LABEL_PROJ'] : 'Label Projects:') ?></label>
							<select name="labelproject" id="labelproject">
								<option value=""> <?php echo (isset($LANG['ALL_PROJ']) ? $LANG['ALL_PROJ'] : 'All Projects') ?> </option>
=======
							<label for="labelproject"> <?= $LANG['LABEL_PROJ'] ?></label>
							<select name="labelproject" id="labelproject">
								<option value=""> <?= $LANG['ALL_PROJ'] ?> </option>
>>>>>>> origin
								<option value="">-------------------------</option>
								<?php
								$lProj = '';
								if(array_key_exists('labelproject',$_REQUEST)) $lProj = $_REQUEST['labelproject'];
								$lProjArr = $labelManager->getLabelProjects();
								foreach($lProjArr as $projStr){
									echo '<option '.($lProj==$projStr?'SELECTED':'').'>'.$projStr.'</option>'."\n";
								}
								?>
							</select>
							<!--
							Dataset Projects:
							<select name="datasetproject" >
								<option value=""></option>
								<option value="">-------------------------</option>
								<?php
								/*
								$datasetProj = '';
								if(array_key_exists('datasetproject',$_REQUEST)) $datasetProj = $_REQUEST['datasetproject'];
								$dProjArr = $labelManager->getDatasetProjects();
								foreach($dProjArr as $dsid => $dsProjStr){
									echo '<option id="'.$dsid.'" '.($datasetProj==$dsProjStr?'SELECTED':'').'>'.$dsProjStr.'</option>'."\n";
								}
								*/
								?>
							</select>
							-->
<<<<<<< HEAD
							<?php
							echo '<span style="margin-left:15px;"><input name="extendedsearch" id="extendedsearch" type="checkbox" value="1" '.(array_key_exists('extendedsearch', $_POST)?'checked':'').' /></span> ';
							?>
							<label for="extendedsearch">
							<?php
							if($isGeneralObservation) echo (isset($LANG['SEARCH_OUT']) ? $LANG['SEARCH_OUT'] : 'Search outside user profile');
							else echo (isset($LANG['SEARCH_IN']) ? $LANG['SEARCH_IN'] : 'Search within all collections');
							?>
							</label>
						</div>
						<div style="clear:both;">
							<div style="float:left;">
								<input type="hidden" name="collid" value="<?php echo $collid; ?>" />
								<button type="submit" name="submitaction" value="<?php echo $LANG['FILT_SPEC_REC'] ?>">
									<?php echo $LANG['FILT_SPEC_REC'] ?>
								</button>
							</div>
							<div style="margin-left:20px;float:left;">
								* <?= (isset($LANG['SPEC_LIM']) ? $LANG['SPEC_LIM'] : 'Specimen return is limited to') ?>: <?= $limit ?>
							</div>
						</div>
					</fieldset>
				</form>
				<div style="clear:both;">
					<?php
					if($action == (isset($LANG['FILT_SPEC_REC']) ? $LANG['FILT_SPEC_REC'] : 'Filter Specimen Records')){
						if($occArr){
							?>
=======
							<span style="margin-left:15px;"><input name="extendedsearch" id="extendedsearch" type="checkbox" value="1" <?= (array_key_exists('extendedsearch', $_POST)?'checked':'') ?> ></span>
							<label for="extendedsearch">
								<?php
								if($isGeneralObservation) echo $LANG['SEARCH_OUT'];
								else echo $LANG['SEARCH_IN'];
								?>
							</label>
						</div>
						<div style="clear:both;">
							<div style="float:left;">
								<input type="hidden" name="collid" value="<?= $collid ?>" />
								<button type="submit" name="submitaction" value="filterRecords"><?= $LANG['FILT_SPEC_REC'] ?></button>
							</div>
							<div style="margin-left:20px;float:left;">
								* <?= $LANG['SPEC_LIM'] ?>: <?= $limit ?>
							</div>
						</div>
					</fieldset>
				</form>
				<div style="clear:both;">
					<?php
					if($action == 'filterRecords'){
						if($occArr){
							?>
>>>>>>> origin
							<form name="selectform" id="selectform" action="labeldynamic.php" method="post" onsubmit="return validateSelectForm(this);">
								<table class="styledtable" style="font-size:12px;">
									<tr>
										<th title="Select/Deselect all Specimens"><input type="checkbox" onclick="selectAll(this);" /></th>
<<<<<<< HEAD
										<th title="Label quantity"> <?php echo (isset($LANG['QTY']) ? $LANG['QTY'] : 'Qty') ?> </th>
										<th> <?php echo (isset($LANG['COLLECTOR']) ? $LANG['COLLECTOR'] : 'Collector') ?> </th>
										<th> <?php echo (isset($LANG['SCI_NAME']) ? $LANG['SCI_NAME'] : ' Scientific Name') ?></th>
										<th> <?php echo (isset($LANG['LOCALITY']) ? $LANG['LOCALITY'] : 'Locality') ?></th>
=======
										<th title="Label quantity"> <?= $LANG['QTY'] ?> </th>
										<th> <?= $LANG['COLLECTOR'] ?> </th>
										<th> <?= $LANG['SCI_NAME'] ?></th>
										<th> <?= $LANG['LOCALITY'] ?></th>
>>>>>>> origin
									</tr>
									<?php
									$trCnt = 0;
									foreach($occArr as $occId => $recArr){
										$trCnt++;
										?>
										<tr <?= ($trCnt%2?'class="alt"':'') ?>>
											<td>
<<<<<<< HEAD
												<input type="checkbox" name="occid[]" value="<?php echo $occId; ?>" />
											</td>
											<td>
												<input type="text" name="q-<?php echo $occId; ?>" value="<?php echo $recArr["q"]; ?>" style="width:20px;border:inset;" title="<?php echo (isset($LANG['LABEL_QTY']) ? $LANG['LABEL_QTY'] : 'Label quantity') ?>" />
											</td>
											<td>
												<a href="#" onclick="openIndPopup(<?php echo $occId; ?>); return false;">
													<?php echo $recArr["c"]; ?>
=======
												<input type="checkbox" name="occid[]" value="<?= $occId ?>" />
											</td>
											<td>
												<input type="text" name="q-<?= $occId ?>" value="<?= $recArr["q"] ?>" style="width:20px;border:inset;" title="<?= $LANG['LABEL_QTY'] ?>" />
											</td>
											<td>
												<a href="#" onclick="openIndPopup(<?= $occId ?>); return false;">
													<?= $recArr["c"] ?>
>>>>>>> origin
												</a>
												<?php
												if($IS_ADMIN || (array_key_exists("CollAdmin",$USER_RIGHTS) && in_array($recArr["collid"],$USER_RIGHTS["CollAdmin"])) || (array_key_exists("CollEditor",$USER_RIGHTS) && in_array($recArr["collid"],$USER_RIGHTS["CollEditor"]))){
													if(!$isGeneralObservation || $recArr['uid'] == $SYMB_UID){
														?>
<<<<<<< HEAD
														<a href="#" onclick="openEditorPopup(<?php echo $occId; ?>); return false;">
=======
														<a href="#" onclick="openEditorPopup(<?= $occId ?>); return false;">
>>>>>>> origin
															<img src="../../images/edit.png" style="width:1.3em" />
														</a>
														<?php
													}
												}
												?>
											</td>
											<td>
<<<<<<< HEAD
												<?php echo $recArr["s"]; ?>
											</td>
											<td>
												<?php echo $recArr["l"]; ?>
=======
												<?= $recArr["s"] ?>
											</td>
											<td>
												<?= $recArr["l"] ?>
>>>>>>> origin
											</td>
										</tr>
										<?php
									}
									?>
								</table>
								<fieldset style="margin-top:15px;">
<<<<<<< HEAD
									<legend> <?php echo (isset($LANG['LABEL_PRINT']) ? $LANG['LABEL_PRINT'] : ' Label Printing') ?></legend>
										<div class="fieldDiv">
											<div class="fieldLabel"> <?php echo (isset($LANG['LABEL_PROFILE']) ? $LANG['LABEL_PROFILE'] : 'Label Profiles:') ?>
												<?php
												echo '<span title="Open label profile manager"><a href="labelprofile.php?collid=' . htmlspecialchars($collid, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . '"><img src="../../images/edit.png" style="width:1.2em" /></a></span>';
												?>
=======
									<legend> <?= $LANG['LABEL_PRINT'] ?></legend>
										<div class="fieldDiv">
											<div class="fieldLabel"> <?= $LANG['LABEL_PROFILE'] ?>
												<span title="Open label profile manager">
													<a href="labelprofile.php?collid=<?= $collid ?>"><img src="../../images/edit.png" style="width:1.2em" /></a>
												</span>
>>>>>>> origin
											</div>
											<div class="fieldElement">
												<div>
													<select name="labelformatindex" onchange="labelFormatChanged(this)">
<<<<<<< HEAD
														<option value=""> <?php echo (isset($LANG['SEL_LABEL_FORMAT']) ? $LANG['SEL_LABEL_FORMAT'] : 'Select a Label Format') ?> </option>
=======
														<option value=""> <?= $LANG['SEL_LABEL_FORMAT'] ?> </option>
>>>>>>> origin
														<?php
														foreach($labelFormatArr as $cat => $catArr){
															echo '<option value="">---------------------------</option>';
															foreach($catArr as $k => $labelArr){
<<<<<<< HEAD
=======
																if (!isset($labelArr['title'])) continue;
>>>>>>> origin
																echo '<option value="'.$cat.'-'.$k.'">'.$labelArr['title'].'</option>';
															}
														}
														?>
													</select>
												</div>
												<?php
<<<<<<< HEAD
												if(!$labelFormatArr) echo '<b>' . (isset($LANG['LABEL_NOT_SET']) ? $LANG['LABEL_NOT_SET'] : 'label profiles have not yet been set within portal') . '</b>';
=======
												if(!$labelFormatArr) echo '<b>' . $LANG['LABEL_NOT_SET'] . '</b>';
>>>>>>> origin
												?>
											</div>
										</div>
									<div class="fieldDiv">
<<<<<<< HEAD
										<div class="fieldLabel"> <?php echo (isset($LANG['HEAD_PREFIX']) ? $LANG['HEAD_PREFIX'] : 'Heading Prefix:') ?> </div>
										<div class="fieldElement">
											<input type="text" name="hprefix" value="" style="width:450px" /> <?php echo (isset($LANG['E_G_PLANTS']) ? $LANG['E_G_PLANTS'] : '(e.g. Plants of, Insects of, Vertebrates of)') ?>
										</div>
									</div>
									<div class="fieldDiv">
										<div class="checkboxLabel"> <?php echo (isset($LANG['HEAD_MID']) ? $LANG['HEAD_MID'] : 'Heading Mid-Section:') ?> </div>
										<div class="fieldElement">
											<input type="radio" id="hmid1" name="hmid" value="1" /> <?php echo (isset($LANG['COUNTRY']) ? $LANG['COUNTRY'] : 'Country') ?>
											<input type="radio" id="hmid2" name="hmid" value="2" /> <?php echo (isset($LANG['STATE']) ? $LANG['STATE'] : 'State') ?>
											<input type="radio" id="hmid3" name="hmid" value="3" /> <?php echo (isset($LANG['COUNTY']) ? $LANG['COUNTY'] : 'County') ?>
											<input type="radio" id="hmid4" name="hmid" value="4" /> <?php echo (isset($LANG['FAMILY']) ? $LANG['FAMILY'] : 'Family') ?>
											<input type="radio" id="hmid0" name="hmid" value="0" checked/> <?php echo (isset($LANG['BLANK']) ? $LANG['BLANK'] : 'Blank') ?>
										</div>
									</div>
									<div class="fieldDiv">
										<span class="fieldLabel"> <?php echo (isset($LANG['HEAD_SUFF']) ? $LANG['HEAD_SUFF'] : 'Heading Suffix:') ?> </span>
=======
										<div class="fieldLabel"> <?= $LANG['HEAD_PREFIX'] ?> </div>
										<div class="fieldElement">
											<input type="text" name="hprefix" value="" style="width:450px" /> <?= $LANG['E_G_PLANTS'] ?>
										</div>
									</div>
									<div class="fieldDiv">
										<div class="checkboxLabel"> <?= $LANG['HEAD_MID'] ?> </div>
										<div class="fieldElement">
											<input type="radio" id="hmid1" name="hmid" value="1" /> <?= $LANG['COUNTRY'] ?>
											<input type="radio" id="hmid2" name="hmid" value="2" /> <?= $LANG['STATE'] ?>
											<input type="radio" id="hmid3" name="hmid" value="3" /> <?= $LANG['COUNTY'] ?>
											<input type="radio" id="hmid4" name="hmid" value="4" /> <?= $LANG['FAMILY'] ?>
											<input type="radio" id="hmid0" name="hmid" value="0" checked/> <?= $LANG['BLANK'] ?>
										</div>
									</div>
									<div class="fieldDiv">
										<span class="fieldLabel"> <?= $LANG['HEAD_SUFF'] ?> </span>
>>>>>>> origin
										<span class="fieldElement">
											<input type="text" name="hsuffix" value="" style="width:450px" />
										</span>
									</div>
									<div class="fieldDiv">
<<<<<<< HEAD
										<span class="fieldLabel"> <?php echo (isset($LANG['FOOTER']) ? $LANG['FOOTER'] : 'Footer:') ?> </span>
=======
										<span class="fieldLabel"> <?= $LANG['FOOTER'] ?> </span>
>>>>>>> origin
										<span class="fieldElement">
											<input type="text" name="lfooter" value="" style="width:450px" />
										</span>
									</div>
									<div class="fieldDiv">
										<input type="checkbox" name="speciesauthors" value="1" onclick="checkBarcodeCheck(this.form);" />
<<<<<<< HEAD
										<span class="checkboxLabel"> <?php echo (isset($LANG['PRINT_AUTH']) ? $LANG['PRINT_AUTH'] : 'Print species authors for infraspecific taxa') ?> </span>
									</div>
									<div class="fieldDiv">
										<input type="checkbox" name="catalognumbers" value="1" onclick="checkBarcodeCheck(this.form);" />
										<span class="checkboxLabel"> <?php echo (isset($LANG['PRINT_CAT_NUM']) ? $LANG['PRINT_CAT_NUM'] : 'Print Catalog Numbers') ?> </span>
=======
										<span class="checkboxLabel"> <?= $LANG['PRINT_AUTH'] ?> </span>
									</div>
									<div class="fieldDiv">
										<input type="checkbox" name="catalognumbers" value="1" onclick="checkBarcodeCheck(this.form);" />
										<span class="checkboxLabel"> <?= $LANG['PRINT_CAT_NUM'] ?> </span>
>>>>>>> origin
									</div>
									<?php
									if(class_exists('Image_Barcode2') || class_exists('Image_Barcode')){
										?>
										<div class="fieldDiv">
											<input type="checkbox" name="bc" value="1" onclick="checkBarcodeCheck(this.form);" />
<<<<<<< HEAD
											<span class="checkboxLabel"> <?php echo (isset($LANG['INCL_BARCODE']) ? $LANG['INCL_BARCODE'] : 'Include barcode of Catalog Number') ?> </span>
=======
											<span class="checkboxLabel"> <?= $LANG['INCL_BARCODE'] ?> </span>
>>>>>>> origin
										</div>
										<!--
										<div class="fieldDiv">
											<input type="checkbox" name="symbbc" value="1" onclick="checkBarcodeCheck(this.form);" />
											<span class="checkboxLabel">Include barcode of Symbiota Identifier</span>
										</div>
										 -->
										<div class="fieldDiv">
											<input type="checkbox" name="bconly" value="1" onclick="checkPrintOnlyCheck(this.form);" />
<<<<<<< HEAD
											<span class="checkboxLabel"> <?php echo (isset($LANG['PRINT_BARCODE']) ? $LANG['PRINT_BARCODE'] : 'Print only Barcode') ?> </span>
=======
											<span class="checkboxLabel"> <?= $LANG['PRINT_BARCODE'] ?> </span>
>>>>>>> origin
										</div>
										<?php
									}
									?>
									<div class="fieldDiv">
<<<<<<< HEAD
										<span class="fieldLabel"> <?php echo (isset($LANG['LABEL_TYPE']) ? $LANG['LABEL_TYPE'] : 'Label Type:') ?> </span>
										<span class="fieldElement">
											<select name="labeltype">
												<option value="1"> 1 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="2" selected>2 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="3">3 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="4">4 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="5">5 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="6">6 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="7">7 <?php echo (isset($LANG['COLL_PAGE']) ? $LANG['COLL_PAGE'] : 'columns per page') ?> </option>
												<option value="packet"><?php echo (isset($LANG['PACKET_LABEL']) ? $LANG['PACKET_LABEL'] : 'Packet labels') ?> </option>
=======
										<span class="fieldLabel"> <?= $LANG['LABEL_TYPE'] ?> </span>
										<span class="fieldElement">
											<select name="labeltype">
												<option value="1"> 1 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="2" selected>2 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="3">3 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="4">4 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="5">5 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="6">6 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="7">7 <?= $LANG['COLL_PAGE'] ?> </option>
												<option value="packet"><?= $LANG['PACKET_LABEL'] ?> </option>
>>>>>>> origin
											</select>
										</span>
									</div>
									<div style="float:left;margin: 15px 50px;">
<<<<<<< HEAD
										<input type="hidden" name="collid" value="<?php echo $collid; ?>" />
										<div style="margin:10px">
											<input type="submit" name="submitaction" onclick="return changeFormExport(this,'labeldynamic.php','_blank');" value="<?= $LANG['PRINT_BROWSER'] ?>" <?php echo ($labelFormatArr?'':'DISABLED title="' . $LANG['CONTACT_ADMIN'] . '"'); ?> />
										</div>
										<div style="margin:10px">
											<input type="submit" name="submitaction" onclick="return changeFormExport(this,'labeldynamic.php','_self');" value="<?= $LANG['EXP_CSV'] ?>" />
										</div>
										<div style="margin:10px">
											<input type="submit" name="submitaction" onclick="return changeFormExport(this,'labelsword.php','_self');" value="<?= $LANG['EXP_DOCX'] ?>" />
										</div>
										<div style="clear:both;padding:10px 0px">
											<b><?= $LANG['NOTE'] ?></b>
											<?= $LANG['NOTE_1'] ?><br/>
											<?= $LANG['NOTE_2'] ?><br/>
											<?= $LANG['NOTE_3'] ?><br/>
											<?= $LANG['NOTE_4'] ?>
=======
										<input type="hidden" name="collid" value="<?= $collid ?>" />
										<div style="margin:10px">
											<button type="submit" name="submitaction" onclick="return changeFormExport(this,'labeldynamic.php','_blank');" value="printBrowser" title="<?= $LANG['CONTACT_ADMIN'] ?>" <?= ($labelFormatArr?'':'DISABLED') ?>><?= $LANG['PRINT_BROWSER'] ?></button>
										</div>
										<div style="margin:10px">
											<button type="submit" name="submitaction" onclick="return changeFormExport(this,'labeldynamic.php','_self');" value="csvExport"><?= $LANG['EXP_CSV'] ?></button>
										</div>
										<div style="margin:10px">
											<button type="submit" name="submitaction" onclick="return changeFormExport(this,'labelsword.php','_self');" value="exportDOCX"><?= $LANG['EXP_DOCX'] ?></button>
										</div>
										<div style="clear:both;padding:10px 0px">
											<b><?= $LANG['NOTE'] ?></b>: <?= $LANG['NOTE_DETAILS'] ?>
>>>>>>> origin
										</div>
								</fieldset>
							</form>
							<?php
						}
						else{
							?>
							<div style="font-weight:bold;margin:20px;font-weight:150%;">
								<?= $LANG['NO_DATA'] ?>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
			<?php
		}
		else{
			?>
			<div style="font-weight:bold;margin:20px;font-weight:150%;">
				<?= $LANG['NO_PERM'] ?>
			</div>
			<?php
		}
		?>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
	</body>
</html>
