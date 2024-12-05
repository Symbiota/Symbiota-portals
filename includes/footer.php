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
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		This project made possible by U.S. National Science Foundation Awards
                <a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1601697" target="_blank">1601697</a>, 
				<a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1600981" target="_blank">1600981</a>, 
                <a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1601393" target="_blank">1601393</a>, 
                <a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1600976" target="_blank">1600976</a>, 
                <a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1601429" target="_blank">1601429</a>, 
                <a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1601101" target="_blank">1601101</a>, 
                <a href="http://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1601503" target="_blank">1601503</a>
	</p>
	<p>
		<?= (isset($DEFAULT_TITLE) ? $DEFAULT_TITLE : 'This portal') . ' is part of the SEINet Portal Network. <a href="https://symbiota.org/seinet/" target="_blank">Learn more here</a>.'; ?>
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
