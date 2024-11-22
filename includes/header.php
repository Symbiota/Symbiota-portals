<SCRIPT LANGUAGE=JAVASCRIPT>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</SCRIPT>
<table id="maintable" cellspacing="0">
	<tr style="" >
		<td id="header" colspan="3">
			<?php 
			if(isset($HEADER_URL) && $HEADER_URL){
			    ?>
                            <div style="height:200px;width:100%">
				<img src="<?php echo $HEADER_URL; ?>" style="width:100%;height:200px" />
                            </div>
			    <?php
			}
			else{
		            ?>
			    <div style="background-image:url(<?php echo $CLIENT_ROOT; ?>/images/layout/background.jpg);background-repeat:repeat-x;background-position:top;width:100%;clear:both;height:200px;border-bottom:1px solid #333333;">
				<div style="float:left;">
					<img style="border:0px;" src="<?php echo $CLIENT_ROOT; ?>/images/layout/az_nm_header.jpg" />
				</div>
				<div style="float:right;">
					<img style="" src="<?php echo $CLIENT_ROOT; ?>/images/layout/Cact_Carnegiea_gigantea_fl2.png" />
				</div>
			    </div>
			    <?php
			}
			?>
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
						<a href="#" >Specimen Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php">Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php">Exsiccati Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Image Browser</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Search Images</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php">Flora Projects</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1" >Arizona</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=2" >New Mexico</a>
							</li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=21" >Colorado Plateau</a>
                                                        </li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=75" >Plant Atlas of Arizona (PAPAZ)</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=3" >Sonoran Desert</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=4" >Teaching Checklists</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Agency Floras</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=5" >NPS - Intermountain</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=24" >USFWS - Region 2</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=148" >USFS - Southwestern Region</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=82" >BLM Flora</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=83" >Coronado NF</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=144" >Tonto NF</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Dynamic Floras</a>
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
	<a href="#" >Additional Websites</a>
	<ul>
		<li><a href='http://newmexicoflores.com' target='_blank'>New Mexico Flores</a></li>
		<li><a href='https://aznps.com/papaz-project/' target='_blank'>Plant Atlas Project of Arizona (PAPAZ)</a></li>
		<li><a href='https://www.swcoloradowildflowers.com' target='_blank'>Southwest Colorado Wildflowers</a></li>
		<li><a href='http://gilaflora.com' target='_blank'>Vascular Plants of the Gila Wilderness</a></li>
		<li><a href="https://midwestherbaria.org" target="_blank" >Consortium of Midwest Herbaria</a></li>
		<li><a href="https://www.soroherbaria.org" target="_blank">Consortium of Southern Rocky Mountain Herbaria</a></li>
		<li><a href="https://intermountainbiota.org" target="_blank" >Intermountain Region Herbaria Network (IRHN)</a></li>
		<li><a href="https://midatlanticherbaria.org" target="_blank" >Mid-Atlantic Herbaria</a></li>
		<li><a href="https://nansh.org" target="_blank" >North American Network of Small Herbaria (NANSH)</a></li>
		<li><a href="https://ngpherbaria.org" target="_blank" >Northern Great Plains Herbaria</a></li>
		<li><a href="https://herbanwmex.net" target="_blank" >Red de Herbarios del Noroeste de M&eacute;xico (northern Mexico)</a></li>
		<li><a href="https://sernecportal.org" target="_blank">SERNEC - Southeastern USA</a></li>
		<li><a href="https://portal.torcherbaria.org" target="_blank">Texas Oklahoma Regional Consortium of Herbaria (TORCH)</a></li>
	</ul>
</li>

					<li>
						<a href="#" >Resources</a>
						<ul>
							<li>
								<a href="https://biokic.github.io/symbiota-docs/" target="_blank">Symbiota Docs</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UC7glMVLRnTA6ES3VTsci7iQ" target="_blank">Video Tutorials</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php">Collections in SEINet</a>
							</li>
							<li>
								<a href="https://symbiota.org/symbiota-portals/" target="_blank">Joining a Portal</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</td>
	</tr>
    <tr>
		<td id='middlecenter'  colspan="3">		
