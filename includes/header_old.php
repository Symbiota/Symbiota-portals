<?php
include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>
<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Playfair+Display+SC" rel="stylesheet" />
<style>
	.header1 { font-family: 'EB Garamond', serif; font-size: 64px; font-style: italic; margin: 10px 0px 0px 60px; }
	.header2 { font-family: 'Playfair Display SC', serif; font-size: 24px; margin: 0px 10px 10px 30px; }
</style>
<script type="text/javascript" src="<?php echo $CLIENT_ROOT; ?>/js/symb/base.js?ver=171023"></script>
<script type="text/javascript">
	//Uncomment following line to support toggling of database content containing DIVs with lang classes in form of: <div class="lang en">Content in English</div><div class="lang es">Content in Spanish</div>
	//setLanguageDiv();
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="background-color:black;height:110px;">
				<div style="float:right;">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/header.jpg" />
				</div>
				<div style="float:left">
					<div class="header1">Neotropical Flora</div>
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Logout')?></a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>"><?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php"><?php echo (isset($LANG['H_NEW_ACCOUNT'])?$LANG['H_NEW_ACCOUNT']:'New Account')?></a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<select onchange="setLanguage(this)">
							<option value="en">English</option>
							<option value="es" <?php echo ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
						</select>
						<?php
						if($IS_ADMIN){
							echo '<a href="'.$CLIENT_ROOT.'/content/lang/admin/langmanager.php?refurl='.$_SERVER['PHP_SELF'].'"><img src="'.$CLIENT_ROOT.'/images/edit.png" style="width:12px" /></a>';
						}
						?>
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" ><?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_SPECIMENS'])?$LANG['H_SPECIMENS']:'Specimens'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" ><?php echo (isset($LANG['H_COLLECTIONS'])?$LANG['H_COLLECTIONS']:'Collections'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_IMAGES'])?$LANG['H_IMAGES']:'Images'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" ><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" ><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Search Images'); ?></a>
							</li>
						</ul>
					</li>
                                        <li>
                                                <a href="#" ><?php echo 'Mesoamerica'; ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=10"><?php echo 'Costa Rica'; ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=15"><?php echo 'Panama'; ?></a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_SOUTH_AMER'])?$LANG['H_SOUTH_AMER']:'South America'); ?></a>
 						<ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=17"><?php echo 'Colombia'; ?></a>
                                                        </li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1"><?php echo (isset($LANG['H_ECUADOR'])?$LANG['H_ECUADOR']:'Ecuador'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=16"><?php echo (isset($LANG['H_PERU'])?$LANG['H_PERU']:'Peru'); ?></a>
							</li>
                                                        <li>
                                                		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=2"><?php echo (isset($LANG['H_GALAPAGOS'])?$LANG['H_GALAPAGOS']:'Galápagos Islands'); ?></a>
                                                        </li>
						</ul>
					</li>
                                        <li>
                                                <a href="#" ><?php echo (isset($LANG['H_TAXONOMIC_LISTS'])?$LANG['H_TAXONOMIC_LISTS']:'Taxonomic Lists'); ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=20"><?php 'Monnina'; ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=9"><?php echo (isset($LANG['H_MYRT'])?$LANG['H_MYRT']:'New World Myrtaceae'); ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=23"><?php echo 'Podostemaceae'; ?></a>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="#" ><?php echo (isset($LANG['H_DYNAMIC_TOOLS'])?$LANG['H_DYNAMIC_TOOLS']:'Dynamic Tools'); ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" ><?php echo (isset($LANG['H_DYNAMIC_CHECKLIST'])?$LANG['H_DYNAMIC_CHECKLIST']:'Dynamic Checklist'); ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" ><?php echo (isset($LANG['H_DYNAMIC_KEY'])?$LANG['H_DYNAMIC_KEY']:'Dynamic Key'); ?></a>
                                                        </li>
						</ul>
                                        </li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_RESOURCES'])?$LANG['H_RESOURCES']:'Resources'); ?></a>
						<ul>
                                                        <li>
                                                                <a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="http://cotram.org" target="_blank" ><?php echo (isset($LANG['H_COTRAM'])?$LANG['H_COTRAM']:'CoTRAM Portal'); ?></a>
                                                        </li>
                                                        <li>
                                                        	<a href="http://stricollections.org" target="_blank" ><?php echo (isset($LANG['H_STRI'])?$LANG['H_STRI']:'STRI Portal'); ?></a>
                                                        </li>
                                                        <li>
                                                                <a href="https://www.youtube.com/channel/UC7glMVLRnTA6ES3VTsci7iQ" target="_blank" ><?php echo 'Symbiota Tutorials'; ?></a>
                                                        </li>
 							<li>
								<a href="http://symbiota.org/docs/symbiota-introduction/symbiota-help-pages/" target="_blank" ><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Help'); ?></a>
							</li>
							<li>
								<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'><?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap'); ?></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">
