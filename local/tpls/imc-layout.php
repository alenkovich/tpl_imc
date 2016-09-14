<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */

$responsive = $this->getParam('responsive', 1);
$resClass = "";
if ($responsive==0){
	$resClass = "no-responsive";
}

defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" /> <?php echo $resClass ?>'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
        <style type="text/css">
			html,body{
			  	height:100%;
			}

			body{
			  	padding-top:56px; /*padding for navbar*/
			}

			#imc-main, #imc-main>.row {
				height:100%;
			}

			#imc-main>.row {
			    overflow-y:scroll;
			}

			#imc-left {
				height:100%;
				padding-right:20px;
			}

			#map-sidebar {
				width:33.3333%;
			    height:calc(100% - 0);
			    position:absolute;
			    right:16px;
			    top:56px;
			    bottom:0;
			    overflow:hidden;
			}
			.slideshow {
				padding-top:0;
				background: none;
				border: none;
				padding-left: 0px;
			}
        </style>
</head>

<body>
<a class="skip-main" href="#main_content"><?php echo JText::_('Skip to main content'); ?></a>
	<?php $this->loadBlock('stripe') ?>
	
	<?php $this->loadBlock('header') ?>
	
	<?php //$this->loadBlock('slideshow') ?>

	<?php $this->loadBlock('mainbody-content-left-imc') ?>
	
	<?php //$this->loadBlock('footer') ?>


<?php $this->loadBlock('footer_js') ?>

</body>
</html>
