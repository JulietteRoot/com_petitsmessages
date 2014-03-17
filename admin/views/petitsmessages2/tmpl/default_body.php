<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr>
                <td>
                        <?php echo $item->titre; // à récupérer ?>
                </td>
                <td>
                        <?php echo $item->contenu; // à récupérer ?>
                </td>
        </tr>
<?php endforeach; ?>