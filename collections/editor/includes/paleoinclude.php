<?php
<<<<<<< HEAD
$gtsTermArr = $occManager->getPaleoGtsTerms();
//include_once($SERVER_ROOT.'/collections/editor/includes/config/paleoVars.php');
?>
<script>
	var gtsArr = { <?php $d=''; foreach($gtsTermArr as $term => $rankid){ echo $d.'"'.$term.'":'.$rankid; $d=','; } ?> };
	function earlyIntervalChanged(elemObj){
		paloIntervalChanged(elemObj);
		fieldChanged('earlyInterval');
	}

	function lateIntervalChanged(elemObj){
		paloIntervalChanged(elemObj);
		fieldChanged('lateInterval');
	}

	function paloIntervalChanged(elemObj){
		var term = elemObj.value;
		var rankid = gtsArr[term];
		if(rankid==10 || rankid==20){
			if($("select[name=eon]").val() == '') $("select[name=eon]").val(term);
		}
		else if(rankid==30){
			if($("select[name=era]").val() == '') $("select[name=era]").val(term);
			setPaloParents("era");
		}
		else if(rankid==40){
			if($("select[name=period]").val() == '') $("select[name=period]").val(term);
			setPaloParents("period");
		}
		else if(rankid==50){
			if($("select[name=epoch]").val() == '') $("select[name=epoch]").val(term);
			setPaloParents("epoch");
		}
		else if(rankid==60){
			if($("select[name=stage]").val() == '') $("select[name=stage]").val(term);
			setPaloParents("stage");
		}
	}

	function setPaloParents(timePeriod){
		if(timePeriod){
			fieldChanged(timePeriod);
			/*
			switch(timePeriod) {
				case "eon":
					$("select[name=era]").val("");
				case "era":
					$("select[name=period]").val("");
				case "period":
					$("select[name=epoch]").val("");
				case "epoch":
					$("select[name=stage]").val("");
			}
			*/
			var childValue = $("select[name="+timePeriod+"]").val();
			if(childValue){
				if($("select[name=earlyInterval]").val() == "") $("select[name=earlyInterval]").val(childValue);
				if($("select[name=lateInterval]").val() == "") $("select[name=lateInterval]").val(childValue);
				if(timePeriod != "eon"){
					$.ajax({
						type: "POST",
						url: "rpc/getPaleoGtsParents.php",
						dataType: "json",
						data: { term: childValue }
					}).done(function( gtsObj ) {
					  	for (i = 0; i < gtsObj.length; i++) {
					  		var rankid = gtsObj[i].rankid;
							if(rankid == 10 || rankid == 20){
								if($("select[name=eon]").val() == "") $("select[name=eon]").val(gtsObj[i].value);
							}
							else if(rankid == 30){
								if($("select[name=era]").val() == "") $("select[name=era]").val(gtsObj[i].value);
							}
							else if(rankid == 40){
								if($("select[name=period]").val() == "") $("select[name=period]").val(gtsObj[i].value);
							}
							else if(rankid == 50){
								if($("select[name=epoch]").val() == "") $("select[name=epoch]").val(gtsObj[i].value);
							}
					  	}
					});
				}
			}
		}
	}
</script>
<fieldset>
	<legend>Paleontology</legend>
	<div style="clear:both">
		<div id="eonDiv">
			<?php echo (defined('EONLABEL')?EONLABEL:'Eon'); ?>
			<a href="#" onclick="return dwcDoc('eon')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="eon" onchange="setPaloParents('eon');">
				<option value=""></option>
				<?php
				$eonTerm = '';
				if(isset($occArr['eon'])) $eonTerm = $occArr['eon'];
				if($eonTerm && (!array_key_exists($eonTerm, $gtsTermArr) || $gtsTermArr[$eonTerm]>=30)){
					echo '<option value="'.$eonTerm.'" SELECTED>'.$eonTerm.' - mismatched term</option>';
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid ){
					if($rankid < 30) echo '<option value="'.$term.'" '.($eonTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
		<div id="eraDiv">
			<?php echo (defined('ERALABEL')?ERALABEL:'Era'); ?>
			<a href="#" onclick="return dwcDoc('era')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="era" onchange="setPaloParents('era');">
				<option value=""></option>
				<?php
				$eraTerm = '';
				if(isset($occArr['era'])) $eraTerm = $occArr['era'];
				if($eraTerm && (!array_key_exists($eraTerm, $gtsTermArr) || $gtsTermArr[$eraTerm]!=30)){
					echo '<option value="'.$eraTerm.'" SELECTED>'.$eraTerm.' - mismatched term</option>';
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid ){
					if($rankid == 30) echo '<option value="'.$term.'" '.($eraTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
		<div id="periodDiv">
			<?php echo (defined('PERIODLABEL')?PERIODLABEL:'Period'); ?>
			<a href="#" onclick="return dwcDoc('period')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="period" onchange="setPaloParents('period');">
				<option value=""></option>
				<?php
				$periodTerm = '';
				if(isset($occArr['period'])) $periodTerm = $occArr['period'];
				if($periodTerm && (!array_key_exists($periodTerm, $gtsTermArr) || $gtsTermArr[$periodTerm]!=40)){
					echo '<option value="'.$periodTerm.'" SELECTED>'.$periodTerm.' - mismatched term</option>';
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid){
					if($rankid == 40) echo '<option value="'.$term.'" '.($periodTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
		<div id="epochDiv">
			<?php echo (defined('EPOCHLABEL')?EPOCHLABEL:'Epoch'); ?>
			<a href="#" onclick="return dwcDoc('epoch')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="epoch" onchange="setPaloParents('epoch');">
				<option value=""></option>
				<?php
				$epochTerm = '';
				if(isset($occArr['epoch'])) $epochTerm = $occArr['epoch'];
				if($epochTerm && (!array_key_exists($epochTerm, $gtsTermArr) || $gtsTermArr[$epochTerm]!=50)){
					echo '<option value="'.$epochTerm.'" SELECTED>'.$epochTerm.' - mismatched term</option>';
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid){
					if($rankid == 50) echo '<option value="'.$term.'" '.($epochTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
		<div id="stageDiv">
			<?php echo (defined('STAGELABEL')?STAGELABEL:'Stage'); ?>
			<a href="#" onclick="return dwcDoc('stage')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="stage" onchange="setPaloParents('stage');">
				<option value=""></option>
				<?php
				$stageTerm = '';
				if(isset($occArr['stage'])) $stageTerm = $occArr['stage'];
				if($stageTerm && (!array_key_exists($stageTerm, $gtsTermArr) || $gtsTermArr[$stageTerm]!=60)){
					echo '<option value="'.$stageTerm.'" SELECTED>'.$stageTerm.' - mismatched term</option>';
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid){
					if($rankid == 60) echo '<option value="'.$term.'" '.($stageTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
	</div>
	<div>
		<div id="earlyIntervalDiv">
			<?php echo (defined('EARLYINTERVALLABEL')?EARLYINTERVALLABEL:'Early Interval'); ?>
			<a href="#" onclick="return dwcDoc('earlyInterval')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="earlyinterval" onchange="earlyIntervalChanged(this)">
				<option value=""></option>
				<?php
				$earlyIntervalTerm = '';
				if(isset($occArr['earlyinterval'])) $earlyIntervalTerm = $occArr['earlyinterval'];
				if($earlyIntervalTerm && !array_key_exists($earlyIntervalTerm, $gtsTermArr)){
					echo '<option value="'.$earlyIntervalTerm.'" SELECTED>'.$earlyIntervalTerm.' - mismatched term</option>';
=======
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load('collections/editor/includes/paleoinclude');

$gtsTermArr = $occManager->getPaleoGtsTerms();

$earlyIntervalTerm = '';
if(isset($occArr['earlyInterval'])) $earlyIntervalTerm = $occArr['earlyInterval'];
$lateIntervalTerm = '';
if(isset($occArr['lateInterval'])) $lateIntervalTerm = $occArr['lateInterval'];
?>
<script>
	<?php
	if($earlyIntervalTerm){
		echo 'setPaleoTable("' . $earlyIntervalTerm . '", "' . ($lateIntervalTerm ? $lateIntervalTerm : '') . '");';
	}
	?>

	function verifyPaleoForm(f){
		if((f.earlyInterval.value != "" && f.lateInterval.value == "") || (f.earlyInterval.value == "" && f.lateInterval.value != "")){
			alert("<?= $LANG['ERR_ONE_INTERVALS_EMPTY'] ?>");
			return false;
		}
		return true;
	}

	function earlyIntervalChanged(f){
		fullFormErrorMessage = '';
		let earlyTerm = f.earlyInterval.value;
		let lateTerm = f.lateInterval.value;
		setPaleoTable(earlyTerm, lateTerm);
		fieldChanged('earlyInterval');
	}

	function lateIntervalChanged(f){
		fullFormErrorMessage = '';
		let earlyTerm = f.earlyInterval.value;
		let lateTerm = f.lateInterval.value;
		setPaleoTable(earlyTerm, lateTerm);
		fieldChanged('lateInterval');
	}

	async function setPaleoTable(earlyTerm, lateTerm) {
		if(earlyTerm != "" || lateTerm != ""){
			let postData = new FormData();
			postData.append("earlyInterval", earlyTerm);
			postData.append("lateInterval", lateTerm);
			postData.append("format", "simple_map");
			const settings = {
				method: "POST",
				mode: "no-cors",
				headers: {
					"Content-Type": "application/json"
				},
				body: postData
			};
			try {
				const fetchResponse = await fetch('rpc/getPaleoGtsTable.php', settings);
				const responce = await fetchResponse.json();
				if(responce.tableStr != "undefined"){
					if(responce.error){
						if(responce.error == 'ERR_BAD_TERM_ORDER') fullFormErrorMessage = "<?= $LANG['ERR_BAD_TERM_ORDER'] ?>";
						alert(fullFormErrorMessage);
						document.getElementById("table-div").innerHTML = "";
					}
					else document.getElementById("table-div").innerHTML = responce.tableStr;
				}
			} catch (e) {
				alert(e);
			}
		}
		else document.getElementById("table-div").innerHTML = "";
	}
</script>
<style>
	#paelo-gts-table{ margin-left: 10px; margin-bottom: 10px; padding: 8px; border-collapse: collapse; }
	#paelo-gts-table th{ border: 2px solid;  padding: 3.75px 8px; background-color: #d0d0d0; }
	#paelo-gts-table th.blank-th{ border: 0px; background-color: transparent; }
	#paelo-gts-table td{ border: 1px solid; padding: 3.75px 6px; }
</style>
<fieldset>
	<legend>Paleontology</legend>
	<div id="table-div" style="clear:both">

	</div>
	<div>
		<div id="earlyIntervalDiv">
			<?= $LANG['EARLY_INTERVAL_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('early-interval-and-late-interval')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="earlyInterval" onchange="earlyIntervalChanged(this.form)">
				<option value=""></option>
				<?php
				if($earlyIntervalTerm && !array_key_exists($earlyIntervalTerm, $gtsTermArr)){
					echo '<option value="' . $earlyIntervalTerm . '" SELECTED>' . $earlyIntervalTerm . ' - ' . $LANG['MISMATCHED_TERM'] . '</option>';
>>>>>>> origin
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid){
					echo '<option value="'.$term.'" '.($earlyIntervalTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
		<div id="lateIntervalDiv">
<<<<<<< HEAD
			<?php echo (defined('LATEINTERVALLABEL')?LATEINTERVALLABEL:'Late Interval'); ?>
			<a href="#" onclick="return dwcDoc('lateInterval')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="lateinterval" onchange="lateIntervalChanged(this)">
				<option value=""></option>
				<?php
				$lateIntervalTerm = '';
				if(isset($occArr['lateinterval'])) $lateIntervalTerm = $occArr['lateinterval'];
				if($lateIntervalTerm && !array_key_exists($lateIntervalTerm, $gtsTermArr)){
					echo '<option value="'.$lateIntervalTerm.'" SELECTED>'.$lateIntervalTerm.' - mismatched term</option>';
=======
			<?= $LANG['LATE_INTERVAL_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('late-interval')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<select name="lateInterval" onchange="lateIntervalChanged(this.form)">
				<option value=""></option>
				<?php
				$lateIntervalTerm = '';
				if(isset($occArr['lateInterval'])) $lateIntervalTerm = $occArr['lateInterval'];
				if($lateIntervalTerm && !array_key_exists($lateIntervalTerm, $gtsTermArr)){
					echo '<option value="'.$lateIntervalTerm.'" SELECTED>'.$lateIntervalTerm.' - ' . $LANG['MISMATCHED_TERM'] . '</option>';
>>>>>>> origin
					echo '<option value="">---------------------------</option>';
				}
				foreach($gtsTermArr as $term => $rankid){
					echo '<option value="'.$term.'" '.($lateIntervalTerm==$term?'SELECTED':'').'>'.$term.'</option>';
				}
				?>
			</select>
		</div>
	</div>
	<div style="clear:both">
		<div id="absoluteAgeDiv">
<<<<<<< HEAD
			<?php echo (defined('ABSOLUTEAGELABEL')?ABSOLUTEAGELABEL:'Absolute Age'); ?>
			<a href="#" onclick="return dwcDoc('absoluteAge')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="absoluteage" value="<?php echo isset($occArr['absoluteage'])?$occArr['absoluteage']:''; ?>" onchange="fieldChanged('absoluteage');" />
		</div>
		<div id="storageAgeDiv">
			<?php echo (defined('STORAGEAGELABEL')?STORAGEAGELABEL:'Storage Age'); ?>
			<a href="#" onclick="return dwcDoc('storageAge')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="storageage" value="<?php echo isset($occArr['storageage'])?$occArr['storageage']:''; ?>" onchange="fieldChanged('storageage');" />
		</div>
		<div id="localStageDiv">
			<?php echo (defined('LOCALSTAGELABEL')?LOCALSTAGELABEL:'Local Stage'); ?>
			<a href="#" onclick="return dwcDoc('localStage')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="localstage" value="<?php echo isset($occArr['localstage'])?$occArr['localstage']:''; ?>" onchange="fieldChanged('localstage');" />
=======
			<?= $LANG['ABSOLUTE_AGE_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('absolute-age')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="absoluteAge" value="<?php echo isset($occArr['absoluteAge'])?$occArr['absoluteAge']:''; ?>" onchange="fieldChanged('absoluteAge');" />
		</div>
		<div id="localStageDiv">
			<?= $LANG['LOCAL_STAGE_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('local-stage')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="localStage" value="<?php echo isset($occArr['localStage'])?$occArr['localStage']:''; ?>" onchange="fieldChanged('localStage');" />
>>>>>>> origin
		</div>
	</div>
	<div style="clear:both">
		<div id="biotaDiv">
<<<<<<< HEAD
			<?php echo (defined('BIOTALABEL')?BIOTALABEL:'Biota (Flora/Fauna)'); ?>
			<a href="#" onclick="return dwcDoc('biota')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="biota" value="<?php echo isset($occArr['biota'])?$occArr['biota']:''; ?>" onchange="fieldChanged('biota');" />
		</div>
		<div id="biostratigraphyDiv">
			<?php echo (defined('BIOSTRATIGRAPHYLABEL')?BIOSTRATIGRAPHYLABEL:'Biostratigraphy (Biozone)'); ?>
			<a href="#" onclick="return dwcDoc('biostratigraphy')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="biostratigraphy" value="<?php echo isset($occArr['biostratigraphy'])?$occArr['biostratigraphy']:''; ?>" onchange="fieldChanged('biostratigraphy');" />
		</div>
		<div id="taxonEnvironmentDiv">
			<?php echo (defined('TAXONENVIRONMENTLABEL')?TAXONENVIRONMENTLABEL:'Taxon Environment (Formation Marine)'); ?>
			<a href="#" onclick="return dwcDoc('taxonEnvironment')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<?php
			$taxonEnvir = '';
			if(isset($occArr['taxonenvironment'])) $taxonEnvir = $occArr['taxonenvironment'];
			?>
			<select name="taxonenvironment" onchange="fieldChanged('taxonenvironment');">
				<option value=""></option>
				<option <?php if($taxonEnvir=='marine') echo 'SELECTED'; ?>>marine</option>
				<option<?php if($taxonEnvir=='non-marine') echo 'SELECTED'; ?>>non-marine</option>
				<option<?php if($taxonEnvir=='marine and non-marine') echo 'SELECTED'; ?>>marine and non-marine</option>
=======
			<?= $LANG['BIOTA_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('biota')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="biota" value="<?php echo isset($occArr['biota'])?$occArr['biota']:''; ?>" onchange="fieldChanged('biota');" />
		</div>
		<div id="biostratigraphyDiv">
			<?= $LANG['BIOSTRATIGRAPHY_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('biostratigraphy')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="biostratigraphy" value="<?php echo isset($occArr['biostratigraphy'])?$occArr['biostratigraphy']:''; ?>" onchange="fieldChanged('biostratigraphy');" />
		</div>
		<div id="taxonEnvironmentDiv">
			<?= $LANG['TAXON_ENVIRONMENT_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('taxon-environment')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<?php
			$taxonEnvir = '';
			if(isset($occArr['taxonEnvironment'])) $taxonEnvir = $occArr['taxonEnvironment'];
			?>
			<select name="taxonEnvironment" onchange="fieldChanged('taxonEnvironment');">
				<option value=""></option>
				<option <?php if($taxonEnvir=='marine') echo 'SELECTED'; ?>><?= $LANG['MARINE'] ?></option>
				<option <?php if($taxonEnvir=='non-marine') echo 'SELECTED'; ?>><?= $LANG['NON_MARINE'] ?></option>
				<option <?php if($taxonEnvir=='marine and non-marine') echo 'SELECTED'; ?>><?= $LANG['NON_MARINE_MARINE'] ?></option>
>>>>>>> origin
			</select>
		</div>
	</div>
	<div style="clear:both">
<<<<<<< HEAD
		<div id="lithoGroupDiv">
			<?php echo (defined('LITHOGROUPLABEL')?LITHOGROUPLABEL:'Group'); ?>
			<a href="#" onclick="return dwcDoc('group')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="lithogroup" value="<?php echo isset($occArr['lithogroup'])?$occArr['lithogroup']:''; ?>" onchange="fieldChanged('lithogroup');" />
		</div>
		<div id="formationDiv">
			<?php echo (defined('FORMATIONLABEL')?FORMATIONLABEL:'Formation'); ?>
			<a href="#" onclick="return dwcDoc('formation')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="formation" value="<?php echo isset($occArr['formation'])?$occArr['formation']:''; ?>" onchange="fieldChanged('formation');" />
		</div>
		<div id="memberDiv">
			<?php echo (defined('MEMBERLABEL')?MEMBERLABEL:'Member'); ?>
			<a href="#" onclick="return dwcDoc('member')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="member" value="<?php echo isset($occArr['member'])?$occArr['member']:''; ?>" onchange="fieldChanged('member');" />
		</div>
		<div id="bedDiv">
			<?php echo (defined('BEDLABEL')?BEDLABEL:'Bed'); ?>
			<a href="#" onclick="return dwcDoc('bed')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
=======
		<div id="lithogroupDiv">
			<?= $LANG['LITHOGROUP_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('group')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="lithogroup" value="<?php echo isset($occArr['lithogroup'])?$occArr['lithogroup']:''; ?>" onchange="fieldChanged('lithogroup');" />
		</div>
		<div id="formationDiv">
			<?= $LANG['FORMATION_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('formation')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="formation" value="<?php echo isset($occArr['formation'])?$occArr['formation']:''; ?>" onchange="fieldChanged('formation');" />
		</div>
		<div id="memberDiv">
			<?= $LANG['MEMBER_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('member')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="member" value="<?php echo isset($occArr['member'])?$occArr['member']:''; ?>" onchange="fieldChanged('member');" />
		</div>
		<div id="bedDiv">
			<?= $LANG['BED_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('bed')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
>>>>>>> origin
			<input type="text" name="bed" value="<?php echo isset($occArr['bed'])?$occArr['bed']:''; ?>" onchange="fieldChanged('bed');" />
		</div>
	</div>
	<div style="clear:both">
		<div id="lithologyDiv">
<<<<<<< HEAD
			<?php echo (defined('LITHOLOGYLABEL')?LITHOLOGYLABEL:'Lithology'); ?>
			<a href="#" onclick="return dwcDoc('lithology')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
=======
			<?= $LANG['LITHOLOGY_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('lithology')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
>>>>>>> origin
			<input type="text" name="lithology" value="<?php echo isset($occArr['lithology'])?$occArr['lithology']:''; ?>" onchange="fieldChanged('lithology');" />
		</div>
	</div>
	<div style="clear:both">
		<div id="stratRemarksDiv">
<<<<<<< HEAD
			<?php echo (defined('TAXONENVIRONMENTLABEL')?TAXONENVIRONMENTLABEL:'Remarks'); ?>
			<a href="#" onclick="return dwcDoc('stratRemarks')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="stratremarks" value="<?php echo isset($occArr['stratremarks'])?$occArr['stratremarks']:''; ?>" onchange="fieldChanged('stratremarks');" />
=======
			<?= $LANG['STRAT_REMARKS_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('stratigraphic-remarks')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<textarea type="text" name="stratRemarks" onchange="fieldChanged('stratRemarks');"><?php echo isset($occArr['stratRemarks'])?$occArr['stratRemarks']:''; ?></textarea>
>>>>>>> origin
		</div>
	</div>
	<div style="clear:both">
		<div id="elementDiv">
<<<<<<< HEAD
			<?php echo (defined('ELEMENTLABEL')?ELEMENTLABEL:'Element'); ?>
			<a href="#" onclick="return dwcDoc('element')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="element" value="<?php echo isset($occArr['element'])?$occArr['element']:''; ?>" onchange="fieldChanged('element');" />
		</div>
		<div id="slidePropertiesDiv">
			<?php echo (defined('SLIDEPROPERTIESLABEL')?SLIDEPROPERTIESLABEL:'Slide Properties'); ?>
			<a href="#" onclick="return dwcDoc('slideProperties')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="slideproperties" value="<?php echo isset($occArr['slideproperties'])?$occArr['slideproperties']:''; ?>" onchange="fieldChanged('slideproperties');" />
		</div>
		<div id="geologicalContextIdDiv">
			<?php echo (defined('GEOLOGICALCONTEXTIDLABEL')?GEOLOGICALCONTEXTIDLABEL:'Context ID'); ?>
			<a href="#" onclick="return dwcDoc('geologicalContextID')"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="geologicalcontextid" value="<?php echo isset($occArr['geologicalcontextid'])?$occArr['geologicalcontextid']:''; ?>" onchange="fieldChanged('geologicalcontextid');" />
		</div>
	</div>
</fieldset>
=======
			<?= $LANG['ELEMENT_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('element')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="element" value="<?php echo isset($occArr['element'])?$occArr['element']:''; ?>" onchange="fieldChanged('element');" />
		</div>
		<div id="slidePropertiesDiv">
			<?= $LANG['SLIDE_PROPERTIES_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('slide-properties')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="slideProperties" value="<?php echo isset($occArr['slideProperties'])?$occArr['slideProperties']:''; ?>" onchange="fieldChanged('slideProperties');" />
		</div>
		<div id="geologicalContextIDDiv">
			<?= $LANG['GEOLOGICAL_CONTEXT_ID_LABEL'] ?>
			<a href="#" onclick="return dwcDoc('geological-context-id')" tabindex="-1"><img class="docimg" src="../../images/qmark.png" /></a><br/>
			<input type="text" name="geologicalContextID" value="<?php echo isset($occArr['geologicalContextID'])?$occArr['geologicalContextID']:''; ?>" onchange="fieldChanged('geologicalContextID');" />
		</div>
	</div>
</fieldset>
>>>>>>> origin
