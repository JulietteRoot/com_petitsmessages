<?PHP
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');


class PetitsmessagesViewPetitsmessages extends JViewLegacy
{
    /* Surcharge de la méthode display de la classe JViewLegacy */
    function display($tpl = null) 
    {
        /* Appel de la méthode getMessage du modèle */
        $this->message = $this->get("Message");
        
        parent::display($tpl);
    }
}