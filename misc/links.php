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
        <title><?= $DEFAULT_TITLE; ?> Useful links</title>
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
            <b>Useful links</b>
        </div>
        <!-- This is inner text! -->

        <div id="innertext">
            <h1>Useful Links</h1>
            <div style="margin:15px;">
                Links to documents and websites related to the Mycology Collections data Portal (MyCoPortal):
            </div>
            <br>
            <hr>
            <div style="margin:15px;">
                <p align="justify">
                    &#8226; <b><a target="_blank" href="https://scholar.google.com/scholar?hl=en&as_sdt=0%2C14&q=mycoportal&btnG=">Mycoportal citations</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="https://www.microfungi.org/">Microfungi Collections Consortium project website</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="https://sites.google.com/site/macrofungicollectionconsortium/">Macrofungi Collections Consortium project website (Google Sites)</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="documents/Using_the_MycoPortal.pdf">Using the MycoPortal</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="documents/Established_Mycological_Herbaria_in_the_US.pdf">Established Mycological Herbaria in the U.S.</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="documents/Preparing_and_Maintaining_a_Collection_Fieldbook.pdf">Preparing and Maintaining a Collection Fieldbook</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="https://sweetgum.nybg.org/science/projects/boletineae/wp-content/uploads/sites/6/2016/08/collecting_illustrated.pdf">Recommendations for Collecting Mushrooms for Scientific Study</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="documents/Techniques_for_Preparing_Macrofungi_Specimens_as_Scientific_Vouchers.pdf">Techniques for Preparing Macrofungi Specimens as Scientific Vouchers</a></b>
                    <br><br>
                    <hr>
                    <br><br>
                    &#8226; <b><a target="_blank" href="documents/Herbarium_Supplies_and_Equipment_Sources.pdf">Herbarium Supplies and Equipment and Sources</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="documents/Georeferencing_manual_for_NAMA.pdf">Introduction to Georeferencing</a></b>
                    <br><br>
                    &#8226; <b><a target="_blank" href="https://symbiota.org">Symbiota</a></b>
                </p>
            </div>
        </div>
        <?php
        include($SERVER_ROOT.'/includes/footer.php');
        ?>
    </body>
</html>
