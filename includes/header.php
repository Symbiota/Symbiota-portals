<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<!--
				<a href="<?= $CLIENT_ROOT ?>">
					<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/logo_symbiota.png" alt="Symbiota logo">
					</div>
				</a>
				-->
				<div class="brand-name">
					<h1>SEINet</h1>
					<h2>Arizona - New Mexico Chapter</h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="#">Specimen Search</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/index.php">Search Collections</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php">Map Search</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/exsiccati/index.php">Exsiccati Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Images</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/imagelib/index.php">Image Browser</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/imagelib/search.php">Search Images</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/projects/index.php">Flora Projects</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=1">Arizona</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2">New Mexico</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=21">Colorado Plateau</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=75">Plant Atlas of Arizona (PAPAZ)</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=3">Sonoran Desert</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=4">Teaching Checklists</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Agency Floras</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=5">NPS - Intermountain</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=24">USFWS - Region 2</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=148">USFS - Southwestern Region</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=82">BLM Flora</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=83">Coronado NF</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=144">Tonto NF</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Dynamic Floras</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist">Dynamic Checklist</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=key">Dynamic Key</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Additional Websites</a>
						<ul>
							<li>
								<a href="http://newmexicoflores.com/">New Mexico Flores</a>
							</li>
							<li>
								<a href="https://aznps.com/papaz-project/">Plant Atlas Project of Arizona (PAPAZ)</a>
							</li>
							<li>
								<a href="https://www.swcoloradowildflowers.com/">Southwest Colorado Wildflowers</a>
							</li>
							<li>
								<a href="http://gilaflora.com/">Vascular Plants of the Gila Wilderness</a>
							</li>
							<li>
								<a href="https://midwestherbaria.org/">Consortium of Midwest Herbaria</a>
							</li>
							<li>
								<a href="https://www.soroherbaria.org/">Consortium of Southern Rocky Mountain Herbaria</a>
							</li>
							<li>
								<a href="https://intermountainbiota.org/">Intermountain Region Herbaria Network (IRHN)</a>
							</li>
							<li>
								<a href="https://midatlanticherbaria.org/">Mid-Atlantic Herbaria Consortium</a>
							</li>
							<li>
								<a href="https://nansh.org/">North American Network of Small Herbaria (NANSH)</a>
							</li>
							<li>
								<a href="https://ngpherbaria.org/">Northern Great Plains Herbaria</a>
							</li>
							<li>
								<a href="https://herbanwmex.net/">Red de Herbarios Mexicanos</a>
							</li>
							<li>
								<a href="https://sernecportal.org/">SERNEC - Southeastern USA</a>
							</li>
							<li>
								<a href="https://portal.torcherbaria.org/">Texas Oklahoma Regional Consortium of Herbaria (TORCH)</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Resources</a>
						<ul>
							<li>
								<a href="https://biokic.github.io/symbiota-docs/">Symbiota Docs</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UC7glMVLRnTA6ES3VTsci7iQ">Video Tutorials</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/misc/collprofiles.php">Collections in SEINet</a>
							</li>
							<li>
								<a href="https://symbiota.org/symbiota-portals/">Joining a Portal</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<!--
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
					-->
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
