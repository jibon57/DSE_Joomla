<?php

/**
 * @package mod_DhakaStockExchange
 * @copyright	Copyright (C) HoiCoi Extension. All rights reserved.
 * @author	Jibon Lawrence Costa (jiboncosta57@gmail.com)
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
if (!function_exists('file_get_html') && !class_exists('simple_html_dom')){
	require_once dirname(__FILE__).'/simple_html_dom.php';
}
// Params
$speed = (float) $params->get('speed',6);
$shownav = $params->get('shownav','1');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// HTML DOM Collect
$html = file_get_html("http://dsebd.org/");
$result = '<div id="dcs_slide" class =" <?php echo $moduleclass_sfx; ?>">
	<ul>';

foreach ($html->find('a[class=abhead]') as $key => $data) {

	$data = strip_tags($data,"<a><img>"); // I want to take only link & image tags ;)
	$data = str_replace("displayCompany.php","http://dsebd.org/displayCompany.php",$data);
	$data = str_replace("_top","_blank",$data);
	$data = preg_replace("/<img src='(.+)' border='0'>/",'<img border="0" src="'.JURI::root().'modules/mod_dhakastockexchange/images/$1">',$data);
	$result .= "<li class='slide'>".$data."</li>";
}
$result .='</ul>
</div>';
require JModuleHelper::getLayoutPath('mod_dhakastockexchange', $params->get('layout', 'default'));
?>
