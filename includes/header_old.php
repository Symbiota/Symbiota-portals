<SCRIPT>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</SCRIPT>
<table id="maintable" cellspacing="0">
	<tr style="" >
		<td id="header" colspan="3">
			<!-- <div style="height:110px;background-image:url(<?php //echo $CLIENT_ROOT; ?>/images/layout/defaultheader.jpg);background-repeat:no-repeat;position:relative;"> -->
			<div style="clear:both;background-color:#f2f0e6;height:200px;border-bottom:1px solid #333333;">
				<div style="float:left;">
					<img style="" src="<?php echo $CLIENT_ROOT; ?>/images/layout/cmwh.png" />
				</div>
				<div style="float:right;">
					<img style="" src="<?php echo $CLIENT_ROOT; ?>/images/layout/midwest_herbaria_banner.gif" />
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
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
					</li>
                                        <li>
                                                <a href="#">Specimen Search</a>
                                                <ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank">Map Search</a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php">Exsiccati Search</a>
                                                        </li>
                                                </ul>
                                        </li>
 					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Images</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php">Browse</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php">Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Flora Projects</a>
						<ul>
							<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=94">State Inventories</a></li>
							<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=124">Indiana</a></li>
							<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=126">Ohio</a></li>
							<li><a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=133">Wisconsin</a></li>
							<li><a href="<?php echo $CLIENT_ROOT; ?>/checklists/checklist.php?cl=4892">Aquatic Invasive Plant Guide</a></li>
						</ul>
					</li>
					<li>
						<a href="#" >Interactive Tools</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic Checklist</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" >Dynamic Key</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/central.php" >Crowdsource</a>
					</li>
				</ul>
			</div>
		</td>
	</tr>
    <tr>
	<td id='middlecenter'  colspan="3">
