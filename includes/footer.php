<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://www.nsf.gov" target="_blank" title="<?= $LANG['F_NSF'] ?>" aria-label="<?= $LANG['F_VISIT_NSF'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/01_NSF_logo.svg" alt="<?= $LANG['F_NSF_LOGO'] ?>" />
		</a>
		<a href="https://www.rockefeller.edu/" target="_blank" title="Rockefeller University" aria-label="Rockefeller University">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/02_Rockefeller_University_Seal-blue.png" alt="Rockefeller University" />
		</a>
		<a href="https://www.asu.edu/" target="_blank" title="Arizona State University" aria-label="Arizona State University">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/03_ASU_University_1_Vert_RGB_MaroonGold_150ppi.png" alt="Arizona State University" />
		</a>
		<a href="https://biodiversity.ku.edu" target="_blank" title="<?= $LANG['F_KU-BI'] ?>" aria-label="<?= $LANG['F_KU-BI'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/ku-bi_logo.png" alt="<?= $LANG['F_KU-BI_LOGO'] ?>" />
		</a>
		<a href="https://symbiota.org/" target="_blank" title="<?= $LANG['F_SSH'] ?>" aria-label="<?= $LANG['F_SSH'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/SSH.png"  alt="<?= $LANG['F_SSH_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_NSF_AWARDS'] ?> <a href="https://www.nsf.gov/awardsearch/show-award/?AWD_ID=2535312" target="_blank">2535312</a>.
	</p>
	<p>
		<?= $LANG['F_MORE_INFO'] ?>, <a href="https://docs.symbiota.org/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_READ_DOCS'] ?></a> <?= $LANG['F_CONTACT'] ?>
	<a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer"><?= $LANG['F_SSH'] ?></a>.
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
