<div class="menu" style="margin-top:30px;">
	<div class="menuheader">
		<a href="<?php echo $CLIENT_ROOT; ?>/index.php">
			Homepage
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php">
			Search Collections
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php">
			Exsiccati
		</a>
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
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php">
			Image Library
		</a>
	</div>
	<div class="menuitem">
		<a href="https://symbiota.org/docs/" target="_blank">
			Symbiota Help Page
		</a>
	</div>
	<div class="menusubheader">
		Other Networks
	</div>
	<div class="menuitem">
		<a href="http://ngpherbaria.org/" target="_blank">
			Great Plains
		</a>
	</div>
	<div class="menuitem">
		<a href="http://intermountainbiota.org" target="_blank">
			Intermountain
		</a>
	</div>
	<div class="menuitem">
		<a href="http://www.madrean.org/maba/symbflora/" target="_blank">
			MABA Flora
		</a>
	</div>
	<div class="menuitem">
		<a href="http://swbiodiversity.org/" target="_blank">
			SEINet
		</a>
	</div>
	<div class="menuitem">
		<a href="http://sernecportal.org" target="_blank">
			SERNEC
		</a>
	</div>
	<div style="20px 0px">
		<hr/>
	</div>
	<?php
	if($USER_DISPLAY_NAME){
		?>
		<div class='menuitem'>
			Welcome <?php echo $USER_DISPLAY_NAME; ?>!
		</div>
		<div class="menuitem">
			<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
		</div>
		<div class="menuitem">
			<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
		</div>
		<?php
	}
	else{
		?>
		<div class="menuitem">
			<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME']."?".htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
				Log In
			</a>
		</div>
		<div class="menuitem">
			<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
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
