<style>
#footer {
  justify-content: center;
}

.footer-column {
  float: left;
  width: 25%;
  display: flex;
  justify-content: center;
  padding-top: 10px;
}

/* Clear floats after the columns */
.footer-row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 600px) {
  .footer-column {
    width: 100%;
  }
}
</style>

<footer id="footer">
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
        <div class="footer-column">
            <a href="https://www.nsf.gov" target="_blank" aria-label="<?= $LANG['F_VISIT_NSF'] ?>">
                <img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" alt="<?= $LANG['F_NSF_LOGO'] ?>" />
            </a>
        </div>
        <div class="footer-column">
            <a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="<?= $LANG['F_VISIT_IDIGBIO'] ?>">
                <img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="<?= $LANG['F_IDIGBIO_LOGO'] ?>" />
            </a>
        </div>
        <div class="footer-column">
            <a href="https://biodiversity.ku.edu/" target="_blank" title="<?= $LANG['F_KU-BI'] ?>" aria-label="Visit KU BI website">
                <img src="<?= $CLIENT_ROOT; ?>/images/layout/ku-bi_logo.png"  alt="<?= $LANG['F_KU-BI_LOGO'] ?>" />
            </a>
        </div>
        <div class="footer-column">
            <a href="https://inhs.illinois.edu" target="_blank" title="Illinois Natural History Survey">
                <img src="<?= $CLIENT_ROOT; ?>/images/layout/INHS-PRI-UI.png" style="width:200px;padding: 0px 6px 14px 6px;">
            </a>
        </div>
        <div class="footer-column">
        </div>
        <div class="footer-column">
            <a href="https://symbiota.org/" target="_blank" title="<?= $LANG['F_SSH'] ?>" aria-label="Visit Symbiota website">
                <img src="<?= $CLIENT_ROOT; ?>/images/layout/SSH.png"  alt="<?= $LANG['F_SSH_LOGO'] ?>" />
            </a>
        </div>
        <div class="footer-column">
            <a href="https://globaltcn.utk.edu/" target="_blank">
                <img src="<?= $CLIENT_ROOT; ?>/images/layout/global_logo_t.png" style="width:150px">
            </a>
        </div>
	</div>
	<p>
        <?= $LANG['F_NSF_AWARDS'] ?>
           <a href="https://www.nsf.gov/awardsearch/show-award?AWD_ID=1206197" target="_blank">#1206197</a>,
           <a href="https://www.nsf.gov/awardsearch/show-award?AWD_ID=1502735" target="_blank">#1502735</a>,
           <a href="https://www.nsf.gov/awardsearch/show-award?AWD_ID=2001422" target="_blank">#2001422</a>.
	</p>
	<p>
		<?= $LANG['F_MORE_INFO'] ?>, <a href="https://docs.symbiota.org/about/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_READ_DOCS'] ?></a> <?= $LANG['F_CONTACT'] ?>
		<a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_SSH'] ?></a>.
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>



<!--
<td id="footer" colspan="3">
			<div class="footer-row">
                            <div class="footer-column">
				<a href="https://www.nsf.gov" target="_blank"><img src="/portal/images/layout/logo_nsf.gif" style="width:70px"></a>
                            </div>
                            <div class="footer-column">
				<a href="http://idigbio.org" target="_blank" title="iDigBio"><img src="/portal/images/layout/logo_idig.png" style="width:150px"></a>
                            </div>
                            <div class="footer-column">
				<a href="https://biokic.asu.edu" target="_blank" title="Biodiversity Knowledge Integration Center"><img src="/portal/images/layout/logo-asu-biokic.png" style="width:180px;"></a>
                            </div>
			</div>
		</td>
-->
