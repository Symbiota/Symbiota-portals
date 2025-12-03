<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="<?= $LANG['F_VISIT_IDIGBIO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="<?= $LANG['F_IDIGBIO_LOGO'] ?>" />
		</a>
		<a href="https://biodiversity.ku.edu" target="_blank" title="<?= $LANG['F_KU-BI'] ?>" aria-label="<?= $LANG['F_KU-BI'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/ku-bi_logo.png"  alt="<?= $LANG['F_KU-BI_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
