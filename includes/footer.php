<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://www.fws.gov/" target="_blank" aria-label="US Fish and Wildlife Service">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/usfws.png" alt="S Fish and Wildlife Service logo" />
		</a>
		<a href="https://www.nps.gov/" target="_blank" aria-label="US National Parks Service">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/us_nps.png" alt="US National Parks Service logo" />
		</a>
		<a href="https://www.fs.usda.gov/" target="_blank" aria-label="US Forest Service">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/usfs.png" alt="US Forest Service logo" />
		</a>
		<a href="https://www.blm.gov/" target="_blank" aria-label="US Bureau of Land Management">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/blm.png" alt="US Bureau of Land Management logo" />
		</a>
		<a></a>
		<a href="https://biodiversity.ku.edu/" target="_blank" title="KU BI" aria-label="Visit KU BI website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/KUBI_bw.png"  alt="KU BI Logo" />
		</a>
		<a href="https://symbiota.org/" target="_blank" title="<?= $LANG['F_SSH'] ?>" aria-label="Visit Symbiota website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/SSH.png"  alt="<?= $LANG['F_SSH_LOGO'] ?>" />
		</a>
	</div>
	<p>
		This project made possible by the U.S. Fish and Wildlife Service, Department of the Interior.
	</p>
	<p>
		<?= $LANG['F_MORE_INFO'] ?>, <a href="https://symbiota.org/docs" target="_blank" rel="noopener noreferrer"><?= $LANG['F_READ_DOCS'] ?></a> <?= $LANG['F_CONTACT'] ?>
		<a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_SSH'] ?></a>.
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
