<?php
defined('_JEXEC') or die('Restricted access');

/*
jimport('joomla.application.component.modelitem');

class PetitsmessagesModelPetitsmessages extends JModelItem
{

    protected $message;
    
    public function getMessage() 
    {
        if (!isset($this->message)) 
        {
            $this->message = 'Liste des messages';
        }
        return $this->message;
    }
}
*/

// import Joomla modelform library
jimport('joomla.application.component.modeladmin');

/**
 * HelloWorld Model
*/
class PetitsmessagesModelPetitsmessages extends JModelAdmin
{
	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param       type    The table type to instantiate
	 * @param       string  A prefix for the table class name. Optional.
	 * @param       array   Configuration array for model. Optional.
	 * @return      JTable  A database object
	 * @since       2.5
	 */
	public function getTable($type = 'Petitsmessages', $prefix = 'PetitsmessagesTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Method to get the record form.
	 *
	 * @param       array   $data           Data for the form.
	 * @param       boolean $loadData       True if the form is to load its own data (default case), false if not.
	 * @return      mixed   A JForm object on success, false on failure
	 * @since       2.5
	 */
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_petitsmessages.petitsmessages', 'petitsmessages',
				array('control' => 'jform', 'load_data' => $loadData));
		if (empty($form))
		{
			return false;
		}
		return $form;
	}
	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return      mixed   The data for the form.
	 * @since       2.5
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState('com_petitsmessages.edit.petitsmessages.data', array());
		if (empty($data))
		{
			$data = $this->getItem();
		}
		return $data;
	}
}