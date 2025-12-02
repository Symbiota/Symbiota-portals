<div class="menu">
	<div class='menuheader'>
		<a href='<?php echo $CLIENT_ROOT; ?>/index.php'>
			Homepage
		</a>
	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/collections/index.php?catid=1'>
			Search Collections
		</a>
	</div>
	<div class='menuitem'>
	    	<a href='<?php echo $CLIENT_ROOT; ?>/imagelib/index.php'>
			Image Library
		</a>
	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/misc/links.php'>
			Links
		</a>
	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php'>
			Crowdsourcing
		</a>
	</div>
	<div class="menusubheader">
		<a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php?'>
			Flora Projects
		</a>
	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=10'>
			Regional Floras
		</a>
    	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=77'>
			Colorado Floras
		</a>
    	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=78'>
			Utah Floras
		</a>
    	</div>
	<div class="menuitem">
		<a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=21'>
			Colorado Plateau
		</a>
	</div>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=4'>
			Teaching Checklists
		</a>
    	</div>
	<div class="menusubheader">
		Dynamic Tools
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist">
			Dynamic Checklist
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key">
			Dynamic Key
		</a>
	</div>
	<div style="margin-top:20px;">
		<hr/>
	</div>

	<?php
	if($USER_DISPLAY_NAME){
		?>
		<div class='menuitem'>
			Welcome <?php echo $USER_DISPLAY_NAME; ?>!
		</div>
		<div class='menuitem'>
			<a href='<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php'>My Profile</a>
		</div>
		<div class='menuitem'>
			<a href='<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout'>Logout</a>
		</div>
		<?php
	}
	else{
		?>
		<div class='menuitem'>
			<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME']."?".htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
				Log In
			</a>
		</div>
		<div class='menuitem'>
			<a href='<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php'>
				New Account
			</a>
		</div>
		<?php
	}
	?>
	<div class='menuitem'>
		<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
	</div>
</div>
