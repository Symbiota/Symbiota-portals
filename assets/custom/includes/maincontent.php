        <style>
                #slideshowcontainer{
                        border: 2px solid black;
                        border-radius:10px;
                        padding:10px;
                        margin-left: auto;
                        margin-right: auto;
                }
        </style>
        <style>
            .column {
              float: left;
              padding: 0px 10px;
            }

            .rightright {
                text-align: right;
                width: 60%;
                padding-bottom: 10px;
            }

            .left {
                width: 52%;
            }

            .right {
                width: 48%;
            }

            .indent-paragraph {
                padding: 0px 20px 0px 20px;
            }

            .frontpage {
                font-size: 1.2em;
                font-kerning: none;
                line-height: 1.2em;
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }
        </style>

        <script src="<?php echo $CLIENT_ROOT; ?>/js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <script src="<?php echo $CLIENT_ROOT; ?>/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo $CLIENT_ROOT; ?>/js/jquery.slides.js" type="text/javascript"></script>

        <h1><?php echo $LANG['H_HOME_WELCOME']; ?></h1>
        <div class="row">
            <div class="column left frontpage">
                <p align="justify">
                    <span class="indent-paragraph"></span>
                    <?= $LANG['H_HOME_SUMMARY']; ?>

                </p>
            </div>
            <div class="column right">
                <?php include($SERVER_ROOT.'/assets/custom/includes/slideshow.php'); ?>
                <?php // include($SERVER_ROOT.'/self/includes/custom/testyourknowledge.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <p align="justify">&nbsp;&nbsp;Please join the Mycology Collections Portal as collaborators or regular visitors, and send your feedback to
                    <a href="mailto:help@symbiota.org">help@symbiota.org</a>.</p>
            </div>
            <div class="column rightright">
                <a href="misc/usagepolicy.php"><b>Data Usage and Citation</b></a>
            </div>
        </div>
