<?php
$bgUrl = $CLIENT_ROOT."/images/layout/header.jpg";
?>
<SCRIPT>
	<!--
	if (top.frames.length!=0)
	  top.location=self.document.location;
	// -->
</SCRIPT>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="clear:both">
				<div style="clear:both;width:850px"><img style="width:850px" src="<?php echo $CLIENT_ROOT; ?>/images/layout/NewBannerGreen.jpg" /></div>
			</div>
		</td>
	</tr>
    <tr>
	<?php 
	if($displayLeftMenu){ 
		?> 
		<td id='middleleft' background="<?php echo $CLIENT_ROOT;?>/images/layout/defaultleftstrip.gif" style="background-repeat:repeat-y;"> 
			<div style="">
				<?php include($SERVER_ROOT."/includes/leftmenu.php"); ?>
			</div>
		</td>
		<?php 
	}
				else{
		?>
			        	<td id="middleleftnomenu" background="<?php echo $CLIENT_ROOT;?>/images/layout/defaultleftstrip.gif">
        					<div style='width:20px;'></div>
			        	</td>
				<?php 
				}
			?>
		</td>
	<td id="middlecenter">
