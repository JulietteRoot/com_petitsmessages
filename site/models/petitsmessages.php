<?php
defined('_JEXEC') or die('Restricted access');

/* importation de JModelItem, classe de modèle de base de Joomla */
jimport('joomla.application.component.modelitem');

/*
 * Spécialisation de JModelItem pour ce composant
 */
class PetitsmessagesModelPetitsmessages extends JModelItem
{

    protected $message;
    
    public function getMessage() 
    {
        if (!isset($this->message)) 
        {
            $this->message = 'Poster un message';
        }
        return $this->message;
    }
}