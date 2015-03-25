<?php

/**
 * @package mod_DhakaStockExchange
 * @copyright	Copyright (C) HoiCoi Extension. All rights reserved.
 * @author	Jibon Lawrence Costa (jiboncosta57@gmail.com)
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

require dirname(__FILE__).'/simple_html_dom.php';
// Params
$speed = (float) $params->get('speed',6);
$width = $params->get('width','100%');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// HTML DOM Collect
$url = "http://dsebd.org/";
$html = file_get_html($url);
$get = $html->find('a[class=abhead]');
$result = "";

foreach ($get as $key => $data) {

	$data = strip_tags($data,"<a><img>"); // I want to take only link & image tags ;)
	$data = str_replace("displayCompany.php","http://dsebd.org/displayCompany.php",$data);
	$data = str_replace("_top","_blank",$data);
	$data = preg_replace("/<img src='(.+)' border='0'>/",'<img border="0" src="'.JURI::root().'modules/mod_DhakaStockExchange/images/$1">',$data);
	$result .= "<span class='domstyle'>".$data."</span>";
}

require JModuleHelper::getLayoutPath('mod_DhakaStockExchange', $params->get('layout', 'default'));
?>
