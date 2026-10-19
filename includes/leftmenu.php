<div class="menu">
	<div class="menuheader">
		<a href="<?php echo $CLIENT_ROOT; ?>/index.php">
			<?php echo $DEFAULT_TITLE; ?> Homepage
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php">
			Search Collections
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=3412&pid=86">
			Iowa
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=3410&pid=86">
			Kansas
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=3411&pid=86">
			Missouri
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=3409&pid=86">
			Nebraska
		</a>
	</div>
	<div class="menuitem">
		<a href="http://ashipunov.info/shipunov/fnddb/index.htm" target="_blank">
			North Dakota
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=3408&pid=86">
			South Dakota
		</a>
	</div>
	<div class="menuitem">
		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=4">
                        Teaching Checklists
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
	<div>
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
