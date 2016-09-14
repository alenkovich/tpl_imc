<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 1 columns, content only
 */
?>
<a id="content"></a>
<div id="t3-mainbody" class="t3-mainbody">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<div id="main_content" tabindex="-1" accesskey="C" style="padding-top: 85px; margin-top: -85px;outline: 0;"></div>
			<jdoc:include type="component" />
		</div>
		<!-- //MAIN CONTENT -->

</div> 