<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * Petitsmessages Model
 */
class PetitsmessagesModelPetitsmessages2 extends JModelList
{
        /**
         * Method to build an SQL query to load the list data.
         *
         * @return      string  An SQL query
         */
        protected function getListQuery()
        {
                // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                // Select some fields
                $query->select('id,titre,contenu');
                // From the petitsmessages table
                $query->from('#__petitsmessages');
                return $query;
        }
}