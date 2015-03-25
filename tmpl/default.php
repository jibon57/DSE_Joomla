<?php
/**
 * @package mod_DhakaStockExchange
 * @copyright	Copyright (C) HoiCoi Extension. All rights reserved.
 * @author	Jibon Lawrence Costa (jiboncosta57@gmail.com)
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<style type="text/css">

.domstyle a{
	display: inline-block;
	text-decoration: none;
	text-align: center;
	width: 150px;
	font-size: 13px;
}

</style>

<div class =" <?php echo $moduleclass_sfx; ?>">
	<marquee onMouseOver="this.setAttribute('scrollamount', 0, 0);" OnMouseOut="this.setAttribute('scrollamount', <?php echo $speed; ?>, 0);" scrollamount="<?php echo $speed;?>" style="width: <?php echo $width; ?>"><?php print_r($result); ?></marquee>
</div>
