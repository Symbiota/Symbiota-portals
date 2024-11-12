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
					<span style="white-space: nowrap;box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="<?= $CLIENT_ROOT ?>">
					<!--<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/logo_symbiota.png" alt="Symbiota logo">
					</div>-->
				</a>
				<div class="brand-name">
					<h1>Neotropical Flora</h1>
					<!--<h2>Redesigned by the Symbiota Support Hub</h2>-->
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
						<a href="#"><?= $LANG['H_SEARCH'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/search/index.php" rel="noopener noreferrer"><?= $LANG['H_COLLECTIONS'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" rel="noopener noreferrer"><?= $LANG['H_MAP'] ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $LANG['H_IMAGES'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/imagelib/index.php" rel="noopener noreferrer"><?= $LANG['H_IMAGE_BROWSER'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/imagelib/search.php" rel="noopener noreferrer"><?= $LANG['H_IMAGE_SEARCH'] ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $LANG['H_MESOAMERICA'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=10" rel="noopener noreferrer"><?= $LANG['H_COSTA_RICA'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=15" rel="noopener noreferrer"><?= $LANG['H_PANAMA'] ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $LANG['H_SOUTH_AMERICA'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=17" rel="noopener noreferrer"><?= $LANG['H_COLOMBIA'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=1" rel="noopener noreferrer"><?= $LANG['H_ECUADOR'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=16" rel="noopener noreferrer"><?= $LANG['H_PERU'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2" rel="noopener noreferrer"><?= $LANG['H_GALAPAGOS'] ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $LANG['H_TAXONOMIC_LISTS'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=9" rel="noopener noreferrer"><?= $LANG['H_NEW_WORLD_MYRTACEAE'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=23" rel="noopener noreferrer"><?= $LANG['H_PODOSTEMACEAE'] ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $LANG['H_DYNAMIC_TOOLS'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist" rel="noopener noreferrer"><?= $LANG['H_DYNAMIC_CHECKLIST'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=key" rel="noopener noreferrer"><?= $LANG['H_DYNAMIC_KEY'] ?></a>
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
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<!--<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>-->
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
