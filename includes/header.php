<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
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
						<a href="#"><?= $LANG['H_INVENTORIES'] ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=17" rel="noopener noreferrer"><?= $LANG['H_COLOMBIA'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=10" rel="noopener noreferrer"><?= $LANG['H_COSTA_RICA'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=1" rel="noopener noreferrer"><?= $LANG['H_ECUADOR'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=15" rel="noopener noreferrer"><?= $LANG['H_PANAMA'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=16" rel="noopener noreferrer"><?= $LANG['H_PERU'] ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2" rel="noopener noreferrer"><?= $LANG['H_GALAPAGOS'] ?></a>
							</li>
							<li>-----------------------------------</li>
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
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<!--<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>-->
						</select>
					</li>
					<div style="float: right">
						<?php
						if ($USER_DISPLAY_NAME) {
							?>
							<span id="profile">
								<form name="profileForm" method="post" action="<?= $CLIENT_ROOT . '/profile/viewprofile.php' ?>">
									<button name="profileButton" type="submit"><?= $LANG['H_MY_PROFILE'] ?></button>
								</form>
							</span>
							<span id="logout">
								<form name="logoutForm" method="post" action="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout">
									<button name="logoutButton" type="submit"><?= $LANG['H_LOGOUT'] ?></button>
								</form>
							</span>
							<?php
						} else {
							?>
							<span id="signin">
								<form name="siginForm" method="post" action="<?= $CLIENT_ROOT . '/profile/index.php?refurl=' . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
									<button name="logoutButton" type="submit"><?= $LANG['H_LOGIN'] ?></button>
								</form>
							</span>
							<?php
						}
						?>
					</div>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
