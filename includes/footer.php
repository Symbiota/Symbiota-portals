<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://symbiota.org/" target="_blank" title="<?= $LANG['F_SSH'] ?>" aria-label="<?= $LANG['F_SSH'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/SSH.png"  alt="<?= $LANG['F_SSH_LOGO'] ?>" />
		</a>
		<a href="https://www.gbif.org/" target="_blank" title="<?= $LANG['F_GBIF'] ?>" aria-label="<?= $LANG['F_GBIF'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-gbif-color.png"  alt="<?= $LANG['F_GBIF'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_MORE_INFO'] ?>, <a href="https://docs.symbiota.org/about/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_READ_DOCS'] ?></a> <?= $LANG['F_CONTACT'] ?>
		<a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_SSH'] ?></a>.
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
