<SCRIPT LANGUAGE=JAVASCRIPT>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</SCRIPT>
<script type="text/javascript" src="<?php echo $CLIENT_ROOT; ?>/js/slideshow.js">
</script>

<script type="text/javascript">
<!--

// Create the slideshow object
ss = new slideshow("ss");

// Set the delay between slides, 1000 = 1 sec
// ss.timeout = 3000;

// By default, all of the slideshow images are prefetched.
// If you have a large number of slides you can limit the
// number of images that are prefetched.
// ss.prefetch = 1;

// By default the slideshow will repeat when you get to the end.
// ss.repeat = false;

// Create the slides and add them to the slideshow.

s = new slide();
s.src =  "<?php echo $CLIENT_ROOT; ?>/images/layout/header1.jpg";
ss.add_slide(s);

s = new slide();
s.src =  "<?php echo $CLIENT_ROOT; ?>/images/layout/header2.jpg";
ss.add_slide(s);

s = new slide();
s.src =  "<?php echo $CLIENT_ROOT; ?>/images/layout/header3.jpg";
ss.add_slide(s);

s = new slide();
s.src =  "<?php echo $CLIENT_ROOT; ?>/images/layout/header4.jpg";
ss.add_slide(s);

s = new slide();
s.src =  "<?php echo $CLIENT_ROOT; ?>/images/layout/header5.jpg";
ss.add_slide(s);

// The following loop sets an attribute for all of the slides.
// This is easier than setting the attributes individually.

for (var i=0; i < ss.slides.length; i++) {

  s = ss.slides[i];
  s.target = "ss_popup";
  s.attr = "width=750,height=115,resizable=no,scrollbars=no,border=0";

}
//-->
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div id="bannerslideshow" style="height:115px;" onload="ss.restore_position('SS_POSITION');ss.update();" onunload="ss.save_position('SS_POSITION');" >
				<form id="ss_form" name="ss_form" action="" method="get" style="margin-bottom:0px;">
					<div id="ss_img_div" style="">
						<img id="ss_img" name="ss_img" src="<?php echo $CLIENT_ROOT; ?>/images/layout/header1.jpg" style="margin-bottom:0px;width: 900px; filter: progid:DXImageTransform.Microsoft.Fade();" alt="Slideshow image"/>
					</div>
				</form>
	           </div>
		</td>
	</tr>
	<tr>
	<?php 
	if($displayLeftMenu){
		?> 
		<td id='middleleft' background="<?php echo $CLIENT_ROOT;?>/images/layout/defaultleftstrip.gif" style="background-repeat:repeat-y;"> 
			<div style="">
				<?php include($SERVER_ROOT."/includes/leftmenu.php"); ?>
			</div>
		</td>
		<?php 
	}
	else{
		?>
        	<td id="middleleftnomenu" background="<?php echo $CLIENT_ROOT;?>/images/layout/defaultleftstrip.gif">
        		<div style='width:20px;'></div>
        	</td>
		<?php 
	}
	?>
	<td id='middlecenter'>
<Script type="text/javascript">
// Finish defining and activating the slideshow

// Set up the select list with the slide titles
function config_ss_select() {
  var selectlist = document.forms[0].ss_select;
 // selectlist.options.length = 0;
 // for (var i = 0; i < ss.slides.length; i++) {
 //   selectlist.options[i] = new Option();
 //   selectlist.options[i].text = (i + 1) + '. ' + ss.slides[i].title;
 // }
 // selectlist.selectedIndex = ss.current;
}

// If you want some code to be called before or
// after the slide is updated, define the functions here

ss.pre_update_hook = function() {
  return;
}

ss.post_update_hook = function() {
  // For the select list with the slide titles,
  // set the selected item to the current slide
  //document.forms[0].ss_select.selectedIndex = this.current;
  //document.ss_form.ss_select.selectedIndex = this.current;
  return;
}

if (document.images) {

  // Tell the slideshow which image object to use
  ss.image = document.images.ss_img;

  // Tell the slideshow the ID of the element
  // that will contain the text for the slide
  ss.textid = "ss_text";

  // Randomize the slideshow?
  ss.shuffle();

  // Set up the select list with the slide titles
  config_ss_select();

  // Update the image and the text for the slideshow
  ss.update();

  // Auto-play the slideshow
  ss.play();
}
//-->
</Script>

