<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://biodiversity.ku.edu/" target="_blank" title="KU Biodiversity Institute & Natural History Museum" aria-label="Visit KUBI website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_ku-bi.png"  alt="KU BI logo ?>" />
		</a>
		<a href="https://symbiota.org/" target="_blank" title="<?= $LANG['F_SSH'] ?>" aria-label="Visit Symbiota website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/SSH.png"  alt="<?= $LANG['F_SSH_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_MORE_INFO'] ?>, <a href="https://docs.symbiota.org/about/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_READ_DOCS'] ?></a> <?= $LANG['F_CONTACT'] ?>
		<a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_SSH'] ?></a>. | <?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
