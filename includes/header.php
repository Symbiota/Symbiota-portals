<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
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
					<h1>Herbario Virtual Austral Americano</h1>
					<h2></h2>
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
						<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">
							<?= $LANG['H_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/imagelib/index.php">
							<?= $LANG['H_IMAGE_LIBRARY'] ?>
						</a>
					</li>
                                        <li>
                                                <a href="<?= $CLIENT_ROOT ?>/games/index.php">
                                                        <?= $LANG['H_GAMES'] ?>
                                                </a>
                                        </li>
					<li>
                                                <a href="#"><?= $LANG['H_USEFUL_LINKS'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="#"><?= $LANG['H_ARGENTINA'] ?></a>
                                                                <ul>
                                                                        <li>
                                                                                <a href="http://www.floraargentina.edu.ar/" target="_blank"><?= $LANG['H_FLORA_ARGENTINA'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://www2.darwin.edu.ar/Proyectos/FloraArgentina/FA.asp"><?= $LANG['H_INSTITUTO_DARWINION'] ?></a>
                                                                        </li>
                                                                </ul>
							</li>
                                                        <li>
                                                                <a href="#"><?= ['H_CHILE'] ?></a>
                                                                <ul>
                                                                        <li>
                                                                                <a href="http://www.mobot.org/mobot/research/chile/welcome.shtml" target="_blank"><?= $LANG['H_FLORA_CHILE_MOBOT'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://www.chilebosque.cl/" target="_blank"><?= $LANG['H_CHILE_BOSQUE'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://www.trekkingchile.com/flora/index.html" target="_blank"><?= $LANG['H_FLORA_CHILENA'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://www.chileflora.com/Shome.htm" target="_blank"><?= $LANG['H_CHILE_FLORA'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://www.florachilena.cl/" target="_blank"><?= $LANG['H_ENCICLOPEDIA_CHILENA'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://www.chlorischile.cl/" target="_blank"><?= $LANG['H_CHLORIS_CHILENSIS'] ?></a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                        <li>
                                                                <a href="#"><?= ['H_GENERAL_RESOURCES'] ?></a>
                                                                <ul>
                                                                        <li>
                                                                                <a href="http://swbiodiversity.org/seinet/index.php" target="_blank"><?= $LANG['H_SEINET'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://symbiota.org/cotram/index.php"><?= $LANG['H_COTRAM'] ?></a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="http://symbiota.org/"><?= $LANG['H_SYMBIOTA'] ?></a>
                                                                        </li>
                                                                </ul>
                                                        </li>
                                                </ul>
                                        </li>
                                        <li>
                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php"><?= $LANG['H_FLORISTIC_PROJECTS'] ?></a>
                                                <ul>
                                                        <li>
                                                                <a href="<?= $CLIENT_ROOT ?>/projects/index.php?pid=2"><?= $LANG['H_FLORA_OF_CHILE'] ?></a>
                                                        </li>
                                                </ul>
                                        </li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist">
							<?= $LANG['H_DYNAMIC_CHECKLIST'] ?>
						</a>
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
							<!-- <option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option> -->
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
