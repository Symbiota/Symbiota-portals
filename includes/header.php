<SCRIPT>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</SCRIPT>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="clear:both;">
				<div style="clear:both;margin-left:auto;margin-right:auto;">
					<a href="<?php echo $CLIENT_ROOT; ?>/../" ><img style="" src="/images/MDEheader-FY23-updated.jpg"/></a>
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							Welcome <?php echo $USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT.'/profile/index.php?refurl='.$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
								Log In
							</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
								New Account
							</a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/../" >Home</a>
					</li>
                    <li>
                    	<a href="<?php echo $CLIENT_ROOT; ?>/../flora/collections/harvestparams.php">Flora Database</a>
                    </li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Image Search</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Browse Images</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?" >Inventories</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1" >Mexico</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=5" >USA</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Interactive Tools</a>
						<!-- <ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=1" >Dynamic Checklist 1</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=2" >Dynamic Checklist 2</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=3" >Dynamic Checklist 3</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist&tid=4" >Dynamic Checklist 4</a>
							</li>
						</ul> -->
					</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">
