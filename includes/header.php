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
					<div class="image-container">
						<!--
						<img src="<?= $CLIENT_ROOT ?>/images/layout/logo_symbiota.png" alt="Symbiota logo">
					</div>
				-->
				<div class="brand-name">
					<h1>MID-ATLANTIC HERBARIA CONSORTIUM</h1>
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
						<a href="#">Search</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">Search Collections</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank">Map Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Images</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/index.php">Image Browser</a>
							</li>
							<li>
							<a href="<?= $CLIENT_ROOT; ?>/imagelib/search.php">Search Images</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Mid-Atlantic Floras</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=117">Delaware</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=118">Maryland</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=119">New Jersey</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=120">New York</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=121">Pennsylvania</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=115#">NYC EcoFlora</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/checklist.php?cl=5058&pid=115">Vascular Checklist</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/ident/key.php?cl=4905&proj=115&taxon=All+Species">Identification Key</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/checklist.php?cl=4423&pid=115">Central Park</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=115">Additional Local Lists</a>
							</li>
							<li>
								<a href="https://www.nybg.org/science-project/new-york-city-ecoflora/">More Details About Project</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Interactive Tools</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic Checklist</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" >Dynamic Key</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/collections/specprocessor/crowdsource/central.php">
							Crowdsource Data Entry
						</a>
					</li>
					<li>
						<a href="#">Other SEINet Portals</a>
						<ul>
							<li>
								<a href="http://swbiodiversity.org/">Arizona-New Mexico Chapter</a>
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
								<a href="https://nansh.org/">North American Network of Small Herbaria (NANSH)</a>
							</li>
							<li>
								<a href="https://ngpherbaria.org/">Northern Great Plains Herbaria</a>
							</li>
							<li>
								<a href="http://madrean.org/symbflora/projects/index.php?proj=74">Madrean Archipelago Biodiversity Assessment (MABA) Flora</a>
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
