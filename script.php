<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_asvm
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
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