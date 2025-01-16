<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://ansp.org/research/systematics-evolution/diatom-herbarium/" target="_blank" title="The Academy of Natural Sciences" aria-label="The Academy of Natural Sciences">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/ANSP_black.png" alt="The Academy of Natural Sciences Logo" />
		</a>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_MORE_INFO'] ?>, <a href="https://symbiota.org/docs" target="_blank" rel="noopener noreferrer"><?= $LANG['F_READ_DOCS'] ?></a> <?= $LANG['F_CONTACT'] ?>
		<a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_SSH'] ?></a>.
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
