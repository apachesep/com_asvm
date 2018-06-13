<?php
/**
 * @version     1.1
 * @package     Advanced Search Manager for Virtuemart
 * @copyright   Copyright (C) 2016 JoomDev. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      JoomDev <info@joomdev.com> - http://www.joomdev.com/
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * Script file of avsm component
 */
class Com_AsvmInstallerScript
{
	/**
	 * method to install the component
	 *
	 * @return void
	 */
		
	function preflight($type, $parent) 
	{
		jimport( 'joomla.application.component.controller' );
		// Check if component is installed	
		if (!JComponentHelper::isEnabled('com_virtuemart', false) ){
			$app = JFactory::getApplication();			
			JFactory::getApplication()->enqueueMessage(JText::_('Please install VirtueMart Component First.'), 'error');
			$app->redirect('index.php?option=com_installer');			
			exit;
		}		
	}
 
	
}