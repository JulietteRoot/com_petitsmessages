<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
		<!-- <th width="5">
                <?php //echo JText::_('COM_HELLOWORLD_HELLOWORLD_HEADING_ID'); ?>
        </th> -->
        <th width="20">
                <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
        </th>
        <th width="10">
        		Titre
                <?php //echo JText::_('COM_HELLOWORLD_HELLOWORLD_HEADING_ID'); ?>
        </th>
        <th width="50">
                Message
        </th>
</tr>