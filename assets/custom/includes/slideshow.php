<?php
?>

    <div style="float:right;margin-left:25px;;padding:0px 15px;">
        <br>
        <?php
            $ssId = 0;
            $numSlides = 10;
            $width = 350;
            $dayInterval = 1;
            $clId = 99; // "2,72,81";  // "13,4,3,8,2,7,11,12";
            $imageType = "field";
            $numDays = 30;
            ini_set('max_execution_time', 120);
            include_once($SERVER_ROOT.'/classes/PluginsManager.php');
            $pluginManager = new PluginsManager();
            $slideshow = $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval);
            // error_log($slideshow);
            echo $slideshow;
        ?>
    </div>
