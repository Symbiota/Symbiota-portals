<?php
set_error_handler(function ($errno, $errstr) {
    // Return true to suppress specific warnings
    return (
        strpos($errstr, 'headers already sent') !== false ||
        strpos($errstr, 'Session cannot be started') !== false
    );
});

include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);

if (!isset($LANG['HOME'])) {
    $LANG['HOME'] = 'Home';
}

if ($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) {
    include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
} else {
    include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
}
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
    <head>
        <title><?= $DEFAULT_TITLE; ?> Acknowledgements</title>
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
            <a href="../index.php"><?= $LANG['HOME']; ?></a> &gt;&gt;
            <b>Acknowledgements</b>
        </div>
        <!-- This is inner text! -->

        <div id="innertext">
            <h1>Acknowledgements</h1>
            <div style="margin:15px;">
                We would like to acknowledge the following individuals and institutions for their contributions
                to the Mycology Collections data Portal (MyCoPortal):
            </div>
            <div style="margin:15px;"> <p align="justify">
                &#8226; <b>The US National Science Foundation (NSF)</b>, which awarded support for a collaborative effort of US herbaria (the Macrofungi Collection Consortium - MaCC)
                to database ca. 1.4 million macrofungi specimens from North America
                (<a target="_blank" href="https://www.nsf.gov/awardsearch/showAward.do?AwardNumber=1206197&WT.z_pims_id=503559">NSF ADBC 1206197</a>).
                The data from MaCC will be made accessible through MyCoPortal.
                <br><br>
                &#8226;  <b>Ed Gilbert</b>, developer of <a target="_blank" href="https://symbiota.org/">Symbiota Virtual Flora Software</a> that gives MyCoPortal its functionality.
                Financial support for software development has also come the NSF (<a target="_blank" href="https://www.nsf.gov/awardsearch/showAward.do?AwardNumber=0743827">ABI 0743827</a>).
                <br><br>
                &#8226;  <b>Paul Kirk</b>, assisted in the creation of the MyCoPortal taxonomic structure (the "taxonomic thesaurus") by providing resources from <a target="_blank" href="https://www.indexfungorum.org/">Index Fungorum</a>.
                <br><br>
                &#8226;  <b>The Integrated Digitized Biocollections Hub </b> (<a target="_blank" href="https://www.idigbio.org/">iDigBio</a>), which provides resources for the Advancing Digitization of
                Biological Collections (ADBC) project funded by the National Science Foundation.
                <br><br>
                &#8226;  <b>Numerous herbaria</b>, whose tremendous efforts through the Macrofungi Collection Consortium are reflected in the data that is accessible through MyCoPortal
                (click <a target="_blank" href="https://mycoportal.org/portal/collections/misc/collprofiles.php">here</a> for a list of participating institutions).
                <br><br>
                &#8226;  <b>Citizen mycologists and mycological societies</b>, who have contributed data and photographs of field specimens, and whose names appear in credits for the numerous checklists and images available on MyCoPortal.
                </p>
            </div>
        </div>

        <?php
        include($SERVER_ROOT.'/includes/footer.php');
        ?>
    </body>
</html>
