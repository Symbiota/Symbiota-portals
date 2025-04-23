<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://www.nsf.gov" target="_blank" aria-label="<?= $LANG['F_VISIT_NSF'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" alt="<?= $LANG['F_NSF_LOGO'] ?>" />
		</a>
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
	Development supported by U.S. National Science Foundation Grants 
					(<a href="http://nsf.gov/awardsearch/showAward.do?AwardNumber=9983132" target="_blank">DBI 9983132</a>, 
					<a href="http://nsf.gov/awardsearch/showAward.do?AwardNumber=0237418" target="_blank">BRC 0237418</a>, 
					<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0743827" target="_blank">DBI 0743827</a>,
					<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0847966" target="_blank">DBI 0847966</a>)
	</p>
	<p>
		<?= (empty($DEFAULT_TITLE) ? 'This portal' : $DEFAULT_TITLE) . ' ' . 'is part of the SEINet Portal Network. <a href="https://symbiota.org/seinet/" target="_blank">Learn more here</a>.'; ?>
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
