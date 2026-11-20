<?php
include_once('../config/symbini.php');
include_once($SERVER_ROOT . '/classes/utilities/Language.php');

Language::load('templates/loans');

header("Content-Type: text/html; charset=".$CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title><?= $LANG['LOANS']; ?></title>
		<?php

		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?= htmlspecialchars($LANG['HOME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?></a> &gt;&gt;
			<b><?= $LANG['LOANS']; ?></b>
		</div>
		<!-- This is inner text! -->
		<div role="main" id="innertext">
			<h1 class="page-heading"><?= $LANG['LOANS']; ?></h1>

			<p>
				Interested in loaning one of our specimens? The Burke Museum's Ichthyology Collection lends fish specimens to researchers and their students in the U.S. and abroad and maintains an open-access repository of genetic data and images of cryptobenthic reef fishes. All data and products derived from our materials must also be provided open-access. See the <a href="<?= $CLIENT_ROOT . '/includes/usagepolicy.php' ?>">Data Use Guidelines</a> for how to cite our specimens in any publications.
			</p>
			<p>
				Collection staff review each request based on the condition of the material, the proposed project, and the borrower's ability to care for it. Loans are generally for six months, and borrowers may request an extension. Dissections or alterations may be approved by the curator and collections manager upon request.
			</p>
			<p>
				Please <a href="https://docs.google.com/forms/d/e/1FAIpQLSd_rAxRI9XDbySQYNnTOUkKVZt2LTjXFWrgaZ20qR56o5xWuw/viewform?usp=publish-editor" target = "_blank">fill out this form</a> if you're interested in making a loan request. Please also email collections staff (xxxxx@uw.edu) and allow 2 weeks response time.
			</p>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
