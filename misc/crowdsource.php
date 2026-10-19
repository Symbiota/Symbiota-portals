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
        <title><?= $DEFAULT_TITLE; ?> Crowdsource Get involved</title>
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
            <b>Get Involved</b>
        </div>
        <!-- This is inner text! -->

        <div id="innertext">
            <h1>Crowd Sourcing: Get Involved!</h1>
            <div style="margin:0px;">
                We need your help in advancing this project!  Follow the instructions below to join the crowd sourcing effort:
                            <div style="margin:20px;">
                <table style="text-align: left; width: 950px; height: 360px; background-color: white;" border="0" cellpadding="5" cellspacing="5">
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: middle;"><img style="width: 277px; height: 369px;" alt="" src="images/Bolbitius_reticulatus.jpg">
                                      </td>
                                      <td style="vertical-align: middle; background-color: white;">
                                          <hr style="width: 100%; height: 2px;">
                                          <br>
                                          <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fungi with conspicuous spore-bearing structures are commonly
                                              known as macrofungi (e.g., mushrooms, boletes, puffballs, club fungi,
                                              morels, stink horns, truffles, and cup fungi). The Macrofungi Collection
                                              Consortium (MaCC) is an NSF funded project that unites collections of
                                              macrofungi (currently 38 participating institutions) to digitize
                                              specimen information. This information documents the diversity
                                              and distributions of macrofungi in North America since fungal specimens
                                              were first deposited in U.S. fungaria in the 1800's.
                                          </p>
                                          <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Since its beginning, the MaCC project has made over 1.5
                                              million records of macrofungi available online through mycoportal.org,
                                              the project's data portal. Thousands of specimen label
                                              images are found among these records, and large numbers of these have
                                              not been completely transcribed. We need your help in
                                              making data from these specimens fully available. In transcribing
                                              data from fungal specimen labels, you are part of a larger effort
                                              documenting fungal diversity in North America. If you'd like to
                                              help in this effort, follow the directions below to start transcribing,
                                              or follow the links here to start transcribing for the
                                           <a href="/portal/collections/specprocessor/crowdsource/central.php">New York Botanical Garden</a>
                                              (NY), the
                                           <a href="/portal/collections/specprocessor/crowdsource/central.php">Farlow Herbarium</a>
                                              (FH; Harvard), or the
                                           <a href="/portal/collections/specprocessor/crowdsource/central.php">University of Michigan</a>
                                              (MICH).
                                           </p>
                                           <br>
                                           <br>
                                           <hr style="width: 100%; height: 2px;">
                                          <div style="text-align: center;">
                                          <p><b>Image credits: </b><i>Mushroom images on this page were provided by R. Lebeuf.</i>
                                          </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table style="text-align: left; width: 950px; background-color: white;" border="0" cellpadding="5" cellspacing="5">
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: middle;">
                                          <hr style="width: 100%; height: 2px;">
                                          <br>
                                          <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The image to the right is a label from a fungal specimen collected by
                                              Calvin Henry Kauffman, an early American mycologist. Fungal specimen labels such
                                              as this contain a few basic types of data, including the name of the fungal species
                                              (i.e., <i>Cortinarius alboviolaceus</i>), the collection locality (i.e., USA, Michigan,
                                              Ann Arbor, Cascade Glen) and date (i.e., September 18th, 1907), the collector/s (i.e.,
                                              C.H. Kauffman), as well as notes (i.e., <i>A beautiful form which might be called "forma pulcheripes”</i>).
                                              Other types of information about where the specimen was collected (e.g., the substrate
                                              the fungus was growing on and/or the habitat in which the specimen was found) may also be included.
                                           </p>
                                           <br>
                                           <hr style="width: 100%; height: 2px;">
                                       </td>
                       <td style="vertical-align: middle;"><img style="width: 500px; height: 277px;" alt="" src="images/label.jpg">
                                       </td>
                                     </tr>
                                  </tbody>
                                </table>
                                <table style="text-align: left; width: 950px; background-color: white;" border="0" cellpadding="5" cellspacing="5">
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: middle;"><img style="width: 430px; height: 277px;" alt="" src="images/Cortinarius_alboviolaceus.jpg">
                                          <div style="text-align: center;">
                                          <p><b>Field image:</b> <i>Cortinarius alboviolaceus</i> fruiting bodies collected as a specimen.</p>
                                          </div>
                                      </td>
                                      <td style="vertical-align: middle;">
                                          <hr style="width: 100%; height: 2px;">
                                          <br>
                                          <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In order to start transcribing, you will need to create a mycoportal.org login
                                              (<a href="/portal/profile/newprofile.php">click here to create login</a>). You will be assigned points
                                              for each fungal specimen record that you transcribe, and you can track your points on the
                                              <a href="/portal/collections/specprocessor/crowdsource/central.php">Crowdsourcing Score Board</a>
                                              (follow the ‘Crowd Source: Score Board’ links from the navigation bar). The top scorers will be listed along
                                              with statistics documenting their efforts as well as progress made collectively by ‘crowdsourcers’, such as
                                              yourself, in completing datasets from particular institutions. You will need to be logged into the portal
                                              whenever you are working on completing records. Once logged into the portal, you are ready to start transcribing. From the
                                              <a href="/portal/collections/specprocessor/crowdsource/central.php" target="_blank">Score Board</a>,
                                              click on the ‘Open Records’ to work on record sets from your preferred institution or follow the links above to work on
                                              sets from specific institutions (e.g., FH, MICH, or NY).
                                          </p>
                          <br>
                                          <hr style="width: 100%; height: 2px;">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table style="text-align: left; width: 950px; background-color: white;" border="0" cellpadding="5" cellspacing="5">
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: middle;">
                                          <hr style="width: 100%; height: 2px;">
                                          <br>
                                          <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once selecting a record set to work on, you will see a series of
                                              records from a given institution that need to be completed. In order to start transcribing a label to complete the specimen record,
                                              click on the corresponding 'Symbiota ID' (e.g., the ID '2190449' circled in red in the image to the right for a specimen
                                              record of <i>Chanterel alectorolophoides</i>, an older name for <i>Cantharellus cibarius</i>). Clicking on this ID link will take you
                                              to an editing page where you can enter data as you transcribe the specimen label from an image of the label that will appear on the
                                              editing page to the upper right (see image below).
                                          </p>
                                          <br>
                                          <hr style="width: 100%; height: 2px;">
                                      </td>
                                      <td style="vertical-align: top; text-align: center;"><img style="width: 314px; height: 200px;" alt="" src="images/ID_select.jpg"><br>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table style="text-align: left; width: 950px; background-color: white;" border="0" cellpadding="5" cellspacing="5">
                                  <tbody>
                                    <tr>
                                       <td>
                                          <hr style="width: 100%; height: 2px;">
                                          <br>
                                          <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't forget to click on 'Save Edits' button (circled in red at the bottom of the
                                              editing page in the image below) once you have finished transcribing the label for a particular specimen record (<i>Note - transcribed data
                                              entered and saved will not appear on mycoportal.org records until it has been approved by the corresponding institution's collection manager</i>).
                                              If the record is too difficult to transcribe, simply move on to the next record by clicking on the record navigation arrows (circled
                                              in red at the top of the editing page in the image below). Detailed notes on transcribing, including how to zoom in on elements in the image
                                              label, are provided below. Click on these links to learn more about the institutions making their data available for crowdsourcing:
                                          </p>
                                          <br>
                                          <div style="text-align: center;">
                                              The <a href="http://sciweb.nybg.org/science2/SteereHerbarium.asp" target="_blank">New York Botanical Garden</a>(NY; William and Lynda Steere Herbarium)<br>
                                              The <a href="http://huh.harvard.edu/pages/farlow-herbarium-fh" target="_blank">Farlow Herbarium</a> (FH; Harvard University)<br>
                                              The <a href="http://herbarium.lsa.umich.edu/herb/collections/default.asp" target="_blank">University of Michigan Herbarium</a> (MICH)<br>
                                          </div>
                                          <br>
                                          <hr style="width: 100%; height: 2px;">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table style="text-align: left; width: 950px; background-color: white;" border="0" cellpadding="5" cellspacing=“5”>
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: top;"><img style="width: 850px; height: 509px;" alt="" src="images/editor_view.jpg">
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table style="text-align: left; width: 950px; background-color: white;" border="0" cellpadding="5" cellspacing=“5”>
                                  <tbody>
                                    <tr>
                                      <td style="vertical-align: middle;">
                                          <hr style="width: 100%; height: 2px;">
                                          <br>
                                          <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Notes on transcribing specimen data from a label image:</b>
                                          <br>
                                          <p align="justify">
                                          <b>- Position Label and Enlarge View:</b> The label can be positioned in the 'Label Processing' image frame by
                                              holding down the 'command' button, placing the cursor over the image, and holding and moving the cursor to place the label in the desired position.
                                              To enlarge the label view, the image frame can be widened by clicking and dragging on the right border.<br>
                                          <br>
                                          <b>- Zoom on Label Elements:</b> Zoom in on a label element by placing the cursor over the label image, holding down the 'Shift'
                                              button, and holding and dragging the cursor up to enlarge the image or down to reduce it.<br>
                                          <br>
                                          <b>- Navigating Between Images:</b> There may be several images associated with a single record, the exact number will be displayed to the bottom right
                                              of the image frame (e.g., image 1 of 2=&gt;&gt;). Click on the arrow symbols to navigate through the images until the label image is reached. Taking
                                              a quick browse through the images may reveal additional information (e.g., annotations, note sheets, etc.); however, it is not necessary to transcribe
                                              large segments of notes (e.g., a page giving a complete technical description of the specimen).<br>
                                          <br>
                                          <b>- Image Resolution:</b> If a label element is not clearly discernible, try clicking on the 'High Res.' radio button to the upper right of the image
                                               frame before zooming in on the element.<br>
                                          <br>
                                          <b>- Optical Character Recognition (OCR):</b> An OCR attempt can be made on the label by selecting the desired 'OCR' radio buttons (with or without result
                                              analysis) and then clicking on the 'OCR Image' button to the lower left of the image frame (<i>Note - OCR results often take more time to review and
                                              cut/paste into the appropriate data fields than it takes to simply keystroke the data into the appropriate data fields on the editing page</i>).<br>
                                          <br>
                                          <b>- Data Field Information:</b> Click on the small green question mark next to the data field heading to link on
                                          <a href="http://symbiota.org/docs/symbiota-occurrence-data-fields-2" target="_blank">information</a> about that field.<br>
                                          <br>
                                          <b>- Collector Field:</b> Enter the name of the person who collected the specimen. This information is often indicated by label elements such as 'Collected by',
                                              'Coll.', or 'Leg.' (<i>Latin - legit: he or she collected</i>).<br>
                                          <br>
                                          <b>- Associated Collectors Field:</b> If more than one collector is indicated, enter the names of any additional collectors into this field.<br>
                                          <br>
                                          <b>- Number Field:</b> This number is specific to the specimen collector, and is often called the 'collector's number'. At times there will be
                                               a collector's number as well as a field number (e.g., one that is specific to a project). If this is the case, enter the collector
                                               number into this field and indicate the addition field number in the 'Notes' field.<br>
                                          <br>
                                          <b>- Date Field:</b> Enter the date in the numeric form (year-month-day, e.g., 1912-07-17 for July 7th, 1912). Enter zeros for date elements that are missing
                                               (e.g., 1912-07-00 for July 1912). If the date is represented as a range, enter the first date of the range into the data field and indicate the
                                               complete range in the 'Verbatim Date' field (see the example above).<br>
                                          <br>
                                          <b>- Verbatim Date Field:</b> Enter the date ranges or seasonal dates (e.g., Fall 1912) as they appear on the label.<br>
                                          <br>
                                          <b>- Scientific Name Field:</b> This field should already be populated with the scientific name of the specimen (e.g., <i>Cortinarius alboviolaceus</i>) and
                                               should not be changed. If the scientific name does not appear in this field, the name given on the label can be entered.<br>
                                          <br>
                                          <b>- Country Field:</b> Enter the country cited on the label here (typically 'USA').<br>
                                          <br>
                                          <b>- State/Province Field:</b> Enter the state or province cited on the label here. Spell the state or province in full even if an abbreviation is given on the label.<br>
                                          <br>
                                          <b>- County Field:</b> Enter the county for the locality cited on the label. This field can be left blank if the county is not cited or the county can be entered if it is
                                               known or can be determined.<br>
                                          <br>
                                          <b>- Locality Field:</b> Enter the locality information cited on the label, moving from the most inclusive area to the least inclusive (e.g., Yellowstone National Park,
                                               Mammoth Hot Springs, off trail in the upper terrace area).<br>
                                          <br>
                                          <b>- Latitude and Longitude Fields:</b> Enter only decimal latitude/longitude (e.g., 44.2794/-73.98028) values into these fields. Non-decimal values can be
                                               entered into the 'Verbatim Coordinates' field (see below). Decimal latitude/longitude values can be determined using one of the two georeferencing tools
                                               provided on the editing page (see below); however, entering georeference data is not required when transcribing labels.<br>
                                          <br>
                                          <b>- Georeference Tools:</b> The 'GEOLocate tool' attempts to determine the coordinates based on the geographic data entered for the record (e.g., a city given in the
                                               locality for a particular state). To use this tool click on the whirlwind icon (circled in red toward the middle of the editing page in the image above) after entering the geographic
                                               data. If coordinates can be determined from the geographic data, click on the 'Save To Your Application' button at the bottom of the GEOLocate page to carry the coordinates to the record.
                                               Note that a value will also appear in the 'Uncertainty' field. This value represents a radius (in meters) that encompasses the locality (e.g., 2015 m or ~2 km encircling the village of Lake
                                               Placid in the example above), a circumscribed area within which the collection occurred but cannot be exactly determined. The 'Google Maps tool' determines the coordinates based on a point
                                               that the transcriber places on the Google map (first navigating to the locality, then click on the map to place the point, then click on the 'Submit Coordinates' button toward
                                               the top of the Google Maps page to carry the coordinates to the record). The Google Maps tool can be accessed by clicking on the globe icon to the left of the GEOLocate
                                               tool whirlwind icon mentioned above.<br>
                                          <br>
                                          <b>- Verbatim Coordinates Field:</b> Enter any coordinate information (e.g., latitude/longitude, UTMs) cited on the label. Latitude/Longitude data entered here (e.g., 44 35' 15" N 73 10' 23" W)
                                               can be converted to decimal values by first entering the data and then clicking on the double arrow ('&lt;&lt;') symbol to the left of the field to transfer the decimal form into the 'Latitude'
                                               and 'Longitude' fields.<br>
                                          <br>
                                          <b>- Elevation Fields:</b> Elevation data can be entered in meters, either as one value (enter into the left 'Elevation in Meters' field) or an elevation range (using both
                                               fields). If the elevation data on the label is given in feet, then that data should be entered into the 'Verbatim Elevation' field (e.g., 1500 ft.). Verbatim elevation data can be converted
                                               to the metric value by clicking on the double arrow ('&lt;&lt;') symbol to the left of this field to transfer the metric form into the 'Elevation' field.<br>
                                          <br>
                                          <b>- Habitat Field: </b>Enter any information related to the habitat (within which the specimen was found) that can be determined from the label (e.g., 'grassy field in
                                               Oak savanna').<br>
                                          <br>
                                          <b>- Substrate Field:</b> Enter any information related to the substrate (on which the specimen was growing) that can be determined from the label (e.g., 'growing from a
                                               rotting oak log' or 'on ground').<br>
                                          <br>
                                          <b>- Notes Field:</b> Notes on the specimen (or any other information that does not fit in the fields mentioned above) appearing on the label can be entered into this field.<br>
                                          <br>
                                          <b>- Saving the Specimen Record Edits:</b> Click on the 'Save Edits' button (circled in red at the bottom of the editing page in the image above) once you have finished transcribing
                                               the label for a particular specimen record.<br>
                                          <br>
                                          <b>- Status Auto-Set:</b> The status will automatically be set to 'Pending Review' and should not be changed.<br>
                                          <br>
                                          <b>- Navigating Between Records:</b> Once the label for a given specimen record has been completely transcribed, save the record edits and move on to the next record by clicking on the
                                               record navigation arrows (circled in red at the top of the editing page in the image above). If for some reason the label is difficult to transcribe (e.g., unintelligible writing),
                                               skip the problematic record and move on to the next one.<br>
                                          <br>
                                          <b>- Accessing Saved Records:</b> To access records already saved but not yet approved, click on 'view records' for 'Pending points' under ’Current User&#8217;s Status' on the crowdsourcing
                                          <a href="/portal/collections/specprocessor/crowdsource/central.php" target="_blank">Score Board</a>. Edits can then be made by clicking on the small pencil icon in the
                                               'Edit' column corresponding to the record in need of editing. Correct errors or add missing data and then save record edits as instructed above. After a record has been reviewed and approved,
                                                the record will no longer be able for editing.<br>
                                          <br>
                                      <hr style="width: 100%; height: 2px;">
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            </div>
            </div>
        </div>
        <?php
        include($SERVER_ROOT.'/includes/footer.php');
        ?>
    </body>
</html>
