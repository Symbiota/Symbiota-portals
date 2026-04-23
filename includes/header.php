<?php
     $TK_MAINTENANCE = $SERVER_ROOT . '/tk/includes/maintenance_banner.php';
     if (is_file($TK_MAINTENANCE)) {
         include_once($TK_MAINTENANCE);
         if (function_exists('tk_render_maintenance_banner')) {
             tk_render_maintenance_banner();
         }
     }
 ?>

<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$collectionSearchPage = !empty($SHOULD_USE_HARVESTPARAMS) ? '/collections/index.php' : '/collections/search/index.php';
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
					<span id="profile">
						<form name="profileForm" method="post" action="<?= $CLIENT_ROOT . '/profile/viewprofile.php' ?>">
							<button class="button button-tertiary bottom-breathing-room-rel left-breathing-room-rel" name="profileButton" type="submit"><?= $LANG['H_MY_PROFILE'] ?></button>
						</form>
					</span>
					<span id="logout">
						<form name="logoutForm" method="post" action="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="logoutButton" type="submit"><?= $LANG['H_LOGOUT'] ?></button>
						</form>
					</span>
					<?php
				} else {
					?>
					<span id="contactUs">
						<button class="button button-tertiary bottom-breathing-room-rel left-breathing-room-rel" onclick="window.location.href='#'"><?= $LANG['H_CONTACT_US'] ?></button>
					</span>
					<span id="login">
						<form name="loginForm" method="post" action="<?= $CLIENT_ROOT . "/profile/index.php" ?>">
							<input name="refurl" type="hidden" value="<?= htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES) ?>">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="loginButton" type="submit"><?= $LANG['H_LOGIN'] ?></button>
						</form>
					</span>
					<?php
				}
				?>
			</nav>
						<div class="top-brand custom">
				<a href="<?= $CLIENT_ROOT ?>">
					<div class="image-container">
					</div>
				</a>
                <?php
                         $mtitle = preg_replace_callback('/\|(.*?)\|/', function($matches) {
                                 $captured = $matches[1];
                                 $modified = '<span class="dark">' . $captured . '</span>';
                                 return $modified;
                             }, $LANG['H_MAST_HEAD_TITLE']);
                 ?>
				<div class="brand-name">
                    <h1 class="header-mast-title light"><?= $mtitle ?></h1>
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
					                    <li class="search-menu">
                        <a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>"><?= $LANG['H_MENU_EXPLORE'] ?></a>
                        <ul>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>"><?= $LANG['H_SEARCH'] ?></a>
                            </li>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . '/collections/search/index.php' ?>"><?= $LANG['H_ADVANCED_SEARCH'] ?></a>
                            </li>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . '/collections/map/index.php' ?>"><?= $LANG['H_MAP_SEARCH'] ?></a>
                            </li>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . '/collections/exsiccati/index.php' ?>"><?= $LANG['H_MENU_EXSICCATI'] ?></a>
                            </li>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . '/imagelib/search.php' ?>"><?= $LANG['H_IMAGE_SEARCH'] ?></a>
                            </li>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . '/imagelib/index.php' ?>"><?= $LANG['H_IMAGE_BROWSER'] ?></a>
                            </li>
                            <li class="search-menu">
                                <a href="<?= $CLIENT_ROOT . '/imagelib/contributors.php' ?>"><?= $LANG['H_IMAGE_CONTRIBUTORS'] ?></a>
                            </li>
                        </ul>
                    </li>

					                    <li class="crowdsource-menu">
                        <a href="<?= $CLIENT_ROOT . '/collections/specprocessor/crowdsource/central.php' ?>"><?= $LANG['H_MENU_CROWDSOURCE'] ?></a>
                        <ul>
                            <li class="crowdsource-menu">
                                <a href="<?= $CLIENT_ROOT . '/misc/crowdsource.php' ?>"><?= $LANG['H_MENU_CROWDSOURCE_GETINVOLVED'] ?></a>
                            </li>
                            <li class="crowdsource-menu">
                                <a href="<?= $CLIENT_ROOT . '/collections/specprocessor/crowdsource/central.php' ?>"><?= $LANG['H_MENU_CROWDSOURCE_SCOREBOARD'] ?></a>
                            </li>
                        </ul>
                    </li>

					                    <li class="checklists-menu">
                        <a href="<?= $CLIENT_ROOT . '/projects/index.php?' ?>"><?= $LANG['H_MENU_CHECKLISTS'] ?></a>
                        <ul>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=13' ?>"><?= $LANG['H_MENU_CHECKLISTS_FUNGI_WORLD'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=4' ?>"><?= $LANG['H_MENU_CHECKLISTS_FUNGI_NORTH_AMERICA'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=3' ?>"><?= $LANG['H_MENU_CHECKLISTS_MAFUNGI_NORTH_AMERICA_GROUPS'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=8' ?>"><?= $LANG['H_MENU_CHECKLISTS_MAFUNGI_NORTH_AMERICA_LOCAL'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=2' ?>"><?= $LANG['H_MENU_CHECKLISTS_MAFUNGI_NORTH_AMERICA_REGIONS'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=7' ?>"><?= $LANG['H_MENU_CHECKLISTS_MAFUNGI_WORLD_COUNTRIES'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=11' ?>"><?= $LANG['H_MENU_CHECKLISTS_MIFUNGI_NORTH_AMERICA_REGIONS'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/projects/index.php?pid=12' ?>"><?= $LANG['H_MENU_CHECKLISTS_MIFUNGI_WORLD_COUNTRIES'] ?></a>
                            </li>
                            <li class="checklists-menu">
                                <a href="<?= $CLIENT_ROOT . '/checklists/dynamicmap.php?interface=checklist' ?>"><?= $LANG['H_MENU_CHECKLISTS_DYNAMIC'] ?></a>
                            </li>
                        </ul>
                    </li>


					                    <li class="other-menu">
                        <a href="#"><?= $LANG['H_MENU_OTHER'] ?></a>
                        <ul>
                            <li class="other-menu">
                                <a href="<?= $CLIENT_ROOT . '/collections/misc/collstats.php' ?>"><?= $LANG['H_MENU_OTHER_STATS'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="<?= $CLIENT_ROOT . '/tk/?/taxonomy-report' ?>"><?= $LANG['H_MENU_OTHER_TK_REPORT'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="<?= $CLIENT_ROOT . '/tk/?/genbank' ?>"><?= $LANG['H_MENU_OTHER_TK_GENBANK'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="<?= $CLIENT_ROOT . '/tk/?/' ?>"><?= $LANG['H_MENU_OTHER_TK'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="<?= $CLIENT_ROOT . '/misc/links.php' ?>"><?= $LANG['H_MENU_OTHER_DOCS'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="https://bryophyteportal.org/portal" target="_blank" rel="noopener noreferrer"><?= $LANG['H_MENU_LINK_BRYO'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="https://lichenportal.org/portal" target="_blank" rel="noopener noreferrer"><?= $LANG['H_MENU_LINK_LICH'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="https://swbiodiversity.org/seinet" target="_blank" rel="noopener noreferrer"><?= $LANG['H_MENU_LINK_SEINET'] ?></a>
                            </li>
                            <li class="other-menu">
                                <a href="https://symbiota.org" target="_blank" rel="noopener noreferrer"><?= $LANG['H_MENU_LINK_SYMBHELP'] ?></a>
                            </li>
                        </ul>
                    </li>

										<li class="acknowledgements-menu">
                        <a href="<?= $CLIENT_ROOT . '/misc/acknowledgements.php' ?>"><?= $LANG['H_MENU_ACK'] ?></a>
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
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
							<option value="pt" <?= ($LANG_TAG=='pt'?'SELECTED':'') ?>>Português</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
