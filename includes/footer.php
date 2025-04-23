<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="<?= $LANG['F_VISIT_IDIGBIO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="<?= $LANG['F_IDIGBIO_LOGO'] ?>" />
		</a>
		<a href="https://biodiversity.ku.edu/" target="_blank" title="Visit KU BI website" aria-label="Visit KU BI website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/KU_BI.png"  alt="KU BI Logo" />
		</a>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= (empty($DEFAULT_TITLE) ? 'This portal' : $DEFAULT_TITLE) . ' ' . 'is part of the SEINet Portal Network. <a href="https://symbiota.org/seinet/" target="_blank">Learn more here</a>.'; ?>
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
	<p style="font-size:10px;">
		Header image by Tom Koerner (USFWS) <a href="https://creativecommons.org/licenses/by/2.0/" target="_blank">CC BY 2.0</a>.
	</p>
</footer>
