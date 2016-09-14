<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div id="stripe">
		
    <?php if ($this->countModules('stripe')) : ?>
    <div class="container">
      <jdoc:include type="modules" name="<?php $this->_p('stripe') ?>" style="raw" />
    </div>
    <?php endif ?>

</div>

