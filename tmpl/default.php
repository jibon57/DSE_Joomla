<?php
/**
 * @package mod_DhakaStockExchange
 * @copyright	Copyright (C) HoiCoi Extension. All rights reserved.
 * @author	Jibon Lawrence Costa (jiboncosta57@gmail.com)
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
if ($params->get("jquery") == "1") {
	if (version_compare(JVERSION,'3','<')) {
		JFactory::getDocument()->addScript(JURI::base().'modules/mod_dhakastockexchange/js/jquery-1.11.2.min.js');
	}else {
		JHtml::_('jquery.framework');
	}
}	    
JHtml::script(Juri::base() .'modules/mod_dhakastockexchange/js/jquery.scrollbox.min.js');
?>
<script type="text/javascript">
jQuery("document").ready(function() {
	jQuery('#dcs_slide').scrollbox({
	  direction: 'h',
	  distance: 140,
	  speed: <?php echo $speed; ?>,
	  onMouseOverPause: true,
	});
	jQuery('#dcs_slide-backward').click(function () {
	  jQuery('#dcs_slide').trigger('backward');
	});
	jQuery('#dcs_slide-forward').click(function () {
	  jQuery('#dcs_slide').trigger('forward');
	});
});
</script>

<style type="text/css">
#dcs_slide {
	width: auto;
	height: 40px;
	overflow: hidden;
}
#dcs_slide ul {
	width: 1200px; !important
	height: 100px;
	overflow: hidden;
	margin: 0;
}
#dcs_slide ul li {
	height: 1.5em;
	display: inline-block;
}
#dcs_slide .slide a{
	display: inline-block;
	text-decoration: none;
	text-align: center;
	width: 150px;
	font-size: 13px;
}
.dcs_slide_nav img{
	cursor: pointer;
	height: 20px;
}


</style>
<?php 
print_r($result);
if ($shownav == 1){
?>
<div class='dcs_slide_nav'>
	<img id="dcs_slide-backward" src="<?php Juri::base(); ?>modules/mod_dhakastockexchange/images/back.png" alt="Previous">
	<img id="dcs_slide-forward" src="<?php Juri::base(); ?>modules/mod_dhakastockexchange/images/forward.png" alt="Next">
</div>
<?php } ?>
