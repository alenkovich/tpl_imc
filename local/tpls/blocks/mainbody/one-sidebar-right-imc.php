<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 2 columns: content - sidebar
 */
?>

<div id="map-sidebar">
	<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar']) ?>" style="T3Xhtml" />
</div>
<div id="imc-main" class="container-fluid">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="imc-left" class="col-xs-8">
			<?php $this->loadBlock('slideshow') ?>
			<a id="content"></a>
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<div id="main_content" tabindex="-1" accesskey="C" style="padding-top: 85px; margin-top: -85px;outline: 0;"></div>
			<jdoc:include type="component" />
			
		</div>
		<!-- //MAIN CONTENT -->

		<!-- SIDEBAR RIGHT -->
		<div class="col-xs-4 <?php $this->_c($vars['sidebar']) ?>">

		</div>
		<!-- //SIDEBAR RIGHT -->

	</div>
</div> 
